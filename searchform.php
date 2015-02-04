<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'racine' ); ?></label>
    <input type="search" value="<?php echo trim( get_search_query() ); ?>" name="s" id="s" class="searchfield" placeholder="<?php esc_attr_e( 'Input search terms', 'racine'); ?>" />
    <button type="submit" id="searchsubmit" class="searchsubmit"><i class="dashicons dashicons-search"></i><span class="screen-reader-text"><?php _e( 'Search', 'racine' ); ?></span></button>
</form>