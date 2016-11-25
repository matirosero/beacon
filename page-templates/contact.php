<?php
/**
 * Template Name: Contact
 * The template for displaying information about coaching.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Beacon
 */

get_header(); ?>


<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">


		<div class="row expanded">

			<div class="medium-8 medium-push-4 large-9 large-push-3 columns">

				<div class="row small-collapse medium-uncollapse">
					<div class="large-9 large-centered columns">


						<?php while ( have_posts() ) : the_post(); ?>

							<header class="entry-header">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- .entry-content -->

						<?php endwhile; // End of the loop. ?>

					</div>

				</div>

			</div>
			<aside id="contact-sidebar" class="medium-4 medium-pull-8 large-3 large-pull-9 columns">
				<h2>Otras formas de contactarnos</h2>



			</aside>
		</div>


	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>