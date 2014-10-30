<!DOCTYPE html>
<!--[if lte IE 6]> <html class="no-js ie6 ie67 ie678" <?php language_attributes(); ?>> <![endif]-->
<!--[if lte IE 7]> <html class="no-js ie7 ie67 ie678" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<span class="visually-hidden"><a href="#main"><?php _e( 'Skip to main content', 'racine' ); ?></a></span>
<header role="banner">
    <div class="mw1140p center">
        <?php if ( get_header_image() !== '' ) : ?>
        <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
        <?php endif; ?>
        <?php if ( is_front_page() || is_home() ) : ?>
            <h1 class="site-title"><a href="<?php echo home_url( '/' ) ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
        <?php else : ?>
            <div class="h1-like site-title"><a href="<?php echo home_url( '/' ) ?>"><?php bloginfo( 'name' ); ?></a></div>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
        <?php endif ?>
        <?php get_search_form(); ?>
        <nav role="navigation">
            <a href="#" id="drop" class="drop"><i class="dashicons dashicons-menu"></i> <?php _e( 'Menu', 'racine' ); ?></a>
            <?php wp_nav_menu( array( 'theme_location' => 'navigation', 'container' => false, 'menu_class' => 'pln unstyled main-navigation' ) ); ?>
        </nav>
    </div>
</header>
<main role="main" id="main">
    <div class="mw1140p center">