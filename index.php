<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Beacon
 */

get_header(); ?>



<div class="row expanded" data-equalizer data-equalize-on="medium">

	<div id="primary" class="content-area medium-8 medium-push-4 large-9 large-push-3 columns">

		<main id="main" class="site-main row small-collapse medium-uncollapse" role="main" data-equalizer-watch>
			<div id="" class="large-9 large-centered columns">

				<?php
				if ( have_posts() ) :

					if ( is_home() && !is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php
					endif;

					while ( have_posts() ) :

						the_post();

						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	

	<?php get_sidebar(); ?>

</div>




<?php
get_footer();
