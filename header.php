<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <title><?php wp_title( '-' ) ?></title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
   <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
  <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<span class="skip-links"><a href="#main"><?php _e( 'Skip to main content', 'wp-root-theme' ) ?></a></span>
<header role="banner">
    <?php if ( is_front_page() || is_home() ) : ?>
        <h1><a href="<?php echo home_url( '/' ) ?>"><?php bloginfo( 'name' ) ?></a></h1>
        <h4><?php bloginfo( 'description' ) ?></h4>
    <?php else : ?>
        <h4><a href="<?php echo home_url( '/' ) ?>"><?php bloginfo( 'name' ) ?></a></h4>
        <h6><?php bloginfo( 'description' ) ?></h6>
    <?php endif ?>
    <nav role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'navigation', 'container' => false, 'menu_class' => 'flex flex-h pl0 unstyled' ) ) ?>
    </nav>
    <?php get_search_form() ?>
</header>