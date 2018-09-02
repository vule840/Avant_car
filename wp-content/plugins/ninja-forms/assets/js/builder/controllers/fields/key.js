/**
 * When we add a new field, update its key.
 *
 * When we change the key, update any refs to the key.
 *
 * @package Ninja Forms builder
 * @subpackage Fields
 * @copyright (c) 2015 WP Ninjas
 * @since 3.0
 */
define( [], function() {
	var controller = Marionette.Object.extend( {
		initialize: function() {
			// When we add a field, update its key.
			this.listenTo( nfRadio.channel( 'fields' ), 'add:field', this.newFieldKey );

			// When we edit a label, update our key.
			this.listenTo( nfRadio.channel( 'fieldSetting-label' ), 'update:setting', this.updateLabel );

			// When we edit a key, check for places that key might be used.
			this.listenTo( nfRadio.channel( 'fieldSetting-key' ), 'update:setting', this.updateKey );

			// When we type inside the admin key field, we need to save our manual_key setting.
			this.listenTo( nfRadio.channel( 'setting-key' ), 'keyup:setting', this.keyUp );
		},

		/**
		 * Add a key to our new field model.
		 *
		 * @since 3.0
		 * @param backbone.model model new field model
		 * @return void
		 */
		newFieldKey: function( model ) {
			var d = new Date();
			var n = d.valueOf();
			var key = this.slugify( model.get( 'type' ) + '_' + n );

			model.set( 'key', key, { silent: true } );

			if( 'undefined' == model.get( 'manual_key' ) ) {
				model.set('manual_key', false, {silent: true});
			}
		},

		updateLabel: function( model ) {

			/*
			 * If we haven't entered a key manually, update our key when our label changes.
			 */
			if ( ! model.get( 'manual_key' ) && 0 != jQuery.trim( model.get( 'label' ) ).length ) {
				/*
				 * When we're editing settings, we expect the edits to fire one at a time.
				 * Since we're calling this in the middle of our label update, anything that inquires about what has changed after we set our key will see both label and key.
				 * We need to remove the label from our model.changed property so that all that has changed is the key.
				 *
				 */
				delete model.changed.label;
				var d = new Date();
				var n = d.valueOf();
				var key = this.slugify( model.get( 'label' ) + '_' + n );
                // If our slug didn't setup correctly...
                // Force a valid entry.
                if ( -1 == key.indexOf( '_' ) ) key = 'field_' + key;
				model.set( 'key', key );
			}
		},

		/**
		 * When a field key is updated, find any merge tags using the key and update them.
		 *
		 * @since  3.0
		 * @param  backbone.model model field model
		 * @return void
		 */
		updateKey: function( dataModel ) {
			var key = dataModel.get( 'key' );
			this.settingModel = nfRadio.channel( 'fields' ).request( 'get:settingModel', 'key' );
			this.setError( key, dataModel );
		},

		keyUp: function( e, settingModel, dataModel ) {
			dataModel.set( 'manual_key', true );
			this.settingModel = settingModel;
			var key = jQuery( e.target ).val();
			this.setError( key, dataModel );
		},

		setError: function( key, dataModel ) {
			var error = false;
			if ( '' == jQuery.trim( key ) ) {
				error = 'Field keys can\'t be empty. Please enter a key.';
			} else if ( key != key.toLowerCase() ) {
				error = 'Field keys must be lowercase.';
			} else if ( key != key.replace( ' ', '_' ) ) {
				error = 'Field keys must cannot use spaces. Separate with "_" instead.';
			} else if ( '_' == key.slice( -1 ) ) {
				error = 'Field keys cannot end with a "_"';
			} else if ( key != this.slugify( key ) ) {
				error = 'Invalid Format.';
			} else if ( key != this.keyExists( key, dataModel ) ) {
				error = 'Field keys must be unique. Please enter another key.'
			}

			if ( error ) {
				this.settingModel.set( 'error', error );
			} else {
				nfRadio.channel( 'app' ).trigger( 'update:fieldKey', dataModel );
				this.settingModel.set( 'error', false );
			}
		},

		keyExists: function( key, dataModel ) {
			var newKey = this.slugify( key );
			if ( 0 != newKey.length ) {
				key = newKey;
			}
			var fieldCollection = nfRadio.channel( 'fields' ).request( 'get:collection' );
			var x = 1;
			var testKey = key;
			_.each( fieldCollection.models, function( field ) {
				if ( dataModel != field && testKey == field.get( 'key' ) ) {
					testKey = key + '_' + x;
					x++;
				}
			} );

			key = testKey;

			return key;
		},

		slugify: function( string ){
			return jQuery.slugify( string, { separator: '_' } )
		}
	});

	return controller;
} );
