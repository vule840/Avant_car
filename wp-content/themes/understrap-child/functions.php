<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    //wp_enqueue_style( 'svg', get_stylesheet_directory_uri() . '/css/svg/iconizr-svg-single.css' );
    //wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
       wp_enqueue_script( 'owl-carusel', get_stylesheet_directory_uri() . '/js/owl.carousel.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-scripts-custom', get_stylesheet_directory_uri() . '/js/child-theme-custom.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );


add_filter( 'script_loader_src', 'gfgp_api_key', 10, 2 );
function gfgp_api_key( $src, $handle ) {
    if( 'google-places' === $handle ) {
        $src = add_query_arg( array(
            'key' => 'AIzaSyCCT4CFZL_NcwdBhcJR7TKkbHJQvoil160'
        ), $src );
    }
    return $src;
}


/************

    SVG SUPPORT

**************/

function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



/************

   CITY_COMPACT CUSTOM POST

**************/
function Flota_dugorocni() {

    $labels = array(
        'name'                  => _x( 'City compact', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'city_compact', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'City compact', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Dodaj novi City compact', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'city_compact', 'text_domain' ),
        'description'           => __( 'Važni pojmovi', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'Pojmovi' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'city_compact', $args );

    ///economy


     $labels = array(
        'name'                  => _x( 'economy', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'economy', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Economy', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Dodaj novi Economy', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'economy', 'text_domain' ),
        'description'           => __( 'economy pojmovi', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'Pojmovi' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'economy', $args );

    ///Bussines

      $labels = array(
        'name'                  => _x( 'bussines', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'bussines', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Bussines', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Dodaj novi bussines', 'text_domain' ),
        'add_new'               => __( 'Dodaj novi bussines', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'bussines', 'text_domain' ),
        'description'           => __( 'bussines pojmovi', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'Pojmovi' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'bussines', $args );

      ///Premium

      $labels = array(
        'name'                  => _x( 'premium_tesla', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'premium_tesla', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Premium Tesla', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Dodaj novi Premium', 'text_domain' ),
        'add_new'               => __( 'Dodaj novi Premium', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'premium_tesla', 'text_domain' ),
        'description'           => __( 'premium_tesla pojmovi', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'Pojmovi' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'premium_tesla', $args );
     ///Electric compact bussines

      $labels = array(
        'name'                  => _x( 'Electric_compact', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Electric_compact', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Electric Compact', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Dodaj novi Electric_compacts', 'text_domain' ),
        'add_new'               => __( 'Dodaj novi Electric_compacts', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Electric_compact', 'text_domain' ),
        'description'           => __( 'Electric_compact pojmovi', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'Pojmovi' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'Electric_compact', $args );

    ///Van

      $labels = array(
        'name'                  => _x( 'Van', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Van', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Van', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Dodaj novi Van', 'text_domain' ),
        'add_new'               => __( 'Dodaj novi Van', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Van', 'text_domain' ),
        'description'           => __( 'Van pojmovi', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'Pojmovi' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'Van', $args );

    ///Vozila po naružbi
/* $labels = array(
        'name'                  => _x( 'Vozila_po_naruzbi', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Vozila_po_naruzbi', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Vozila_po_naruzbi', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Dodaj novo Vozilo po naruzbi', 'text_domain' ),
        'add_new'               => __( 'Dodaj novo Vozilo po naruzbi', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Vozila_po_naruzbi', 'text_domain' ),
        'description'           => __( 'Vozila_po_naruzbi pojmovi', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'Pojmovi' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 4,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'Vozila_po_naruzbi', $args );*/
     


    ///TRANSFERI

      $labels = array(
        'name'                  => _x( 'Transferi', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Transferi', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Transferi', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Dodaj novi transfer', 'text_domain' ),
        'add_new'               => __( 'Dodaj novi transfer', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Transfer', 'text_domain' ),
        'description'           => __( 'Transfer pojmovi', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'Pojmovi' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 4,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'Transferi', $args );

}

add_action( 'init', 'Flota_dugorocni', 0 );





/************

    POP UP FIX

**************/


add_action( 'wp_footer', 'gform_popup_fix');
function gform_popup_fix() {

    $tag = "";
    ob_start();
    ?>
    <script type="text/javascript">
        function gformInitDatepicker(){jQuery(".datepicker").each(function(){var a=jQuery(this),b=this.id,c={yearRange:"-100:+20",showOn:"focus",dateFormat:"mm/dd/yy",changeMonth:!0,changeYear:!0,suppressDatePicker:!1,onClose:function(){a.focus();var b=this;this.suppressDatePicker=!0,setTimeout(function(){b.suppressDatePicker=!1},200)},beforeShow:function(a,b){return!this.suppressDatePicker}};a.hasClass("dmy")?c.dateFormat="dd/mm/yy":a.hasClass("dmy_dash")?c.dateFormat="dd-mm-yy":a.hasClass("dmy_dot")?c.dateFormat="dd.mm.yy":a.hasClass("ymd_slash")?c.dateFormat="yy/mm/dd":a.hasClass("ymd_dash")?c.dateFormat="yy-mm-dd":a.hasClass("ymd_dot")&&(c.dateFormat="yy.mm.dd"),a.hasClass("datepicker_with_icon")&&(c.showOn="both",c.buttonImage=jQuery("#gforms_calendar_icon_"+b).val(),c.buttonImageOnly=!0),b=b.split("_"),c=gform.applyFilters("gform_datepicker_options_pre_init",c,b[1],b[2]),a.datepicker(c)})};
        (function ($) {
            $(document).ready( function() {
                $('a','.order-fuel').click( function() {
                    setTimeout(function() {
                        gformInitDatepicker();
                    }, 500);
                });
            });
        })(jQuery)
    </script>
    <?php
    $tag = ob_get_contents();
    ob_end_clean();
    echo $tag;

}


/************

    TEST

**************/

/*add_filter( 'gform_field_value_date', 'get_current_post_title' );
function get_current_post_title($the_title){  
 
    $current_post_title = get_the_title($post->ID);
 
    return $current_post_title;
}*/

/*
add_filter( 'gform_enable_credit_card_field', 'enable_creditcard', 11 );
function enable_creditcard( $is_enabled ) {
    return true;
}*/


/************

    ZA DATEPICKER Z INDEX

**************/

add_action( 'wp_head', 'gf_datepicker_fix', 1000000 );
function gf_datepicker_fix(){
?><style>
body div#ui-datepicker-div[style] {
z-index: 2000000000 !important;
}
</style> <?php
}


/************

   CUSTOM PROGRESS BAR  NAPRAVITI DOTS


**************/

/*add_filter( 'gform_progress_bar', 'my_custom_function', 10, 3 );
function my_custom_function( $progress_bar, $form, $confirmation_message ) {
 
    $progress_bar = '<ul>
        <li>Page 1</li>
        <li>Page 2</li>
        <li>Page 3</li>
    </ul>';
 
    return $progress_bar;
}*/

add_filter( 'gform_progress_steps', 'progress_steps_markup', 10, 3 );
function progress_steps_markup( $progress_steps, $form, $page ) {
    $active_class = 'gf_step_active';
    $progress_steps = str_replace( $active_class, $active_class . ' your_custom_class', $progress_steps );
 
    return $progress_steps;
}

/************

   CUSTOM GUMB GRAVITY

https://docs.gravityforms.com/gform_submit_button/
**************/


// filter the Gravity Forms button type

add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='btn submit_gumb' id='gform_submit_button_{$form['id']}'><span>Submit</span></button>";
}

/************

   SEARCH
https://github.com/understrap/understrap/issues/686
**************/


 /* add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
function add_search_box_to_menu( $items, $args ) {
    if( $args->theme_location == 'primary' )
        return $items.'<li class="menu-item nav-item nav-search"><form action="http://example.com/" id="searchform" method="get"><input type="text" name="s" id="s" class="form-control" placeholder="Search"></form></li>';
 
    return $items;
}*/

/*add_action( 'gform_after_submission', 'access_entry_via_field', 10, 2 );
function access_entry_via_field( $entry, $form ) {
    foreach ( $form['fields'] as $field ) {
        $inputs = $field->get_entry_inputs();
        if ( is_array( $inputs ) ) {
            foreach ( $inputs as $input ) {
                $value = rgar( $entry, (string) $input['id'] );
               echo var_dump($value);
                
            }
        } else {
            $value = rgar( $entry, (string) $field->id );
            // do something with the value
            echo var_dump($value);
        }
    }
}

add_filter( 'gform_confirmation', function ( $confirmation, $form, $entry, $ajax ) {
    if ( isset( $confirmation['redirect'] ) ) {
        $url          = esc_url_raw( $confirmation['redirect'] );
        $confirmation = 'Thanks for contacting us! We will get in touch with you shortly.';
        $confirmation .= "<script type=\"text/javascript\">window.open('$url', '_blank');</script>";
    }
 
    return $confirmation;
}, 10, 4 );*/

add_filter( 'gform_confirmation_anchor_13', '__return_false' );

add_filter('show_admin_bar', '__return_false');


/*
/* Add the following code to your theme (or child-theme)
/*   'functions.php' file starting at 'add_action()'.
*/
//add_action( 'wp_footer', 'pum14_popup_reg_form_check', 1000 );
/*
 * Reopen a non-AJAX submitted form after form submit.
 *
 * @since 1.0.0.
 *
 * @return void
 */
/*function pum14_popup_reg_form_check() {
        if ( isset( $_POST['pum-279'] ) && $_POST['pum-279'] == 'my_form' ) {
                ?>
                <script type="text/javascript">
            PUM.open(88);
                </script>
                <?php
        }
}*/

/*add_action( 'gform_post_submission', 'set_post_content', 10, 2 );
function set_post_content( $entry, $form ) {
  ?>
     <script type="text/javascript">
            PUM.open(88);
                </script>
  <?php
    //updating post
    //wp_update_post( $post );
}*/


/*function load_script_to_remove_arrow(){
?>
<script>

    console.log('ovo je prošlo');
    PUM.open(88);

</script>
<?php
}
add_action( 'gform_post_submission', 'load_script_to_remove_arrow' );*/

/**
 * Filter Gravity Forms select field display to wrap optgroups where defined
 * USE:
 * set the value of the select option to `optgroup` within the form editor. The 
 * filter will then automagically wrap the options following until the start of 
 * the next option group
 */
 

//https://www.wpcover.com/gravity-forms-create-optgroups-separate-select-options/

add_filter( 'gform_field_content', 'filter_gf_select_optgroup', 10, 2 );
function filter_gf_select_optgroup( $input, $field ) {
    if ( $field->type == 'select' ) {
        $opt_placeholder_regex = strpos($input,'gf_placeholder') === false ? '' : "<\s*?option.*?class='gf_placeholder'>[^<>]+<\/option\b[^>]*>";
        $opt_regex = "/<\s*?select\b[^>]*>" . $opt_placeholder_regex . "(.*?)<\/select\b[^>]*>/i";
        $opt_group_regex = "/<\s*?option\s*?value='optgroup\b[^>]*>([^<>]+)<\/option\b[^>]*>/i";
 
        preg_match($opt_regex, $input, $opt_values);
        $split_options = preg_split($opt_group_regex, $opt_values[1]);
        $optgroup_found = count($split_options) > 1;
 
        // sometimes first item in the split is blank
        if( strlen($split_options[0]) < 1 ){
            unset($split_options[0]);
            $split_options = array_values( $split_options );
        }
 
        if( $optgroup_found ){
            $fixed_options = '';
            preg_match_all($opt_group_regex, $opt_values[1], $opt_group_match);
            if( count($opt_group_match) > 1 ){
                foreach( $split_options as $index => $option ){
                    $fixed_options .= "<optgroup label='" . $opt_group_match[1][$index] . "'>" . $option . '</optgroup>';
                }
            }
            $input = str_replace($opt_values[1], $fixed_options, $input);
        }
    }
 
    return $input;
}




/*
/* Add the following code to your theme (or child-theme)
/*   'functions.php' file starting at 'add_action()'.
*/
//add_action( 'wp_footer', 'pum14_popup_reg_form_check', 1000 );
/*
 * Reopen a non-AJAX submitted form after form submit.
 *
 * @since 1.0.0.
 *
 * @return void
 */
/*function pum14_popup_reg_form_check() {
        if ( isset( $_POST['13'] ) && $_POST['13'] == 'test2(2)' ) {
                ?>
                <script type="text/javascript">
            PUM.open(302);
                </script>
                <?php
        }
}*/