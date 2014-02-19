<?php
/*
Customizer
*/
function rp_register_theme_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'rp_additional_section',
        array(
            'title' => __( 'Additional Section', 'wp-root-theme' ),
            'priority' => 200
        )
    );

    $wp_customize->add_setting(
        'rp_link_color',
        array(
            'default' => '#000000',
            'transport' => 'postMessage'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'link_color',
            array(
                'label' => __( 'Links color', 'wp-root-theme' ),
                'section' => 'rp_additional_section',
                'settings' => 'rp_link_color'
            )
        )
    );
}
add_action( 'customize_register', 'rp_register_theme_customizer' );

function rp_customizer_css() {
    ?>
    <style>
        a { color: <?php echo get_theme_mod( 'rp_link_color' ) ?>; }
    </style>
    <?php
}
add_action( 'wp_head', 'rp_customizer_css' );

function rp_customizer_live_preview() {
    wp_enqueue_script( 'rp-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'jquery', 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'rp_customizer_live_preview' );