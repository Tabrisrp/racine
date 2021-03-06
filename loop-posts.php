<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
	    <article <?php post_class() ?>>
	    	<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	    	<div class="entry-summary">
	    	    <?php the_post_thumbnail(); ?>
                <?php the_content( sprintf( __( 'Continue reading %s &rarr;', 'racine' ), '<span class="screen-reader-text"> ' . get_the_title() . '</span>' ) ); ?>
	    	</div>
	    	<aside class="small">
	    	    <p><?php _e( 'Posted by', 'racine' ); ?> <span class="vcard author"><span class="fn"><?php the_author(); ?></span></span> <?php _e( 'on', 'racine' ) ?> <span class="updated"><?php echo get_the_date(); ?></span></p>
	    	    <?php if ( !is_category() ) : ?>
	    	    <p><?php _e( 'Categories:', 'racine'); ?> <?php the_category( ',' ); ?></p>
	    	    <?php endif; ?>
	    	    <?php if ( !is_tag() ) : ?>
	    	    <p><?php the_tags( __( 'Tags:', 'racine') , ', ' ); ?></p>
	    	    <?php endif; ?>
	    	</aside>
	    </article>
	<?php endwhile; ?>
	<?php the_posts_pagination(); ?>
<?php else : ?>
    <h2><?php _e( 'No posts found', 'racine' ); ?></h2>
    <p><?php _e( 'There was nothing matching your criteria. You can try to widen your request.', 'racine' ); ?></p>
<?php endif;