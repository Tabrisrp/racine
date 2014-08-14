<?php get_header() ?>
<div class="row">
    <div class="col w66 content">
    <?php
    if (have_posts()) :
    	while (have_posts()) : the_post(); ?>
    	    <article <?php post_class() ?>>
    	        <?php the_post_thumbnail( 'full' ) ?>
    	    	<h1><?php the_title(); ?></h1>
    	    	<?php the_content(); ?>
    	    	<?php wp_link_pages() ?>    
    	    	<aside>
    	    	    <span><?php _e( 'Posted by', 'wp-root-theme' ) ?> <?php the_author() ?> <?php _e( 'on', 'wp-root-theme' ) ?> <?php echo get_the_date() ?></span>
    	    	    <?php the_category() ?>
    	    	    <?php the_tags() ?>
    	    	</aside>
    	    </article>
    	    <?php comments_template() ?>
    	<?php endwhile; ?>
    <?php endif; ?>
    </div>
    <?php get_sidebar() ?>
</div>
<?php get_footer() ?>