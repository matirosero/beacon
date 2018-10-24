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
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php beacon_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'beacon' ),
				'after'  => '</div>',
			) );
		?>

		<?php if ( function_exists( 'sharing_display' ) ) {
		    sharing_display( '', true );
		} elseif ( shortcode_exists( 'Sassy_Social_Share' ) ) {

    			echo do_shortcode( '[Sassy_Social_Share title="Compartir"]' );

		} ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php beacon_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
