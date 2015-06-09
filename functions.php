<?php
// Includes the customizer settings
require_once( 'inc/customizer.php' );

// Set content width value based on the theme's design
if ( ! isset( $content_width ) ) {
	$content_width = 1140;
}

// Register Theme Features
if ( !function_exists( 'racine_theme_features' ) ) {
    function racine_theme_features()  {

    	// Add theme support for Automatic Feed Links
    	add_theme_support( 'automatic-feed-links' );

        // Add theme support for title tag display
        add_theme_support( 'title-tag' );

    	// Add theme support for Featured Images
    	add_theme_support( 'post-thumbnails' );

        // Add theme support for Custom Background
        $bg_defaults = array(
            'default-color' => 'FFFFFF',
        );

        add_theme_support( 'custom-background', $bg_defaults );

        // Add theme support for Custom Header
        $header_defaults = array(
            'flex-width' => true,
            'flex-height' => true,
            'width' => 1140,
            'height' => 300,
            'header-text' => false,
            'random-default' => true
        );

        add_theme_support( 'custom-header', $header_defaults );

    	// Add theme support for Semantic Markup
    	$markup = array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' );
    	add_theme_support( 'html5', $markup );

    	// Add theme support for Translation
    	load_theme_textdomain( 'racine', get_template_directory() . '/languages' );

        // Add support for Editor Style
        add_editor_style( 'css/editor-style.css' );
    }
}
// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'racine_theme_features' );

// Register Navigation Menus
if ( !function_exists( 'racine_nav_menus' ) ) {
    function racine_nav_menus() {

    	$locations = array(
    		'navigation' => __( 'Main Navigation', 'racine' ),
    		'footer' => __( 'Footer Menu', 'racine' ),
    	);
    	register_nav_menus( $locations );
    }
}
// Hook into the 'init' action
add_action( 'init', 'racine_nav_menus' );

// Enqueue scripts
if ( !function_exists( 'racine_enqueue_scripts') ) {
    function racine_enqueue_scripts() {
        wp_enqueue_script( 'racine', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0.4', true );
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'racine_enqueue_scripts' );

// Enqueue styles
if ( !function_exists( 'racine_enqueue_styles' ) ) {
    function racine_enqueue_styles() {
        wp_enqueue_style( 'racine', get_template_directory_uri() . '/style.css', array( 'dashicons' ) );
    }
}
add_action( 'wp_enqueue_scripts', 'racine_enqueue_styles' );

//Conditionally Enqueue Script for IE browsers less than IE 9
function racine_enqueue_lt_ie9() {
    global $wp_scripts;
 
    wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js' , array(), '3.7.1', false );
    $wp_scripts->add_data( 'html5shiv', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'racine_enqueue_lt_ie9' );

// Add sidebar
add_action( 'widgets_init', 'racine_register_sidebars' );
if ( !function_exists( 'racine_register_sidebars' ) ) {
    function racine_register_sidebars() {
        register_sidebar( array(
            'name' => __( 'Sidebar', 'racine' ),
            'id' => 'racine-sidebar',
            'description' => __( 'Sidebar widgets zone', 'racine'),
            'class' => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widgettitle">',
            'after_title' => '</div>'
            )
        );
    }
}

// Backcompatibility for WP < 4.1
if ( ! function_exists( '_wp_render_title_tag' ) ) :
function racine_render_title() {
    echo '<title>' . wp_title( '|', false, 'right' ) . "</title>\n";
}
add_action( 'wp_head', 'racine_render_title' );
endif;