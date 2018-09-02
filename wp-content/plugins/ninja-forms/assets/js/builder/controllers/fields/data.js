/**
 * Handles interactions with our field collection.
 * 
 * @package Ninja Forms builder
 * @subpackage Fields
 * @copyright (c) 2015 WP Ninjas
 * @since 3.0
 */
define( ['models/fields/fieldCollection', 'models/fields/fieldModel'], function( fieldCollection, fieldModel ) {
	var controller = Marionette.Object.extend( {
		adding: false,
		removing: false,
		
		initialize: function() {
			// Load our field collection from our localized form data
			this.collection = new fieldCollection( preloadedFormData.fields );
			// Set our removedIDs to an empty object. This will be populated when a field is removed so that we can add it to our 'deleted_fields' object.
			this.collection.removedIDs = {};

			// Respond to requests for data about fields and to update/change/delete fields from our collection.
			nfRadio.channel( 'fields' ).reply( 'get:collection', this.getFieldCollection, this );
			nfRadio.channel( 'fields' ).reply( 'get:field', this.getField, this );
			nfRadio.channel( 'fields' ).reply( 'redraw:collection', this.redrawFieldCollection, this );
			nfRadio.channel( 'fields' ).reply( 'get:tmpID', this.getTmpFieldID, this );

			nfRadio.channel( 'fields' ).reply( 'add', this.addField, this );
			nfRadio.channel( 'fields' ).reply( 'delete', this.deleteField, this );
			nfRadio.channel( 'fields' ).reply( 'sort:fields', this.sortFields, this );

			/*
			 * Respond to requests to set our 'adding' and 'removing' state. This state is used to track whether or not
			 * we should run animations in our fields collection.
			 */
			nfRadio.channel( 'fields' ).reply( 'get:adding', this.getAdding, this );
			nfRadio.channel( 'fields' ).reply( 'set:adding', this.setAdding, this );
			nfRadio.channel( 'fields' ).reply( 'get:removing', this.getRemoving, this );
			nfRadio.channel( 'fields' ).reply( 'set:removing', this.setRemoving, this );
		},

		getFieldCollection: function() {
			return this.collection;
		},

		redrawFieldCollection: function() {
			this.collection.trigger( 'reset', this.collection );
		},

		getField: function( id ) {
			if ( this.collection.findWhere( { key: id } ) ) {
				/*
				 * First we check to see if a key matches what we were sent.
				 */				
				return this.collection.findWhere( { key: id } );
			} else {
				/*
				 * If it doesn't, we try to return an ID that matches.
				 */
				return this.collection.get( id );
			}
		},

		/**
		 * Add a field to our collection. If silent is passed as true, no events will trigger.
		 * 
		 * @since 3.0
		 * @param Object 	data 			field data to insert
		 * @param bool 		silent 			prevent events from firing as a result of adding
		 * @param bool  	renderTrigger	should this cause the view to re-render?
		 * @param string  	action			action context - are we performing a higher level action? i.e. duplicate
		 */
		addField: function( data, silent, renderTrigger, action ) {

			/*
			 * Set our fields 'adding' value to true. This enables our add field animation.
			 */
			nfRadio.channel( 'fields' ).request( 'set:adding', true );

			silent = silent || false;
			action = action || '';
			renderTrigger = ( 'undefined' == typeof renderTrigger ) ? true : renderTrigger;

			if ( false === data instanceof Backbone.Model ) {
				if ( 'undefined' == typeof ( data.id ) ) {
					data.id = this.getTmpFieldID();
				}
				var model = new fieldModel( data );
			} else {
				var model = data;
			}

			// console.log( model );

			/*
			 * TODO: Add an nfRadio message filter for the model variable.
			 * Currently, we manually replace for saved fields; this should be moved to a separate controller.
			 * 
			 * If we're adding a saved field, make sure that we set the type to the parentType.
			 */

			if ( jQuery.isNumeric( model.get( 'type' ) ) ) {
				var savedType = nfRadio.channel( 'fields' ).request( 'get:type', model.get( 'type' ) );
				model.set( 'type', savedType.get( 'parentType' ) );
			}

			var newModel = this.collection.add( model, { silent: silent } );
			
			// Set our 'clean' status to false so that we get a notice to publish changes
			nfRadio.channel( 'app' ).request( 'update:setting', 'clean', false );
			nfRadio.channel( 'fields' ).trigger( 'add:field', model );
			if ( renderTrigger ) {
				nfRadio.channel( 'fields' ).trigger( 'render:newField', newModel, action );
			}
			if( 'duplicate' == action ){
                nfRadio.channel( 'fields' ).trigger( 'render:duplicateField', newModel, action );
			}
			nfRadio.channel( 'fields' ).trigger( 'after:addField', model );
			
			return model;
		},

		/**
		 * Update a field setting by ID
		 * 
		 * @since  3.0
		 * @param  int 		id    field id
		 * @param  string 	name  setting name
		 * @param  mixed 	value setting value
		 * @return void
		 */
		updateFieldSetting: function( id, name, value ) {
			var fieldModel = this.collection.get( id );
			fieldModel.set( name, value );
		},

		/**
		 * Get our fields sortable EL
		 * 
		 * @since  3.0
		 * @param  Array 	order optional order array like: [field-1, field-4, field-2]
		 * @return void
		 */
		sortFields: function( order, ui, updateDB ) {
			if ( null == updateDB ) {
				updateDB = true;
			}
			// Get our sortable element
			var sortableEl = nfRadio.channel( 'fields' ).request( 'get:sortableEl' );
			if ( jQuery( sortableEl ).hasClass( 'ui-sortable' ) ) { // Make sure that sortable is enabled
				// JS ternerary for setting our order
				var order = order || jQuery( sortableEl ).sortable( 'toArray' );

				// Loop through all of our fields and update their order value
				_.each( this.collection.models, function( field ) {
					// Get our current position.
					var oldPos = field.get( 'order' );
					var id = field.get( 'id' );
					if ( jQuery.isNumeric( id ) ) {
						var search = 'field-' + id;
					} else {
						var search = id;
					}
					
					// Get the index of our field inside our order array
					var newPos = order.indexOf( search ) + 1;
					field.set( 'order', newPos );
				} );
				this.collection.sort();

				if ( updateDB ) {
					// Set our 'clean' status to false so that we get a notice to publish changes
					nfRadio.channel( 'app' ).request( 'update:setting', 'clean', false );
					// Update our preview
					nfRadio.channel( 'app' ).request( 'update:db' );					
				}
			}
		},

		/**
		 * Delete a field from our collection.
		 * 
		 * @since  3.0
		 * @param  backbone.model 	model 	field model to be deleted
		 * @return void
		 */
		deleteField: function( model ) {
			nfRadio.channel( 'fields' ).trigger( 'delete:field', model );
			this.removing = true;
			this.collection.remove( model );
			
			// Set our 'clean' status to false so that we get a notice to publish changes
			nfRadio.channel( 'app' ).request( 'update:setting', 'clean', false );
			nfRadio.channel( 'app' ).request( 'update:db' );

		},

		/**
		 * Return a new tmp id for our fields.
		 * Gets the field collection length, adds 1, then returns that prepended with 'tmp-'.
		 * 
		 * @since  3.0
		 * @return string
		 */
		getTmpFieldID: function() {
			var tmpNum = this.collection.tmpNum;
			this.collection.tmpNum++;
			return 'tmp-' + tmpNum;
		},

		getAdding: function() {
			return this.adding;
		},

		setAdding: function( val ) {
			this.adding = val;
		},

		getRemoving: function() {
			return this.removing;
		},

		setRemoving: function( val ) {
			this.removing = val;
		}
	});

	return controller;
} );