<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
	<input type="search" class="search-field" placeholder="search" value="<?php get_search_query(); ?>" name="s" />
	<button class="search-submit" type="submit"><?php echo hub_get_svg( array( 'icon' => 'search' )); ?><span class="screen-reader-text">search</span></button>
</form><!-- .search-form -->