<?php get_header(); ?>
<?php get_template_part( 'part', 'breadcrumbs' ); ?>
<div class="content">
<?php if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	    <article <?php post_class(); ?>>
	        <?php the_post_thumbnail(); ?>
	    	<h1 class="entry-title"><?php the_title(); ?></h1>
	    	<div class="line">
	    	    <?php the_content(); ?>
	    	</div>
	    	<?php
			wp_link_pages( array(
				'before' => '<div>' . __( 'Pages:', 'racine' ),
				'after'  => '</div>',
			) );
		?>    
	    	<aside>
                <p><?php _e( 'Posted by', 'racine' ); ?> <span class="vcard author"><span class="fn"><?php the_author(); ?></span></span> <?php _e( 'on', 'racine' ); ?> <span class="updated"><?php echo get_the_date(); ?></span></p>
                <p><?php _e( 'Categories:', 'racine'); ?> <?php the_category( ',' ); ?></p>
                <p><?php the_tags( __( 'Tags:', 'racine') , ', ' ); ?></p>
	    	</aside>
	    	<?php comments_template() ?>
	    </article>
	<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer();