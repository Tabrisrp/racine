<?php
/*
Customizer
*/
if ( !function_exists( 'racine_register_theme_customizer' ) ) {
    function racine_register_theme_customizer( $wp_customize ) {
        $wp_customize->add_section(
            'racine_additional_section',
            array(
                'title' => __( 'Additional Section', 'racine' ),
                'priority' => 200
            )
        );
    
        $wp_customize->add_setting(
            'racine_link_color',
            array(
                'default' => '#0000FF',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'link_color',
                array(
                    'label' => __( 'Links color', 'racine' ),
                    'section' => 'colors',
                    'settings' => 'racine_link_color'
                )
            )
        );
    }
}
add_action( 'customize_register', 'racine_register_theme_customizer' );

if( !function_exists( 'racine_customizer_css' ) ) {
    function racine_customizer_css() {
        ?>
        <style>
            a { color: <?php echo get_theme_mod( 'racine_link_color' ) ?>; }
        </style>
        <?php
    }
}
add_action( 'wp_head', 'racine_customizer_css' );

if ( !function_exists( 'racine_customizer_live_preview' ) ) {
    function racine_customizer_live_preview() {
        wp_enqueue_script( 'rp-customizer', get_stylesheet_directory_uri() . '/js/customizer.js', array( 'jquery', 'customize-preview' ), '1.0', true );
    }
}
add_action( 'customize_preview_init', 'racine_customizer_live_preview' );