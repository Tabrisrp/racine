<?php get_header(); ?>
<?php get_template_part( 'part', 'breadcrumbs' ); ?>
<div class="page-content">
<?php while (have_posts()) : the_post(); ?>
	    <article <?php post_class(); ?>>
	        <?php the_post_thumbnail(); ?>
	    	<h1 class="entry-title"><?php the_title(); ?></h1>
	    	<div class="entry-content">
	    	    <?php the_content(); ?>
	    	</div>
	    	<?php wp_link_pages( array(
				'before' => '<div>' . __( 'Pages:', 'racine' ),
				'after'  => '</div>',
			) ); ?>   
	    </article>
	<?php endwhile; ?>
</div>
<?php get_footer();