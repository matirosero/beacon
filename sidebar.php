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
	<?php 
	if ( is_home() && !is_front_page() ) : ?>
		<header>
			<h2 class="page-title"><?php single_post_title(); ?></h2>
		</header>
	<?php
	endif; ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
