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
    wp_enqueue_script( 'jquery');
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

function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');