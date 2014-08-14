<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title( '-', true, 'right' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<span class="visually-hidden"><a href="#main"><?php _e( 'Skip to main content', 'wp-root-theme' ) ?></a></span>
<div class="mw960p center">
    <header role="banner" class="row">
        <div class="col w33">
        <?php if ( is_front_page() || is_home() ) : ?>
            <h1 class="site-title"><a href="<?php echo home_url( '/' ) ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="big"><?php bloginfo( 'description' ); ?></p>
        <?php else : ?>
            <div class="h1-like site-title"><a href="<?php echo home_url( '/' ) ?>"><?php bloginfo( 'name' ); ?></a></div>
            <p class="big"><?php bloginfo( 'description' ); ?></p>
        <?php endif ?>
        </div>
        <div class="col txtright">
            <?php get_search_form(); ?>
            <nav role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'navigation', 'container' => false, 'menu_class' => 'pl0 unstyled main-navigation' ) ); ?>
            </nav>
        </div>
    </header>
<main role="main" id="main">