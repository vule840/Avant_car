define( ['views/app/drawer/optionRepeaterOption', 'views/app/drawer/optionRepeaterEmpty', 'models/app/optionRepeaterCollection'], function( listOptionView, listEmptyView, listOptionCollection ) {
	var view = Marionette.CompositeView.extend( {
		template: '#tmpl-nf-edit-setting-option-repeater-wrap',
		childView: listOptionView,
		emptyView: listEmptyView,
		reorderOnSort: false,

		initialize: function( data ) {

			/*
			 * Our options are stored in our database as objects, not collections.
			 * Before we attempt to render them, we need to convert them to a collection if they aren't already one.
			 */ 
			var optionCollection = data.dataModel.get( this.model.get( 'name' ) );

			if ( false == optionCollection instanceof Backbone.Collection ) {
				optionCollection = new listOptionCollection( [], { settingModel: this.model } );
				optionCollection.add( data.dataModel.get( this.model.get( 'name' ) ) );
				data.dataModel.set( this.model.get( 'name' ), optionCollection, { silent: true } );
			}

			this.collection = optionCollection;
			this.dataModel = data.dataModel;
			this.childViewOptions = { parentView: this, settingModel: this.model, collection: this.collection, dataModel: data.dataModel, columns: this.model.get( 'columns' ) };

			var deps = this.model.get( 'deps' );
			if ( deps ) {
				for ( var name in deps ) {
				    if ( deps.hasOwnProperty( name ) ) {
				    	this.dataModel.on( 'change:' + name, this.render, this );
				    }
				}
			}
            this.listenTo( nfRadio.channel( 'option-repeater' ), 'added:option', this.maybeHideNew );
            this.listenTo( nfRadio.channel( 'option-repeater' ), 'removed:option', this.maybeHideNew );
		},

		onBeforeDestroy: function() {
			var deps = this.model.get( 'deps' );
			if ( deps ) {
				for (var name in deps) {
				    if ( deps.hasOwnProperty( name ) ) {
				    	this.dataModel.off( 'change:' + name, this.render );
				    }
				}
			}
		},

		onRender: function() {
			// this.$el = this.$el.children();
			// this.$el.unwrap();
			// this.setElement( this.$el );

			// this.$el = this.$el.children();
			// this.$el.unwrap();
			// this.setElement( this.$el );
		
			var that = this;
			jQuery( this.el ).find( '.nf-list-options-tbody' ).sortable( {
				handle: '.handle',
				helper: 'clone',
				placeholder: 'nf-list-options-sortable-placeholder',
				forcePlaceholderSize: true,
				opacity: 0.95,
				tolerance: 'pointer',

				start: function( e, ui ) {
					nfRadio.channel( 'option-repeater' ).request( 'start:optionSortable', ui );
				},

				stop: function( e, ui ) {
					nfRadio.channel( 'option-repeater' ).request( 'stop:optionSortable', ui );
				},

				update: function( e, ui ) {
					nfRadio.channel( 'option-repeater' ).request( 'update:optionSortable', ui, this, that );
				}
			} );

            that.setupTooltip();
            that.maybeHideNew( that.collection );

			/*
			 * Send out a radio message.
			 */
			nfRadio.channel( 'setting-' + this.model.get( 'name' ) ).trigger( 'render:setting', this.model, this.dataModel, this );
		
		},

		onAttach: function() {
            
			var importLink = jQuery( this.el ).find( '.nf-open-import-tooltip' );
			var jBox = jQuery( importLink ).jBox( 'Tooltip', {
                title: '<h3>Please enter your options below:</h3>',
                content: jQuery( this.el ).find( '.nf-import-options' ),
                trigger: 'click',
                closeOnClick: 'body',
                closeButton: 'box',
                offset: { x: 20, y: 0 },
                addClass: 'import-options',

                onOpen: function() {
                	var that = this;
                	setTimeout( function() { jQuery( that.content ).find( 'textarea' ).focus(); }, 200 );
                }
            } );

			jQuery( this.el ).find( '.nf-import' ).on( 'click', { view: this, jBox: jBox }, this.clickImport );

			/*
			 * Send out a radio message.
			 */
			nfRadio.channel( 'setting-' + this.model.get( 'name' ) ).trigger( 'attach:setting', this.model, this.dataModel, this );
			nfRadio.channel( 'setting-type-' + this.model.get( 'type' ) ).trigger( 'attach:setting', this.model, this.dataModel, this );
		},
        
        /**
         * Function to append jBox modals to each tooltip element in the option repeater.
         */
        setupTooltip: function() {
            // For each .nf-help in the option repeater...
            jQuery( this.el ).find( '.nf-list-options' ).find( '.nf-help' ).each(function() {
                // Get the content.
                var content = jQuery(this).next('.nf-help-text');
                // Declare the modal.
                jQuery( this ).jBox( 'Tooltip', {
                    content: content,
                    maxWidth: 200,
                    theme: 'TooltipBorder',
                    trigger: 'click',
                    closeOnClick: true
                })
            });
        },

		templateHelpers: function () {
			var that = this;

	    	return {
	    		renderHeaders: function() {
                    // If this is a Field...
                    // AND If the type includes 'list'...
                    if ( 'Field' == that.dataModel.get( 'objectType' ) && -1 !== that.dataModel.get( 'type' ).indexOf( 'list' ) ) {
                        // Declare help text.
                        var helpText, helpTextContainer, helpIcon, helpIconLink, helpTextWrapper;

                        helpText = document.createTextNode( nfi18n.valueChars );
                        helpTextContainer = document.createElement( 'div' );
                        helpTextContainer.classList.add( 'nf-help-text' );
                        helpTextContainer.appendChild( helpText );

                        helpIcon = document.createElement( 'span' );
                        helpIcon.classList.add( 'dashicons', 'dashicons-admin-comments' );
                        helpIconLink = document.createElement( 'a' );
                        helpIconLink.classList.add( 'nf-help' );
                        helpIconLink.setAttribute( 'href', '#' );
                        helpIconLink.setAttribute( 'tabindex', '-1' );
                        helpIconLink.appendChild( helpIcon );

                        helpTextWrapper = document.createElement( 'span' );
                        helpTextWrapper.appendChild( helpIconLink );
                        helpTextWrapper.appendChild( helpTextContainer );

                        // Append the help text to the 'value' header.
	                    if ( -1 == that.model.get('columns').value.header.indexOf( helpTextWrapper.innerHTML ) ) {
		                    that.model.get('columns').value.header += helpTextWrapper.innerHTML;
	                    }
                    }
	    			var columns, beforeColumns, afterColumns;

	    			beforeColumns = document.createElement( 'div' );

	    			columns = document.createElement( 'span' );
	    			columns.appendChild( beforeColumns );

	    			_.each( this.columns, function( col ) {
	    				var headerText, headerContainer;

	    				// Use a fragment to support HTML in the col.header property, ie Dashicons.
                        headerText = document.createRange().createContextualFragment( col.header );
	    				headerContainer = document.createElement( 'div' );
	    				headerContainer.appendChild( headerText );

	    				columns.appendChild( headerContainer );
	    			} );

                    afterColumns = document.createElement( 'div' );
                    columns.appendChild( afterColumns );

					return columns.innerHTML;
				},

	    		renderSetting: function() {
	    			var setting = nfRadio.channel( 'app' ).request( 'get:template',  '#tmpl-nf-edit-setting-' + this.type );
					return setting( this );
				},

				renderClasses: function() {
					var classes = '';
					if ( 'undefined' != typeof this.width ) {
						classes += this.width;
					} else {
						classes += ' one-half';
					}

					if ( this.error ) {
						classes += ' nf-error';
					}

					return classes;
				},

				renderVisible: function() {
					if ( this.deps ) {
						for (var name in this.deps) {
						    if ( this.deps.hasOwnProperty( name ) ) {
						        if ( that.dataModel.get( name ) !== this.deps[ name ] ) {
						        	return 'style="display:none;"';
						        }
						    }
						}
					}
	    			return '';
	    		},

				renderError: function() {
					if ( this.error ) {
						return this.error;
					}
					return '';
				},

				renderFieldsetClasses: function() {
					return that.model.get( 'name' );
				},

				currencySymbol: function() {
					return nfRadio.channel( 'settings' ).request( 'get:setting', 'currency' ) || nfi18n.currency_symbol;
				}
			};
		},

		attachHtml: function( collectionView, childView ) {
			jQuery( collectionView.el ).find( '.nf-list-options-tbody' ).append( childView.el );
			nfRadio.channel( 'mergeTags' ).request( 'init', this );
		},

		events: {
			'click .nf-add-new': 'clickAddOption',
			'click .extra': 'clickExtra'
		},
        
        maybeHideNew: function( collection ) {
			if( 'undefined' == typeof collection.settingModel ) return false;
            var limit = collection.settingModel.get( 'max_options' );
            if( 0 !== limit && collection.models.length >= ( limit ) ) {
                jQuery(this.el).find('.nf-add-new').addClass('disabled');
            } else {
                jQuery(this.el).find('.nf-add-new').removeClass('disabled');
            }
        },

		clickAddOption: function( e ) {
			nfRadio.channel( 'option-repeater' ).trigger( 'click:addOption', this.collection, this.dataModel );
			jQuery( this.children.findByIndex(this.children.length - 1).el ).find( '[data-id="label"]' ).focus();
		},

		clickExtra: function( e ) {
			nfRadio.channel( 'option-repeater' ).trigger( 'click:extra', e, this.collection, this.dataModel );
			nfRadio.channel( 'option-repeater-' + this.model.get( 'name' ) ).trigger( 'click:extra', e, this.model, this.collection, this.dataModel );
		},

		clickImport: function( e ) {
			var textarea = jQuery( e.data.jBox.content ).find( 'textarea' );
			var value = textarea.val().trimLeft().trimRight();
			/*
			 * Return early if we have no strings.
			 */
			if ( 0 == value.length ) {
				e.data.jBox.close();
				return false;
			}			
			/*
			 * Split our value based on new lines.
			 */

			var lines = value.split(/\n/);
			if ( _.isArray( lines ) ) {
				/*
				 * Loop over 
				 */
				_.each( lines, function( line ) {
					var row = line.split( ',' );
					var label = row[0];
					var value = row[1] || jQuery.slugify( label, { separator: '-' } );
					var calc = row[2] || '';

					label = label.trimLeft().trimRight();
					value = value.trimLeft().trimRight();
					calc = calc.trimLeft().trimRight();
					/*
					 * Add our row to the collection
					 */
					var model = e.data.view.collection.add( { label: row[0], value: value, calc: calc } );
					// Add our field addition to our change log.
					var label = {
						object: 'field',
						label: row[0],
						change: 'Option Added',
						dashicon: 'plus-alt'
					};

					nfRadio.channel( 'changes' ).request( 'register:change', 'addListOption', model, null, label );
					nfRadio.channel( 'option-repeater-' + e.data.view.model.get( 'name' ) ).trigger( 'add:option', model );
					nfRadio.channel( 'option-repeater' ).trigger( 'add:option', model );
					nfRadio.channel( 'app' ).trigger( 'update:setting', model );
				}, this );
				/*
				 * Set our state to unclean so that the user can publish.
				 */
			} else {
				/*
				 * TODO: Error Handling Here
				 */
			}
			textarea.val( '' );
			e.data.jBox.close();
		},
	} );

	return view;
} );
