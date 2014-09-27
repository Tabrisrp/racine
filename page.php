<?php get_header(); ?>
<?php get_template_part( 'part', 'breadcrumbs' ); ?>
<div class="content">
<?php if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	    <article <?php post_class( 'line' ); ?>>
	        <?php the_post_thumbnail(); ?>
	    	<h1 class="entry-title"><?php the_title(); ?></h1>
	    	<?php the_content(); ?>
	    	<?php
			wp_link_pages( array(
				'before' => '<div>' . __( 'Pages:', 'racine' ),
				'after'  => '</div>',
			) );
		?>   
	    </article>
	<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer();