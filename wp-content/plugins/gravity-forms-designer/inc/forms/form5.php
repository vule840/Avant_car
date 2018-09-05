<?php
$form5id = get_theme_mod( 'frm5_form_id', 'default_value' ); 
$checkmark = plugins_url( '/images/check-mark.png', __FILE__ );

Kirki::add_config( 'gravity_designer' );

Kirki::add_panel( '5588', array(
    'priority'    => 5,
    'title'       => __( 'Gravity Designer - Form 5', 'twentyfifteen' ),
    'description' => __( 'Easily Style your Gravity Forms.', 'twentyfifteen' ),
) );

//Sections
Kirki::add_section( 'form_settings_5', array(
    'title'          => __( 'Form ID' ),
    'panel'          => '5588', // Not typically needed.
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'type'           => 'expanded',
) );


Kirki::add_section( 'form_typography_5', array(
    'title'          => __( 'Typography' ),
    'description'    => __( 'Gravity Forms Typography.' ),
    'panel'          => '5588', // Not typically needed.
    'priority'       => 2,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'form_wrapper_5', array(
    'title'          => __( 'Form Wrapper' ),
    'description'    => __( 'Gravity Forms Wrapper.' ),
    'panel'          => '5588', // Not typically needed.
    'priority'       => 3,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'form_fields_5', array(
    'title'          => __( 'Form Fields' ),
    'description'    => __( 'Gravity Forms Fields.' ),
    'panel'          => '5588', // Not typically needed.
    'priority'       => 4,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'radio_and_checkboxes_5', array(
    'title'          => __( 'Radio & Checkboxes' ),
    'description'    => __( 'Gravity Forms Radio & Checkboxes.' ),
    'panel'          => '5588', // Not typically needed.
    'priority'       => 5,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'submit_button_5', array(
    'title'          => __( 'Form Buttons' ),
    'description'    => __( 'Gravity Forms Buttons.' ),
    'panel'          => '5588', // Not typically needed.
    'priority'       => 6,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


Kirki::add_field( 'gravity_designer', array(
	'settings' => 'frm5_form_id',
	'label'    => __( 'FORM ID', 'twentyfifteen' ),
	'section'  => 'form_settings_5',
	'type'     => 'text',
	'priority' => 1,
	'default'  => '1',
	'transport' => 'auto'	
) );


Kirki::add_field( 'gravity_designer', array(
	'type'        => 'typography',
	'settings'    => 'title_typography_5',
	'label'       => esc_attr__( 'Form Title', 'kirki' ),
	'section'     => 'form_typography_5',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '1',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .gform_heading .gform_title",
			'suffix'   => ' !important',
		),
	),
	'transport' => 'auto'	
) );


Kirki::add_field( 'gravity_designer', array(
	'type'        => 'typography',
	'settings'    => 'description_typography_5',
	'label'       => esc_attr__( 'Form Description', 'kirki' ),
	'section'     => 'form_typography_5',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '1',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .gform_heading .gform_description ",
			'suffix'   => ' !important',
		),
	),
	'transport' => 'auto'	
) );


Kirki::add_field( 'gravity_designer', array(
	'type'        => 'typography',
	'settings'    => 'label_typography_5',
	'label'       => esc_attr__( 'Field Labels', 'kirki' ),
	'section'     => 'form_typography_5',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '1',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_label ",
			'suffix'   => ' !important',
		),
		
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .gf_progressbar_title",
			'suffix'   => ' !important',
		),
		
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .field_sublabel_below ",
			'suffix'   => ' !important',
		),
						
		
	),
	'transport' => 'auto'	
) );

Kirki::add_field( 'gravity_designer', array(
	'type'        => 'typography',
	'settings'    => 'field_typography_5',
	'label'       => esc_attr__( 'Form Fields', 'kirki' ),
	'section'     => 'form_typography_5',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '1',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield input[type=text] ",
			'suffix'   => ' !important',
		),
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield select ",
			'suffix'   => ' !important',
		),
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield textarea ",
			'suffix'   => ' !important',
		),
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_radio ",
			'suffix'   => ' !important',
		),
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_radio li ",
			'suffix'   => ' !important',
		),
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .gform_fields .gfield .gfield_radio li input[type=radio] ",
			'suffix'   => ' !important',
		),
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_checkbox ",
			'suffix'   => ' !important',
		),
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_checkbox li ",
			'suffix'   => ' !important',
		),
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .gform_fields .gfield .gfield_checkbox li input[type=checkbox] ",
			'suffix'   => ' !important',
		),
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .selectize-input ",
			'suffix'   => ' !important',
		),
		
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .selectize-dropdown ",
			'suffix'   => ' !important',
		),
		
						
	),
	'transport' => 'auto'	
) );


Kirki::add_field( 'gravity_designer', array(
	'type'        => 'typography',
	'settings'    => 'field_description_5',
	'label'       => esc_attr__( 'Fields Description', 'kirki' ),
	'section'     => 'form_typography_5',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '1',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_description ",
			'suffix'   => ' !important',
		),
				
						
	),
	'transport' => 'auto'	
) );


Kirki::add_field( 'gravity_designer', array(
	'type'        => 'typography',
	'settings'    => 'form_buttons_5',
	'label'       => esc_attr__( 'Form Buttons', 'kirki' ),
	'section'     => 'form_typography_5',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '1',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element'  => 'body #gform_wrapper_' . $form5id . " .gform_footer input[type=submit] ",
			'suffix'   => ' !important',
		),
		array(
			'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_next_button ",
			'suffix'   => ' !important',
		),
		array(
			'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_previous_button ",
			'suffix'   => ' !important',
		),		
		array(
			'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_button  ",
			'suffix'   => ' !important',
		),
				
						
	),
	'transport' => 'auto'	
) );


Kirki::add_field( 'gravity_designer', array(
	'type'        => 'typography',
	'settings'    => 'form_section_title_5',
	'label'       => esc_attr__( 'Section Title', 'kirki' ),
	'section'     => 'form_typography_5',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '1',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gsection .gsection_title ",
			'suffix'   => ' !important',
		),
								
	),
	'transport' => 'auto'	
) );

Kirki::add_field( 'gravity_designer', array(
	'type'        => 'typography',
	'settings'    => 'form_section_description_5',
	'label'       => esc_attr__( 'Section Description', 'kirki' ),
	'section'     => 'form_typography_5',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '1',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gsection .gsection_description ",
			'suffix'   => ' !important',
		),
								
	),
	'transport' => 'auto'	
) );



Kirki::add_field( 'gravity_designer', array(
	'type'     => 'slider',
	'settings' => 'form_wrapper_width_5',
	'label'    => __( 'Form Width', 'twentyfifteen' ),
	'section'  => 'form_wrapper_5',
	'default'  => 100,
	'priority' => 1,
	'choices'  => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output' => array(
		array(
			'element'  => 'body #gform_wrapper_' . $form5id,
			'property' => 'width',
			'units'    => '%',
		),
	),
	'transport' => 'auto'
) );

Kirki::add_field( 'gravity_designer', array(
	'type'     => 'slider',
	'settings' => 'form_wrapper_padding_5',
	'label'    => __( 'Padding', 'twentyfifteen' ),
	'section'  => 'form_wrapper_5',
	'default'  => 15,
	'priority' => 2,
	'choices'  => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output' => array(
		array(
			'element'  => 'body #gform_wrapper_' . $form5id,
			'property' => 'padding',
			'units'    => 'px',
		),
	),
	'transport' => 'auto'
) );


Kirki::add_field( 'gravity_designer', array(
	'type'     => 'slider',
	'settings' => 'form_wrapper_radius_5',
	'label'    => __( 'Border Radius', 'twentyfifteen' ),
	'section'  => 'form_wrapper_5',
	'default'  => 1,
	'priority' => 6,
	'choices'  => array(
		'min'  => 0,
		'max'  => 50,
		'step' => 1,
	),
	'output' => array(
		array(
			'element'  => 'body #gform_wrapper_' . $form5id,
			'property' => 'border-radius',
			'units'    => 'px',
		),
	),
	'transport' => 'auto'
) );



Kirki::add_field( 'gravity_designer', array(
	'type'     => 'color',
	'settings' => 'form_wrapper_bg_color_5',
	'label'    => __( 'Background Color', 'twentyfifteen' ),
	'section'  => 'form_wrapper_5',
	'default'  => 1,
	'priority' => 3,
	'alpha'       => true,
	'output' => array(
		array(
			'element'  => 'body #gform_wrapper_' . $form5id,
			'property' => 'background-color',
			'units'    => '',
		),
	),
	'transport' => 'auto'
) );

Kirki::add_field( 'gravity_designer', array(
	'type'     => 'image',
	'settings' => 'form_wrapper_bg_img_5',
	'label'    => __( 'Background Image', 'twentyfifteen' ),
	'section'  => 'form_wrapper_5',
	'default'  => 1,
	'priority' => 4,
	'alpha'       => true,
	'output' => array(
		array(
			'element'  => 'body #gform_wrapper_' . $form5id,
			'property' => 'background-image',
			'units'    => '',
		),
	),
	'transport' => 'auto'
) );

Kirki::add_field( 'gravity_designer', array(
	'type'     => 'select',
	'settings' => 'form_wrapper_bg_pos_5',
	'label'    => __( 'Background Position', 'twentyfifteen' ),
	'section'  => 'form_wrapper_5',
	'priority' => 5,
	'choices'     => array(
			'left top' => esc_attr__( 'Left Top', 'twentyfifteen' ),
			'left center' => esc_attr__( 'Left Center', 'twentyfifteen' ),
			'left bottom' => esc_attr__( 'Left Bottom', 'twentyfifteen' ),
			'right top' => esc_attr__( 'Right Top', 'twentyfifteen' ),	
			'right center' => esc_attr__( 'Right Center', 'twentyfifteen' ),	
			'right bottom' => esc_attr__( 'Right Bottom', 'twentyfifteen' ),	
			'center top' => esc_attr__( 'Center Top', 'twentyfifteen' ),	
			'center center' => esc_attr__( 'Center Center', 'twentyfifteen' ),	
			'center bottom' => esc_attr__( 'Center Bottom', 'twentyfifteen' ),	
			),
	'output' => array(
		array(
			'element'  => 'body #gform_wrapper_' . $form5id,
			'property' => 'background-position',
			'units'    => '',
		),
	),
	'transport' => 'auto'
) );

Kirki::add_field( 'gravity_designer', array(
	'type'     => 'select',
	'settings' => 'form_wrapper_bg_repeat_5',
	'label'    => __( 'Background Repeat', 'twentyfifteen' ),
	'section'  => 'form_wrapper_5',
	'priority' => 5,
	'choices'     => array(
			'repeat' => esc_attr__( 'Repeat', 'twentyfifteen' ),
			'repeat-x' => esc_attr__( 'Repeat-X', 'twentyfifteen' ),
			'repeat-y' => esc_attr__( 'Repeat-Y', 'twentyfifteen' ),
			'no-repeat' => esc_attr__( 'No Repeat', 'twentyfifteen' ),	
			'initial' => esc_attr__( 'Initial', 'twentyfifteen' ),	
			'inherit' => esc_attr__( 'Inherit', 'twentyfifteen' ),	
			),
	'output' => array(
		array(
			'element'  => 'body #gform_wrapper_' . $form5id,
			'property' => 'background-repeat',
			'units'    => '',
		),
	),
	'transport' => 'auto'
) );

Kirki::add_field( 'gravity_designer', array(
	'type'     => 'slider',
	'settings' => 'form_wrapper_brsize_5',
	'label'    => __( 'Border Size', 'twentyfifteen' ),
	'section'  => 'form_wrapper_5',
	'default'  => 1,
	'priority' => 7,
	'choices'  => array(
		'min'  => 0,
		'max'  => 50,
		'step' => 1,
	),
	'output' => array(
		array(
			'element'  => 'body #gform_wrapper_' . $form5id,
			'property' => 'border-width',
			'units'    => 'px',
		),
	),
	'transport' => 'auto'
) );

Kirki::add_field( 'gravity_designer', array(
	'type'     => 'color',
	'settings' => 'form_wrapper_brcolor_5',
	'label'    => __( 'Border Color', 'twentyfifteen' ),
	'section'  => 'form_wrapper_5',
	'default'  => 1,
	'priority' => 8,
	'alpha'       => true,
	'choices'  => array(
		'min'  => 0,
		'max'  => 20,
		'step' => 1,
	),
	'output' => array(
		array(
			'element'  => 'body #gform_wrapper_' . $form5id,
			'property' => 'border-color',
			'units'    => '',
		),
	),
	'transport' => 'auto'
) );


Kirki::add_field( 'gravity_designer', array(
	'type'     => 'select',
	'settings' => 'form_wrapper_brstyle_5',
	'label'    => __( 'Border Style', 'twentyfifteen' ),
	'section'  => 'form_wrapper_5',
	'priority' => 9,
	'choices'     => array(
			'none' => esc_attr__( 'None', 'twentyfifteen' ),
			'solid' => esc_attr__( 'Solid', 'twentyfifteen' ),
			'hidden' => esc_attr__( 'Hidden', 'twentyfifteen' ),
			'dotted' => esc_attr__( 'Dotted', 'twentyfifteen' ),	
			'dashed' => esc_attr__( 'Dashed', 'twentyfifteen' ),	
			'double' => esc_attr__( 'Double', 'twentyfifteen' ),	
			'groove' => esc_attr__( 'Groove', 'twentyfifteen' ),	
			'ridge' => esc_attr__( 'Ridge', 'twentyfifteen' ),	
			'inset' => esc_attr__( 'Inset', 'twentyfifteen' ),	
			'outset' => esc_attr__( 'Outset', 'twentyfifteen' ),	
			'initial' => esc_attr__( 'Initial', 'twentyfifteen' ),	
			'inherit' => esc_attr__( 'Inherit', 'twentyfifteen' ),	
			
			
			),
	'output' => array(
		array(
			'element'  => 'body #gform_wrapper_' . $form5id,
			'property' => 'border-style',
			'units'    => '',
		),
	),
	'transport' => 'auto'
) );


Kirki::add_field( 'gravity_designer', array(
	'type'     => 'slider',
	'settings' => 'form_fields_padding_5',
	'label'    => __( 'Padding', 'twentyfifteen' ),
	'section'  => 'form_fields_5',
	'default'  => 10,
	'priority' => 1,
	'choices'  => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output' => array(
		array(
			'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield input[type=text] ",
			'property' => 'padding',
			'units'    => 'px',
		),
		array(
			'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield select ",
			'property' => 'padding',
			'units'    => 'px',
		),
		array(
			'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield textarea ",
			'property' => 'padding',
			'units'    => 'px',
		),
		
		array(
			'element'  => 'body #gform_wrapper_' . $form5id . " .selectize-input ",
			'property' => 'padding',
			'units'    => 'px',
		),
		

	),
	'transport' => 'auto'
) );

Kirki::add_field( 'gravity_designer', array(
	'type'     => 'slider',
	'settings' => 'form_fields_brradius_5',
	'label'    => __( 'Border Radius', 'twentyfifteen' ),
	'section'  => 'form_fields_5',
	'default'  => 10,
	'priority' => 1,
	'choices'  => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output' => array(
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield input[type=text] ",
	'property' => 'border-radius',
	'units'    => 'px',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield select ",
	'property' => 'border-radius',
	'units'    => 'px',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield textarea ",
	'property' => 'border-radius',
	'units'    => 'px',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .selectize-input ",
	'property' => 'border-radius',
	'units'    => 'px',
),

	),
	'transport' => 'auto'
) );


Kirki::add_field( 'gravity_designer', array(
	'type'     => 'color',
	'settings' => 'form_fields_bgcolor_5',
	'label'    => __( 'Background Color', 'twentyfifteen' ),
	'section'  => 'form_fields_5',
	'default'  => 1,
	'priority' => 3,
	'alpha'       => true,
	'output' => array(
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield input[type=text] ",
	'property' => 'background-color',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield select ",
	'property' => 'background-color',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield textarea ",
	'property' => 'background-color',
	'units'    => '',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .selectize-input ",
	'property' => 'background-color',
	'units'    => '',
),

	),
	'transport' => 'auto'
) );


//Border for Form Fields


Kirki::add_field( 'gravity_designer', array(
	'type'     => 'slider',
	'settings' => 'form_field_border_size_5',
	'label'    => __( 'Border Size', 'twentyfifteen' ),
	'section'  => 'form_fields_5',
	'default'  => 1,
	'priority' => 7,
	'choices'  => array(
		'min'  => 0,
		'max'  => 50,
		'step' => 1,
	),
	'output' => array(
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield input[type=text] ",
	'property' => 'border-width',
	'units'    => 'px',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield select ",
	'property' => 'border-width',
	'units'    => 'px',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield textarea ",
	'property' => 'border-width',
	'units'    => 'px',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .selectize-input ",
	'property' => 'border-width',
	'units'    => 'px',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_checkbox .icheckbox_square ",
	'property' => 'border-width',
	'units'    => 'px',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_radio .iradio_square ",
	'property' => 'border-width',
	'units'    => 'px',
),

	),
	'transport' => 'auto'
) );

Kirki::add_field( 'gravity_designer', array(
	'type'     => 'color',
	'settings' => 'form_fields_border_color_5',
	'label'    => __( 'Border Color', 'twentyfifteen' ),
	'section'  => 'form_fields_5',
	'default'  => 1,
	'priority' => 8,
	'alpha'       => true,
	'output' => array(
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield input[type=text] ",
	'property' => 'border-color',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield select ",
	'property' => 'border-color',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield textarea ",
	'property' => 'border-color',
	'units'    => '',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .selectize-input ",
	'property' => 'border-color',
	'units'    => '',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_checkbox .icheckbox_square ",
	'property' => 'border-color',
	'units'    => '',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_radio .iradio_square ",
	'property' => 'border-color',
	'units'    => '',
),

	),
	'transport' => 'auto'
) );



Kirki::add_field( 'gravity_designer', array(
	'type'     => 'color',
	'settings' => 'form_fields_focus_border_color_5',
	'label'    => __( 'Hover & Focus Border Color', 'twentyfifteen' ),
	'section'  => 'form_fields_5',
	'default'  => 1,
	'priority' => 8,
	'alpha'       => true,
	'output' => array(
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield input[type=text]:focus ",
	'property' => 'border-color',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield select:focus ",
	'property' => 'border-color',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield textarea:focus ",
	'property' => 'border-color',
	'units'    => '',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .selectize-input:focus ",
	'property' => 'border-color',
	'units'    => '',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield input[type=text]:hover ",
	'property' => 'border-color',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield select:hover ",
	'property' => 'border-color',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield textarea:hover ",
	'property' => 'border-color',
	'units'    => '',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .selectize-input:hover ",
	'property' => 'border-color',
	'units'    => '',
),
	),
	'transport' => 'auto'
) );






Kirki::add_field( 'gravity_designer', array(
	'type'     => 'select',
	'settings' => 'form_fields_border_style_5',
	'label'    => __( 'Border Style', 'twentyfifteen' ),
	'section'  => 'form_fields_5',
	'priority' => 9,
	'choices'     => array(
			'none' => esc_attr__( 'None', 'twentyfifteen' ),
			'solid' => esc_attr__( 'Solid', 'twentyfifteen' ),
			'hidden' => esc_attr__( 'Hidden', 'twentyfifteen' ),
			'dotted' => esc_attr__( 'Dotted', 'twentyfifteen' ),	
			'dashed' => esc_attr__( 'Dashed', 'twentyfifteen' ),	
			'double' => esc_attr__( 'Double', 'twentyfifteen' ),	
			'groove' => esc_attr__( 'Groove', 'twentyfifteen' ),	
			'ridge' => esc_attr__( 'Ridge', 'twentyfifteen' ),	
			'inset' => esc_attr__( 'Inset', 'twentyfifteen' ),	
			'outset' => esc_attr__( 'Outset', 'twentyfifteen' ),	
			'initial' => esc_attr__( 'Initial', 'twentyfifteen' ),	
			'inherit' => esc_attr__( 'Inherit', 'twentyfifteen' ),	
			
			
			),
	'output' => array(
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield input[type=text] ",
	'property' => 'border-style',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield select ",
	'property' => 'border-style',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield textarea ",
	'property' => 'border-style',
	'units'    => '',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .selectize-input ",
	'property' => 'border-style',
	'units'    => '',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_checkbox .icheckbox_square ",
	'property' => 'border-style',
	'units'    => '',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_radio .iradio_square ",
	'property' => 'border-style',
	'units'    => '',
),

	),
	'transport' => 'auto'
) );


Kirki::add_field( 'gravity_designer', array(
	'type'     => 'image',
	'settings' => 'rd_chk_image_5',
	'label'    => __( 'Check Mark', 'twentyfifteen' ),
	'section'  => 'radio_and_checkboxes_5',
	'priority' => 1,
	'default'  => $checkmark,
	'alpha'       => true,
	'output' => array(
		array(
			'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_radio .iradio_square.checked ",
			'property' => 'background-image',
			'units'    => '',
		),
		array(
			'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_checkbox .icheckbox_square.checked ",
			'property' => 'background-image',
			'units'    => '',
		),
				
	
	),
	'transport' => 'auto'
) );


Kirki::add_field( 'gravity_designer', array(
	'type'     => 'color',
	'settings' => 'hover_checked_color_5',
	'label'    => __( 'Hover & Checked Color', 'twentyfifteen' ),
	'section'  => 'radio_and_checkboxes_5',
	'alpha'       => true,
	'default'  => 1,
	'priority' => 8,
	'output' => array(
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_radio .iradio_square.checked ",
	'property' => 'background-color',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_checkbox .icheckbox_square.checked ",
	'property' => 'background-color',
	'units'    => '',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_radio .iradio_square.checked ",
	'property' => 'border-color',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_checkbox .icheckbox_square.checked ",
	'property' => 'border-color',
	'units'    => '',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_radio .iradio_square.hover ",
	'property' => 'border-color',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_checkbox .icheckbox_square.hover ",
	'property' => 'border-color',
	'units'    => '',
),

	),
	'transport' => 'auto'
) );



Kirki::add_field( 'gravity_designer', array(
	'type'     => 'slider',
	'settings' => 'radio_check_size_5',
	'label'    => __( 'Size', 'twentyfifteen' ),
	'section'  => 'radio_and_checkboxes_5',
	'default'  => 22,
	'priority' => 7,
	'choices'  => array(
		'min'  => 0,
		'max'  => 50,
		'step' => 1,
	),
	'output' => array(
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_checkbox .icheckbox_square ",
	'property' => 'width',
	'units'    => 'px',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_checkbox .icheckbox_square ",
	'property' => 'height',
	'units'    => 'px',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_radio .iradio_square ",
	'property' => 'width',
	'units'    => 'px',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_fields .gfield .gfield_radio .iradio_square ",
	'property' => 'height',
	'units'    => 'px',
),

	),
	'transport' => 'auto'
) );


Kirki::add_field( 'gravity_designer', array(
	'type'     => 'slider',
	'settings' => 'submit_button_width_5',
	'label'    => __( 'Width', 'twentyfifteen' ),
	'section'  => 'submit_button_5',
	'default'  => 30,
	'priority' => 1,
	'choices'  => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output' => array(
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_footer input[type=submit] ",
	'property' => 'width',
	'units'    => '%',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_next_button ",
	'property' => 'width',
	'units'    => '%',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_previous_button ",
	'property' => 'width',
	'units'    => '%',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_button ",
	'property' => 'width',
	'units'    => '%',
),

	),
	'transport' => 'auto'
) );

Kirki::add_field( 'gravity_designer', array(
	'type'     => 'slider',
	'settings' => 'submit_button_radius_5',
	'label'    => __( 'Border Radius', 'twentyfifteen' ),
	'section'  => 'submit_button_5',
	'default'  => 30,
	'priority' => 3,
	'choices'  => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output' => array(
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_footer input[type=submit] ",
	'property' => 'border-radius',
	'units'    => 'px',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_next_button ",
	'property' => 'border-radius',
	'units'    => 'px',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_previous_button ",
	'property' => 'border-radius',
	'units'    => 'px',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_button ",
	'property' => 'border-radius',
	'units'    => 'px',
),
	),
	'transport' => 'auto'
) );

Kirki::add_field( 'gravity_designer', array(
	'type'     => 'slider',
	'settings' => 'submit_button_padding_5',
	'label'    => __( 'Padding', 'twentyfifteen' ),
	'section'  => 'submit_button_5',
	'default'  => 10,
	'priority' => 2,
	'choices'  => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output' => array(
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_footer input[type=submit] ",
	'property' => 'padding',
	'units'    => 'px',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_next_button ",
	'property' => 'padding',
	'units'    => 'px',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_previous_button ",
	'property' => 'padding',
	'units'    => 'px',
),

array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_button ",
	'property' => 'padding',
	'units'    => 'px',
),
	),
	'transport' => 'auto'
) );


Kirki::add_field( 'gravity_designer', array(
	'type'     => 'color',
	'settings' => 'submit_button_bg_color_5',
	'label'    => __( 'Background Color', 'twentyfifteen' ),
	'section'  => 'submit_button_5',
	'default'  => 1,
	'priority' => 4,
	'alpha'       => true,
	'output' => array(
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_footer input[type=submit] ",
	'property' => 'background-color',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_next_button ",
	'property' => 'background-color',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_previous_button ",
	'property' => 'background-color',
	'units'    => '',
),


array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_button  ",
	'property' => 'background-color',
	'units'    => '',
),


array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gf_progressbar_percentage ",
	'property' => 'background-color',
	'units'    => '',
),

	),
	'transport' => 'auto'
) );


Kirki::add_field( 'gravity_designer', array(
	'type'     => 'color',
	'settings' => 'submit_button_hover_color_5',
	'label'    => __( 'Hover Color', 'twentyfifteen' ),
	'section'  => 'submit_button_5',
	'default'  => 1,
	'priority' => 4,
	'alpha'       => true,
	'output' => array(
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_footer input[type=submit]:hover ",
	'property' => 'background-color',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_next_button:hover ",
	'property' => 'background-color',
	'units'    => '',
),
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_previous_button:hover ",
	'property' => 'background-color',
	'units'    => '',
),


array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_body .gform_page_footer .gform_button:hover  ",
	'property' => 'background-color',
	'units'    => '',
),

	),
	'transport' => 'auto'
) );



Kirki::add_field( 'gravity_designer', array(
	'type'     => 'select',
	'settings' => 'submit_button_position_5',
	'label'    => __( 'Alignment', 'twentyfifteen' ),
	'section'  => 'submit_button_5',
	'default'  => 1,
	'priority' => 5,
	'choices'     => array(
			'left' => esc_attr__( 'Left', 'twentyfifteen' ),
			'center' => esc_attr__( 'Center', 'twentyfifteen' ),
			'right' => esc_attr__( 'Right', 'twentyfifteen' ),
		),
	'output' => array(
array(
	'element'  => 'body #gform_wrapper_' . $form5id . " .gform_footer ",
	'property' => 'text-align',
	'units'    => '',
),


	),
	'transport' => 'auto'
) );




?>