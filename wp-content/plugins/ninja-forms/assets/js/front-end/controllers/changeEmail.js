define([], function() {
	var radioChannel = nfRadio.channel( 'email' );
	// var emailReg = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var emailReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var errorID = 'invalid-email';

	var controller = Marionette.Object.extend( {

		initialize: function() {
			this.listenTo( radioChannel, 'change:modelValue', this.onChangeModelValue );
			this.listenTo( radioChannel, 'keyup:field', this.emailKeyup );
			this.listenTo( radioChannel, 'blur:field', this.onBlurField );
		},

		onChangeModelValue: function( model ) {
			var value = model.get( 'value' );
			var fieldID = model.get( 'id' );
			this.emailChange( value, fieldID );
		},

		onBlurField: function( el, model ) {
			var value = jQuery( el ).val();
			var fieldID = model.get( 'id' );
			this.emailChange( value, fieldID );
		},

		emailChange: function( value, fieldID ) {
			if ( 0 < value.length ) {
				if( emailReg.test( value ) ) {
					nfRadio.channel( 'fields' ).request( 'remove:error', fieldID, errorID );
				} else {
					var fieldModel = nfRadio.channel( 'fields' ).request( 'get:field', fieldID );
					var formModel  = nfRadio.channel( 'app'    ).request( 'get:form',  fieldModel.get( 'formID' ) );
					nfRadio.channel( 'fields' ).request( 'add:error', fieldID, errorID, formModel.get( 'settings' ).changeEmailErrorMsg );
				}				
			} else {
				nfRadio.channel( 'fields' ).request( 'remove:error', fieldID, errorID );
			}
		},

		/**
		 * When a user types inside of an email field, track their keypresses and add the appropriate class.
		 * If the value validates as an email, add a class of nf-pass
		 * If the value does not validate as email, add a class of nf-fail
		 * 
		 * @since  3.0
		 * @param  {object} el    Element that triggered the keyup event.
		 * @param  {object} model Model connected to the element that triggered the event
		 * @return {void}
		 */
		emailKeyup: function( el, model, keyCode ) {
			
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
			 * Check our value to see if it is a valid email.
			 */
			if ( 0 == value.length ) {
				nfRadio.channel( 'fields' ).request( 'remove:error', fieldID, errorID );
			} else if ( ! emailReg.test( value ) && ! model.get( 'clean' ) ) {

				var fieldModel = nfRadio.channel( 'fields' ).request( 'get:field', fieldID );
				var formModel  = nfRadio.channel( 'app'    ).request( 'get:form',  fieldModel.get( 'formID' ) );
				nfRadio.channel( 'fields' ).request( 'add:error', fieldID, errorID, formModel.get( 'settings' ).changeEmailErrorMsg );

				model.removeWrapperClass( 'nf-pass' );
			} else if ( emailReg.test( value ) ) {
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