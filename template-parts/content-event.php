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
	<header class="entry-header clearfix">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
		<?php endif; ?>
		
		<div class="event-date-box">
			<?php echo beacon_fbevent_date('box'); ?>
		</div>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>


	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php echo beacon_fbevent_link(); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php beacon_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
