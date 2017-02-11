<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Beacon
 */

get_header(); ?>

<div class="row expanded" data-equalizer data-equalize-on="medium">

	<div id="primary" class="equal content-area medium-8 medium-push-4 large-9 large-push-3 columns">

		<main id="main" class="site-main row small-collapse medium-uncollapse" role="main" data-equalizer-watch>
			<div id="" class="large-9 large-centered columns">

				<?php
				while ( have_posts() ) :

					the_post();

					get_template_part( 'template-parts/content', 'single' );

					the_post_navigation();

					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	

	<?php get_sidebar(); ?>

</div>

<?php
get_footer();
