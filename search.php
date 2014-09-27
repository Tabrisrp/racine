<?php get_header(); ?>
<?php get_template_part( 'part', 'breadcrumbs' ); ?>
<div class="search-recap">
    <h1><?php _e( 'Search Results for:', 'racine' ); ?> <?php the_search_query(); ?></h1>
</div>
<div class="content">
    <?php get_template_part( 'loop', 'posts' ); ?>
</div>
<?php get_footer();