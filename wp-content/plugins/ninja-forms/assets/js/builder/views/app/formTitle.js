/**
 * Renders our form title.
 *
 * @package Ninja Forms builder
 * @subpackage App
 * @copyright (c) 2015 WP Ninjas
 * @since 3.0
 */
define( [], function() {
	var view = Marionette.ItemView.extend({
		tagName: 'div',
		template: '#tmpl-nf-header-form-title',

		initialize: function() {
			// When we change the model (to disable it, for example), re-render.
			this.model.on( 'change:title', this.render, this );
		},

		/**
		 * These functions are available to templates, and help us to remove logic from template files.
		 * 
		 * @since  3.0
		 * @return Object
		 */
		templateHelpers: function() {
			var that = this;
	    	return {
	    		renderTitle: function(){
	    			var formData = nfRadio.channel( 'app' ).request( 'get:formModel' );
	    			return _.escape( formData.get( 'settings' ).get( 'title' ) );
				},
			}
		}

	});

	return view;
} );