<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="visually-hidden" for="s"><?php _e( 'Search for:', 'wp-root-theme' ); ?></label>
        <input type="search" value="<?php the_search_query(); ?>" name="s" id="s" class="searchfield" placeholder="<?php _e( 'Input search terms', 'wp-root-theme'); ?>" />
        <button type="submit" id="searchsubmit" class="searchsubmit" /><i class="dashicons dashicons-search"></i><span class="visually-hidden"><?php _e( 'Search' ); ?></span></button>
    </div>
</form>