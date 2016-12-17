<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Beacon
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
} ?>

<aside id="secondary" class="widget-area medium-4 medium-pull-8 large-3 large-pull-9 columns" role="complementary" data-equalizer-watch>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
