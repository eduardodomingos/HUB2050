<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package HUB_2050
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function hub_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'hub_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function hub_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'hub_pingback_header' );

/**
 * Filter nav menu items to add a custom field.
 */
function hub_nav_menu_objects($item_output, $item) {
    // if there's no content, just return the <a> directly
    if (! get_field('nav_menu_item_description', $item)) {
        return $item_output;
    }

	return  '<span class="menu-item__description">' .get_field('nav_menu_item_description', $item). '</span>' . $item_output;
}
add_filter('walker_nav_menu_start_el', 'hub_nav_menu_objects', 15, 2);

/**
 * Customize ellipsis at end of excerpts.
 */
function hub_excerpt_more( $more ) {
	return "…";
}
add_filter( 'excerpt_more', 'hub_excerpt_more' );

/**
 * Filter the except length to 20 words.
 */
function hub_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'hub_excerpt_length', 999 );
