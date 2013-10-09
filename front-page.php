<?php get_header() ?>
<main role="main" id="main">
    <div class="content">
    <?php
    if (have_posts()) :
    	while (have_posts()) : the_post(); ?>
    	    <article <?php post_class() ?>>
    	        <?php the_post_thumbnail() ?>
    	    	<h2><?php the_title(); ?></h2>
    	    	<?php the_content(); ?>
    	    </article>
    	<?php endwhile; ?>
    <?php endif; ?>
    </div>
</main>
<?php get_footer() ?>