define([], function() {
	var radioChannel = nfRadio.channel( 'date' );
	var errorID = 'invalid-date';

	var controller = Marionette.Object.extend( {

		initialize: function() {
			this.listenTo( radioChannel, 'change:modelValue', this.onChangeModelValue );
			this.listenTo( radioChannel, 'keyup:field', this.dateKeyup );
			this.listenTo( radioChannel, 'blur:field', this.onBlurField );
		},

		onChangeModelValue: function( model ) {
			this.dateChange( model );
		},

		onBlurField: function( el, model ) {
			this.dateChange( model );
		},

		dateChange: function( model ) {
			var fieldID = model.get( 'id' );
			var value = model.get( 'value' );
			var format = model.get( 'date_format' );

			if( 'default' === format) {
				format = nfi18n.dateFormat;
			}

			if ( 0 < value.length ) {
				// use moment's isValid to check against the fields format setting
				if( moment( value, format ).isValid() ) {
					nfRadio.channel( 'fields' ).request( 'remove:error', fieldID, errorID );
				} else {
					var fieldModel = nfRadio.channel( 'fields' ).request( 'get:field', fieldID );
					var formModel  = nfRadio.channel( 'app'    ).request( 'get:form',  fieldModel.get( 'formID' ) );
					nfRadio.channel( 'fields' ).request( 'add:error', fieldID, errorID, formModel.get( 'settings' ).changeDateErrorMsg );
				}
			} else {
				nfRadio.channel( 'fields' ).request( 'remove:error', fieldID, errorID );
			}
		},

		/**
		 * When a user types inside of an dat field, track their keypresses
		 * and add the appropriate class.
		 * If the value validates as an date, add a class of nf-pass
		 * If the value does not validate as date, add a class of nf-fail
		 *
		 * @since  3.0
		 * @param  {object} el    Element that triggered the keyup event.
		 * @param  {object} model Model connected to the element that triggered the event
		 * @return {void}
		 */
		dateKeyup: function( el, model, keyCode ) {

			/*
			 * If we pressed the 'tab' key to get to this field, return false.
			 */
			if ( 9 == keyCode ) {
				return false;
			}
			/*
			 * Get the current value from our element.
			 */
			var value = jQuery( el ).val();

			/*
			 * Get our current ID
			 */
			var fieldID = model.get( 'id' );

			/*
			* Get our current date format
			 */
			var format = model.get( 'date_format' );

			if( 'default' === format) {
				format = nfi18n.dateFormat;
			}

			/*
			 * Check our value to see if it is a valid email.
			 */
			if ( 0 == value.length ) {
				nfRadio.channel( 'fields' ).request( 'remove:error', fieldID, errorID );
			}
			// use moment's isValid to check against the fields format setting
			else if ( ! moment( value, format ).isValid() && ! model.get( 'clean' ) ) {

				var fieldModel = nfRadio.channel( 'fields' ).request( 'get:field', fieldID );
				var formModel  = nfRadio.channel( 'app'    ).request( 'get:form',  fieldModel.get( 'formID' ) );
				nfRadio.channel( 'fields' ).request( 'add:error', fieldID, errorID, formModel.get( 'settings' ).changeDateErrorMsg );

				model.removeWrapperClass( 'nf-pass' );
			}
			// use moment's isValid to check against the fields format setting
			else if ( moment( value, format ).isValid() ) {
				nfRadio.channel( 'fields' ).request( 'remove:error', fieldID, errorID );
				/*
				 * Add nf-pass class to the wrapper.
				 */
				model.addWrapperClass( 'nf-pass' );
				model.set( 'clean', false );
			}
		}
	});

	return controller;
} );