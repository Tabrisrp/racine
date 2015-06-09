<?php get_header(); ?>
<?php get_template_part( 'part', 'breadcrumbs' ); ?> 
<div class="page-content">
	<?php get_template_part( 'loop', 'posts' ); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer();