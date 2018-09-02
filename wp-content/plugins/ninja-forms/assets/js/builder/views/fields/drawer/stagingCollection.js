define( ['views/fields/drawer/stagedField', 'views/fields/drawer/stagingEmpty'], function( stagedFieldView, stagedFieldsEmptyView ) {
	var view = Marionette.CollectionView.extend( {
		tagName: 'div',
		childView: stagedFieldView,
		emptyView: stagedFieldsEmptyView,

		activeClass: 'nf-staged-fields-active', // CSS Class for showing the reservoir.

		initialize: function() {
			nfRadio.channel( 'app' ).reply( 'get:stagedFieldsEl', this.getStagedFieldsEl, this );
		},

		onShow: function() {

			this.$el = jQuery( this.el ).parent();
			jQuery( this.$el ).find( 'span:first' ).unwrap();
			this.setElement( this.$el );

			var that = this;

			jQuery( this.el ).sortable( {
				placeholder: 'nf-staged-fields-sortable-placeholder',
				helper: 'clone',
				tolerance: 'pointer',
				over: function( e, ui ) {
					nfRadio.channel( 'drawer-addField' ).trigger( 'over:stagedFields', e, ui );
				},

				out: function( e, ui ) {
					nfRadio.channel( 'drawer-addField' ).trigger( 'out:stagedFields', ui );
				},

				receive: function( e, ui ) {
					nfRadio.channel( 'drawer-addField' ).trigger( 'receive:stagedFields', ui );
				},

				update: function( e, ui ) {
					nfRadio.channel( 'fields' ).request( 'sort:staging' );
				},

				start: function( e, ui ) {
					nfRadio.channel( 'drawer-addField' ).trigger( 'start:stagedFields', ui );

				},

				stop: function( e, ui ) {
					nfRadio.channel( 'drawer-addField' ).trigger( 'stop:stagedFields', ui );
				}
			} );

			jQuery( this.el ).parent().draggable( {
				opacity: 0.9,
				connectToSortable: '.nf-field-type-droppable',
				appendTo: '#nf-main',
				refreshPositions: true,
				grid: [ 3, 3 ],
				tolerance: 'pointer',

				helper: function( e ) {
					var width = jQuery( e.target ).parent().width();
					var height = jQuery( e.target ).parent().height();
					var element = jQuery( e.target ).parent().clone();
					var left = width / 4;
					var top = height / 2;
					jQuery( this ).draggable( 'option', 'cursorAt', { top: top, left: left } );
					jQuery( element ).zIndex( 1000 );
					return element;
				},

				start: function( e, ui ) {
					nfRadio.channel( 'drawer-addField' ).trigger( 'startDrag:fieldStaging', this, ui );
				},
				stop: function( e, ui ) {
					nfRadio.channel( 'drawer-addField' ).trigger( 'stopDrag:fieldStaging', this, ui );
				}
			} );
		},

		getStagedFieldsEl: function() {
			return jQuery( this.el );
		},

		onAddChild: function() {
			jQuery( this.el ).addClass( this.activeClass );
		},

		onRemoveChild: function() {
			if( this.hasStagedFields() ) return;
			jQuery( this.el ).removeClass( this.activeClass );
		},

		hasStagedFields: function() {
			return  0 != this.collection.length;
		}

	} );

	return view;
} );