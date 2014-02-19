<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="visually-hidden" for="s"><?php _e( 'Search for:' ); ?></label>
        <input type="search" value="<?php the_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="<?php _e( 'Search' ); ?>" />
    </div>
</form>