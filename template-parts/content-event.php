<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Beacon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
		<?php endif; ?>
		
		<div class="event-date-box">
			<?php echo beacon_fbevent_date('box'); ?>
		</div>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>


	 		<p class="event-date">
	 			<i class="fa fa-clock-o fa-fw" aria-hidden="true"></i> <time><?php echo beacon_fbevent_date('long'); ?></time>
	 		</p>
	 		<p class="event-location">
	 			<i class="fa fa-map-marker fa-fw" aria-hidden="true"></i> <strong><?php echo fbe_field('venue_name'); ?></strong>
	 			
	 			<span class="event-address"><?php echo fbe_field('location'); ?></span>
	 		</p>




	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php echo beacon_fbevent_link(); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php beacon_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
