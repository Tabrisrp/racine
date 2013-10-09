<?php get_header() ?>
<main role="main" id="main">
    <div class="content">
    	<?php get_template_part( 'loop', 'posts' ) ?>
    </div>
<?php get_sidebar() ?>
</main>
<?php get_footer() ?>