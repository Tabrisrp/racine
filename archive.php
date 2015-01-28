<?php get_header();
get_template_part( 'part', 'breadcrumbs' ); ?>
    <div class="term-header">
        <?php the_archive_title(); ?>
        <?php if ( !get_query_var( 'paged' ) ) :
            the_archive_description();
        endif; ?>
    </div>
    <div class="content">
        <?php get_template_part( 'loop', 'posts' ); ?>
    </div>
<?php get_sidebar();
get_footer();