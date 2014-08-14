<?php get_header() ?>
    <div class="row">
        <div class="col w66 content">
        	<?php get_template_part( 'loop', 'posts' ) ?>
        </div>
        <?php get_sidebar() ?>
    </div>
<?php get_footer() ?>