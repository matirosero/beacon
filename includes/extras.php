<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Beacon
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function beacon_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'beacon_body_classes' );


/**
 * Make YouTube and Vimeo oembed elements responsive. Add Foundation's .flex-video
 * class wrapper around any oembeds
 */
function beacon_oembed_flex_wrapper( $html, $url, $attr, $post_ID ) {
	if ( strpos( $url, 'youtube' ) || strpos( $url, 'youtu.be' ) || strpos( $url, 'vimeo' ) ) {
		return '<div class="flex-video widescreen">' . $html . '</div>';
	}

	return $html;
}
add_filter( 'embed_oembed_html', 'beacon_oembed_flex_wrapper', 10, 4 );


/**
 * This function adds social media icons/items to the top_nav menu area as the last item.
 */
add_filter( 'wp_nav_menu_items', 'beacon_wp_nav_menu_items', 10, 2 );

function beacon_wp_nav_menu_items( $items, $args, $ajax = false ) {

	// Top Navigation Area Only
	if ( ( isset( $ajax ) && $ajax ) || ( property_exists( $args, 'theme_location' ) && ( $args->theme_location === 'main-nav' || $args->theme_location === 'mobile-nav' ) ) ) {

		$social_sites = my_customizer_social_media_array();

		/* any inputs that aren't empty are stored in $active_sites array */
	    foreach($social_sites as $social_site) {
	        if( strlen( get_theme_mod( $social_site ) ) > 0 ) {
	            $active_sites[] = $social_site;
	        }
	    }

	    /* for each active social site, add it as a list item */
	    if ( ! empty( $active_sites ) ) {

	        // echo "<ul class='social-media-icons'>";

	        foreach ( $active_sites as $active_site ) {

	            /* setup the class */
		        $class = 'menu-item menu-item-social menu-item-' . $active_site;

	            if ( $active_site == 'email' ) {
	                $items .= '<li class="'.esc_attr( $class ).'">
	                    <a target="_blank" href="mailto:' . antispambot( is_email( get_theme_mod( $active_site ) ) ) . '">
	                        <i class="icon-envelope"></i> <span>'.ucfirst($active_site).'</span></a>
	                </li>';
	            } else {
	                $items .= '<li class="'.esc_attr( $class ).'">
	                    <a target="_blank" href="'.esc_url( get_theme_mod( $active_site) ).'"> <i class="icon-'.$active_site.'"></i> <span>'.ucfirst($active_site).'</span></a>
	                </li>';
	            }
	        }
	        // echo "</ul>";
	    }
	}

	return $items;
}

/**
 * Modify Excerpt: change [...] tp Read More 
 */
function new_excerpt_more( $more ) {
	return '... </p><p><a class="button read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'beacon') . ' <i class="icon-right-dir" aria-hidden="true"></i></a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// Move Yoast Meta Box to bottom
function yoasttobottom() {
	return 'low';
}

add_filter( 'wpseo_metabox_prio', 'yoasttobottom');