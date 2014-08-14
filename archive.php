<?php get_header() ?>
    <div class="term-content">
        <?php if ( is_category() ) : ?>
            <h1><?php single_cat_title() ?></h1>
        <?php elseif ( is_tag() ) : ?>
            <h1><?php single_tag_title() ?></h1>
        <?php elseif ( is_tax() ) : ?>
            <h1><?php single_term_title() ?></h1>
        <?php else : ?>
            <h1><?php single_month_title( ' ') ?></h1>
        <?php endif;
        if ( ( is_category() || is_tag() || is_tax() ) && !get_query_var( 'paged' ) ) :
            echo wpautop( term_description() );
        endif ?>
    </div>
    <div class="row">
    <div class="col w66 content">
        <?php get_template_part( 'loop', 'posts' ); ?>
    </div>
    <?php get_sidebar() ?>
    </div>
<?php get_footer() ?>