<?php get_header() ?>
<main role="main" id="main">
    <div class="content">
    <?php
    if (have_posts()) :
    	while (have_posts()) : the_post(); ?>
    	    <article <?php post_class() ?>>
    	        <?php the_post_thumbnail() ?>
    	    	<h1><?php the_title(); ?></h1>
    	    	<?php the_content(); ?>
    	    	<?php wp_link_pages() ?>    
    	    </article>
    	<?php endwhile; ?>
    <?php endif; ?>
    </div>
</main>
<?php get_footer() ?>