<?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
    	    <article <?php post_class() ?>>
    	        <?php the_post_thumbnail() ?>
    	    	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    	    	<?php the_excerpt(); ?>
    	    	<aside>
    	    	    <span><?php _e( 'Posted by', 'wp-root-theme' ) ?> <?php the_author() ?> <?php _e( 'on', 'wp-root-theme' ) ?> <?php echo get_the_date() ?></span>
    	    	    <?php the_category() ?>
    	    	    <?php the_tags() ?>
    	    	</aside>
    	    </article>
    	<?php endwhile; ?>
    	<nav class="pagination">
    	    <?php previous_posts_link() ?>
    	    <?php next_posts_link() ?>
    	</nav>
    <?php else : ?>
        <div>
            <h2><?php _e( 'No posts found', 'wp-root-theme' ) ?></h2>
        </div>
    <?php endif;