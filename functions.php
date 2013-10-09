<?php
// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 600;

// Register Theme Features
if ( !function_exists( 'rp_theme_features' ) ) {
    function rp_theme_features()  {
    
    	// Add theme support for Automatic Feed Links
    	add_theme_support( 'automatic-feed-links' );
    
    	// Add theme support for Featured Images
    	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );	
    
    	// Add theme support for Semantic Markup
    	$markup = array( 'search-form', 'comment-form', 'comment-list', );
    	add_theme_support( 'html5', $markup );	
    
    	// Add theme support for Translation
    	load_theme_textdomain( 'wp-root', get_template_directory() . '/lang' );	
    }
}

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'rp_theme_features' );

// Register Navigation Menus
if ( !function_exists( 'rp_nav_menus' ) ) {
    function rp_nav_menus() {
    
    	$locations = array(
    		'navigation' => __( 'Navigation', 'wp-root' ),
    		'footer' => __( 'Footer menu', 'wp-root' ),
    	);
    	register_nav_menus( $locations );
    }
}

// Hook into the 'init' action
add_action( 'init', 'rp_nav_menus' );

// Add thickbox
add_action( 'after_setup_theme', 'add_thickbox' );

add_filter( 'the_content', 'rp_auto_thickbox', 10, 1 );
if ( !function_exists( 'rp_auto_thickbox' ) ) {
    function rp_auto_thickbox( $content ) {
        $pattern = "/<a(.*?)href=('|\")([^>]*)('|\")(.*?)><img(.*?)src=('|\")([^>]*).(bmp|gif|jpeg|jpg|png)('|\")(.*?)\/><\/a>/i";
        $replacement = '<a$1class="thickbox" href=$2$3$4$5><img$6src=$7$8.$9$10$11/></a>';
        $content = preg_replace($pattern, $replacement, $content);
        return $content;
    }
}

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
            'before_title' => '<h5 class="widgettitle">',
            'after_title' => '</h5>'
            )
        );
    }
}

// Add class to menu items
add_filter('nav_menu_css_class' , 'rp_menu_item_class' , 10 , 1);
function rp_menu_item_class($classes){
             $classes[] = "flex-fluid";
     return $classes;
}