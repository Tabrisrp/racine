<?php get_header(); ?>
<main role="main" id="main">
    <div class="search-recap">
        <h1><?php _e( 'Search Results for:', 'wp-root-theme' ) ?> <?php the_search_query() ?></h1>
    </div>
    <div class="content">
        <?php get_template_part( 'loop', 'posts' ) ?>
    </div>
</main>
<?php get_footer(); ?>