<?php get_header(); ?>
<?php if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	    <article <?php post_class(); ?>>
	        <?php the_post_thumbnail(); ?>
	    	<h2><?php the_title(); ?></h2>
	    	<div class="content">
	    	    <?php the_content(); ?>
	    	</div>
	    </article>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer();