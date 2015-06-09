<?php get_header(); ?>
<div class="page-content">
<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <?php the_post_thumbnail(); ?>
    	<h2 class="entry-title"><?php the_title(); ?></h2>
    	<div class="entry-content">
    	    <?php the_content(); ?>
    	</div>
    </article>
<?php endwhile; ?>
</div>
<?php get_footer();