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
	if (is_singular( 'facebook_events' ) ) : ?>

		<section class="widget">
	 		<p class="event-date">
	 			<i class="icon-clock" aria-hidden="true"></i> <time><?php echo beacon_fbevent_date('long'); ?></time>
	 		</p>
	 		<p class="event-location">
	 			<i class="icon-location" aria-hidden="true"></i> <strong><?php echo fbe_field('venue_name'); ?></strong>
	 			
	 			<span class="event-address"><?php echo fbe_field('location'); ?></span>
	 		</p>
	 		<?php echo beacon_fbevent_link(); ?>
	 	</section>
	 	<section class="widget event-form">
	 		<h3 class="widget-title">Más información</h3>
			<?php echo do_shortcode('[contact-form-7 id="116" title="Información sobre evento FB"]' ); ?>
		</section>
	<?php else:

		if ( ( is_home() && !is_front_page() ) || is_single() ) : ?>
			<header>
				<h2 class="page-title">Blog</h2>
			</header>
		<?php
		endif; 

		dynamic_sidebar( 'sidebar-1' ); 
	endif; ?>
</aside><!-- #secondary -->
