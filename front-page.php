<?php
/**
 * The front-page.php template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Beacon
 */

get_header(); ?>

<header id="home-header">
	Home header
</header>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

		<?php
		// if ( have_posts() ) :
		// 	while ( have_posts() ) : the_post(); ?>

		<section id="home-how-help" class="page-section">
			<div class="row">
				<div class="medium-4 columns">
					<h2 class="section-title">Como le podemos ayudar</h2>
				</div>
				<div class="medium-8 columns">
					<?php
					$intro  = get_post_meta( get_the_ID(), 'frontpage_intro', true );
					echo $intro;
					?>
				</div>
			</div>
		</section>

		<?php /*
		<section id="home-test">
			test
		</section>
		*/ ?>

		<section id="home-services" class="page-section">
			<div class="row">
				<div class="medium-4 columns">
					<h2 class="section-title">Servicios</h2>
				</div>
				<div class="medium-8 columns">
					<?php //the_content(); ?>
					<?php
					$services  = get_post_meta( get_the_ID(), 'frontpage_services', true );
					echo $services;
					?>
				</div>
			</div>
		</section>

		<?php
			/**
			 * The WordPress Query class.
			 * @link http://codex.wordpress.org/Function_Reference/WP_Query
			 *
			 */
			$args = array(

				//Type & Status Parameters
				'post_type'   => 'profile',
				// 'post_status' => 'publish',

				//Order & Orderby Parameters
				'order'               => 'DESC',
				// 'orderby'             => 'date',

				//Pagination Parameters
				'posts_per_page'         => -1,

				//Parameters relating to caching
				'no_found_rows'          => false,
				'cache_results'          => true,
				'update_post_term_cache' => true,
				'update_post_meta_cache' => true,

			);

		$query = new WP_Query( $args );

		$count = $query->post_count;

		if ( $count == 2 ) : ?>

			<section id="home-profiles" class="page-section row column expanded">

				<?php

				while ( $query->have_posts() ) : $query->the_post();

					// Count.
					$i = ! isset( $i ) ? 1 : $i;

					// Does this post count odd?
					$odd = $i % 2; // 1/0

					$title = get_the_title(); // This must be!, because this is the return - the_title would be echo
					$title_array = explode(' ', $title);
					$firstname = $title_array[0];

					?>

					<div class="medium-6 columns">

						<?php

						if ($odd) :
							echo 'odd';
						else:
							echo 'even';
						endif;


						echo '¡Hola! Yo soy '.$firstname;
						the_excerpt();
						?>

					</div>

					<?php

					// Count up.
					$i++;

				endwhile; ?>

			</section>

		<?php endif; ?>


			<?php
			// endwhile;
		// else :
		// 	get_template_part( 'template-parts/content', 'none' );
		// endif; ?>

	</main>

</div>




<?php
get_footer();
