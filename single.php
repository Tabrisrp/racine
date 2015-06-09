<?php get_header();
get_template_part( 'part', 'breadcrumbs' ); ?>
<div class="page-content">
<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <?php the_post_thumbnail(); ?>
    	<h1 class="entry-title"><?php the_title(); ?></h1>
    	<div class="entry-content">
    	    <?php
            /**
                Détecter une page de commentaire sur WordPress
            */
            $cpage = get_query_var( 'cpage' );
            if ( is_singular() && $cpage > 0 ){
                the_excerpt();
            } else {
                the_content();
            } ?>
    	</div>
    	<?php wp_link_pages(); ?>
    	<aside>
            <p><?php _e( 'Posted by', 'racine' ); ?> <span class="vcard author"><span class="fn"><?php the_author(); ?></span></span> <?php _e( 'on', 'racine' ); ?> <span class="updated"><?php echo get_the_date(); ?></span></p>
            <p><?php _e( 'Categories:', 'racine'); ?> <?php the_category( ',' ); ?></p>
            <p><?php the_tags( __( 'Tags:', 'racine') , ', ' ); ?></p>
    	</aside>
    	<?php the_post_navigation(); ?>
    	<?php comments_template(); ?>
    </article>
<?php endwhile; ?>
</div>
<?php get_sidebar();
get_footer();