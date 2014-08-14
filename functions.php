<?php
//WordPress.com-specific functions and definitions

global $themecolors;

//Set a default theme color array for WP.com.

$themecolors = array(
	'bg' => '',
	'border' => '',
	'text' => '',
	'link' => '',
	'url' => '',
);

// Includes the customizer settings
require_once( 'inc/customizer.php' );

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 600;

// Register Theme Features
if ( !function_exists( 'rp_theme_features' ) ) {
    function rp_theme_features()  {

    	// Add theme support for Automatic Feed Links
    	add_theme_support( 'automatic-feed-links' );

    	// Add theme support for Featured Images
    	add_theme_support( 'post-thumbnails' );

    	// Add theme support for Semantic Markup
    	$markup = array( 'search-form', 'comment-form', 'comment-list', 'gallery' );
    	add_theme_support( 'html5', $markup );

    	// Add theme support for Translation
    	load_theme_textdomain( 'wp-root-theme', get_template_directory() . '/lang' );

        // Add support for Editor Style
        add_editor_style( 'editor-style.css' );
    }
}
// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'rp_theme_features' );

// Register Navigation Menus
if ( !function_exists( 'rp_nav_menus' ) ) {
    function rp_nav_menus() {

    	$locations = array(
    		'navigation' => __( 'Navigation', 'wp-root-theme' ),
    		'footer' => __( 'Footer menu', 'wp-root-theme' ),
    	);
    	register_nav_menus( $locations );
    }
}
// Hook into the 'init' action
add_action( 'init', 'rp_nav_menus' );

// Enqueue scripts and styles
if ( !function_exists( 'rp_enqueue_scripts') ) {
    function rp_enqueue_scripts() {
        wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'dashicons' ), '1.2' );
        if ( is_singular() ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'rp_enqueue_scripts' );

//Conditionally Enqueue Script for IE browsers less than IE 9
function rp_enqueue_lt_ie9() {
    global $is_IE;
 
    // Return early, if not IE
    if ( ! $is_IE ) return;
 
    // Include the file, if needed
    if ( ! function_exists( 'wp_check_browser_version' ) )
        include_once( ABSPATH . 'wp-admin/includes/dashboard.php' );
 
    // IE version conditional enqueue
    $response = wp_check_browser_version();
    if ( 0 > version_compare( intval( $response['version'] ) , 9 ) )
        wp_enqueue_script( 'html5shive', get_template_directory_uri() . '/js/html5shiv.min.js' , array(), '3.7.1', false );
}
add_action( 'wp_enqueue_scripts', 'rp_enqueue_lt_ie9' );

// Add sidebars
add_action( 'widgets_init', 'rp_register_sidebars' );
if ( !function_exists( 'rp_register_sidebars' ) ) {
    function rp_register_sidebars() {
        register_sidebar( array(
            'name' => __( 'Sidebar', 'wp-root' ),
            'id' => 'rp-sidebar',
            'description' => __( 'Sidebar widgets zone', 'wp-root'),
            'class' => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widgettitle">',
            'after_title' => '</div>'
            )
        );
    }
}

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function rp_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}
	
	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'rp_wp_title', 10, 2 );