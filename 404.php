<?php get_header(); ?>
<?php get_template_part( 'part', 'breadcrumbs' ); ?>
    <section class="page-content">
        <h1><?php _e( 'Page not found', 'racine' ); ?></h1>
        <p><?php _e( "We're sorry, but the content you are looking for could not be found. It may have been moved or deleted. Here are some suggestions to locate it :", 'racine' ); ?></p>
        <ul>
            <li><?php _e( 'Use the navigation above', 'racine' ); ?></li>
            <li><?php _e( 'Use the search form below', 'racine' ); ?></li>
            <li><?php echo sprintf( __( 'Go back to the <a href="%s">homepage</a>', 'racine' ), home_url( '/' ) ); ?></li>
        </ul>
        <h2><?php _e( 'Do a search for the required content', 'racine' ); ?></h2>
        <?php get_search_form(); ?>
    </section>
<?php get_footer();