/**
 * Loads all of our controllers using Require JS.
 * 
 * @package Ninja Forms builder
 * @subpackage Fields
 * @copyright (c) 2015 WP Ninjas
 * @since 3.0
 */
define(
	[
		/*
		 * Application controllers
		 */
		'controllers/app/remote',
		'controllers/app/drawer',
		'controllers/app/drawerConfig',
		'controllers/app/domainConfig',
		'controllers/app/data',		
		'controllers/app/drawerToggleSettingGroup',
		'controllers/app/updateDB',
		'controllers/app/formData',
		'controllers/app/previewLink',
		'controllers/app/menuButtons',
		'controllers/app/trackChanges',
		'controllers/app/undoChanges',
		'controllers/app/publishResponse',
		'controllers/app/changeDomain',
		'controllers/app/pushstate',
		'controllers/app/hotkeys',
		'controllers/app/cleanState',
		'controllers/app/coreUndo',
		'controllers/app/cloneModelDeep',
		'controllers/app/getSettingChildView',
		'controllers/app/changeSettingDefault',
		'controllers/app/fieldset',
		'controllers/app/toggleSetting',
		'controllers/app/buttonToggleSetting',
		'controllers/app/numberSetting',
		'controllers/app/radioSetting',
		'controllers/app/itemControls',
		'controllers/app/mergeTags',
		'controllers/app/mergeTagBox',
		'controllers/app/itemSettingFill',
		'controllers/app/confirmPublish',
		'controllers/app/rte',
		'controllers/app/settingFieldSelect',
		'controllers/app/settingFieldList',
		'controllers/app/settingHTML',
		'controllers/app/settingColor',
		'controllers/app/changeMenu',
		'controllers/app/mobile',
		'controllers/app/notices',
		'controllers/app/unloadCheck',
		'controllers/app/formContentFilters',
		'controllers/app/formContentGutterFilters',
		'controllers/app/cloneCollectionDeep',
		'controllers/app/trackKeyDown',
		'controllers/app/perfectScroll',
		'controllers/app/getNewSettingGroupCollection',
		'controllers/app/settingMedia',
		/*
		 * Fields domain controllers
		 */
		'controllers/fields/types',
		'controllers/fields/fieldTypeDrag',
		'controllers/fields/stagingDrag',
		'controllers/fields/staging',
		'controllers/fields/stagingSortable',
		'controllers/fields/filterTypes',
		'controllers/fields/sortable',
		'controllers/fields/data',
		'controllers/app/optionRepeater',
		'controllers/fields/editActive',
		'controllers/fields/fieldSettings',
		'controllers/fields/fieldCreditCard',
		'controllers/fields/fieldList',
		'controllers/fields/fieldPassword',
		'controllers/fields/fieldQuantity',
		'controllers/fields/fieldShipping',
		'controllers/fields/key',
		'controllers/fields/notices',
		'controllers/fields/mobile',
		'controllers/fields/savedFields',
		'controllers/fields/fieldDatepicker',
		'controllers/fields/fieldDisplayCalc',

		/*
		 * TODO: Actions domain controllers
		 */
		'controllers/actions/types',
		'controllers/actions/data',
		'controllers/actions/actionSettings',
		'controllers/actions/editActive',
		'controllers/actions/emailFromSetting',
		'controllers/actions/addActionTypes',
		'controllers/actions/typeDrag',
		'controllers/actions/droppable',
		'controllers/actions/filterTypes',
		'controllers/actions/newsletterList',
		'controllers/actions/deleteFieldListener',
		'controllers/actions/collectPaymentFields',
		'controllers/actions/collectPaymentCalculations',
		'controllers/actions/collectPaymentFixed',
		'controllers/actions/collectPayment',
		'controllers/actions/save',

		/*
		 * TODO: Settings domain controllers
		 */
		'controllers/advanced/types',
		'controllers/advanced/data',
		'controllers/advanced/formSettings',
		'controllers/advanced/editActive',
		'controllers/advanced/clickEdit',
		'controllers/advanced/calculations'
	],
	function(
		/*
		 * Application controllers
		 */
		Remote,
		Drawer,
		DrawerConfig,
		DomainConfig,
		AppData,
		DrawerToggleSettingGroup,
		UpdateDB,
		FormData,
		PreviewLink,
		AppMenuButtons,
		AppTrackChanges,
		AppUndoChanges,
		AppPublishResponse,
		AppChangeDomain,
		Pushstate,
		Hotkeys,
		CleanState,
		CoreUndo,
		CloneModelDeep,
		DrawerSettingChildView,
		ChangeSettingDefault,
		Fieldset,
		ToggleSetting,
		ButtonToggleSetting,
		NumberSetting,
		RadioSetting,
		ItemControls,
		MergeTags,
		MergeTagsBox,
		ItemSettingFill,
		ConfirmPublish,
		RTE,
		SettingFieldSelect,
		SettingFieldList,
		SettingHTML,
		SettingColor,
		ChangeMenu,
		AppMobile,
		AppNotices,
		AppUnloadCheck,
		FormContentFilters,
		FormContentGutterFilters,
		CloneCollectionDeep,
		TrackKeyDown,
		PerfectScroll,
		GetNewSettingGroupCollection,
		SettingMedia,
		/*
		 * Fields domain controllers
		 */
		FieldTypes,
		FieldTypeDrag,
		FieldStagingDrag,
		StagedFieldsData,
		StagedFieldsSortable,
		DrawerFilterFieldTypes,
		MainContentFieldsSortable,
		FieldData,
		OptionRepeater,
		FieldsEditActive,
		FieldSettings,
		FieldCreditCard,
		FieldList,
		FieldPassword,
		FieldQuantity,
		FieldShipping,
		FieldKey,
		Notices,
		FieldsMobile,
		SavedFields,
		FieldDatepicker,
		FieldDisplayCalc,
		/*
		 * TODO: Actions domain controllers
		 */
		ActionTypes,
		ActionData,
		ActionSettings,
		ActionEditActive,
		ActionEmailFromSetting,
		ActionAddTypes,
		ActionTypeDrag,
		ActionDroppable,
		ActionFilterTypes,
		ActionNewsletterList,
		ActionDeleteFieldListener,
		ActionCollectPaymentFields,
		ActionCollectPaymentCalculations,
		ActionCollectPaymentFixed,
		ActionCollectPayment,
		ActionSave,

		/*
		 * TODO: Settings domain controllers
		 */
		SettingTypes,
		SettingData,
		FormSettings,
		SettingsEditActive,
		SettingsClickEdit,
		AdvancedCalculations
		
	) {
		var controller = Marionette.Object.extend( {
			initialize: function() {
				/*
				 * Application controllers
				 */
				new FormContentFilters();
				new FormContentGutterFilters();
				new Hotkeys();
				new Remote();
				new Drawer();
				new DrawerConfig();
				new DomainConfig();
				new DrawerToggleSettingGroup();
				new PreviewLink();
				new AppMenuButtons();
				new AppTrackChanges();
				new AppUndoChanges();
				new AppPublishResponse();
				new AppChangeDomain();
				new CleanState();
				new CoreUndo();
				new CloneModelDeep();
				new ItemControls();
				new ConfirmPublish();
				new RTE();
				new SettingFieldSelect();
				new SettingFieldList();
				new SettingHTML();
				new SettingColor();
				new SettingMedia();
				new ChangeMenu();
				new AppMobile();
				new AppNotices();
				new AppUnloadCheck();
				new UpdateDB();
				new CloneCollectionDeep();
				new TrackKeyDown();
				new PerfectScroll();
				new GetNewSettingGroupCollection();
				// new Pushstate();
				/*
				 * Fields domain controllers
				 * 
				 * Field-specific controllers should be loaded before our field type controller.
				 * This ensures that any 'init' hooks are properly registered.
				 */
				new Fieldset();
				new OptionRepeater();

				new FieldTypes();
				new FieldTypeDrag();
				new FieldStagingDrag();
				new StagedFieldsData();
				new StagedFieldsSortable();
				new DrawerFilterFieldTypes();
				new MainContentFieldsSortable();
				new ChangeSettingDefault();
				new ToggleSetting();
				new ButtonToggleSetting();
				new NumberSetting();
				new RadioSetting();
				new DrawerSettingChildView();
				new FieldsEditActive();
				new FieldSettings();
				new FieldCreditCard();
				new FieldList();
				new FieldPassword;
				new FieldQuantity();
				new FieldShipping();
				new FieldKey();
				new Notices();
				new FieldsMobile();
				new SavedFields();
				new FieldDatepicker();
				new FieldDisplayCalc();
				/*
				 * TODO: Actions domain controllers
				 */
				new ActionNewsletterList();
				new ActionDeleteFieldListener();
				new ActionCollectPaymentCalculations();
				new ActionCollectPayment();
				new ActionSave();
				new ActionTypes();
				new ActionData();
				new ActionSettings();
				new ActionEditActive();
				new ActionEmailFromSetting();
				new ActionAddTypes();
				new ActionTypeDrag();
				new ActionDroppable();
				new ActionFilterTypes();
				new ActionCollectPaymentFields();
				new ActionCollectPaymentFixed();

				/*
				 * TODO: Settings domain controllers
				 */
				new SettingTypes();
				new FormSettings();
				new AdvancedCalculations();
				new SettingData();
				new SettingsEditActive();
				new SettingsClickEdit();
				
				/*
				 * Data controllers need to be set after every other controller has been setup, even if they aren't domain-specific.
				 * AppData() was after FormData();
				 */
				new AppData();
				new FieldData();
				new FormData();
				new MergeTags();
				new MergeTagsBox();
				new ItemSettingFill();
			}
		});

		return controller;
} );
