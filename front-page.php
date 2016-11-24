<?php
/**
 * The front-page.php template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Beacon
 */

get_header(); ?>

<div class="row column expanded small-collapse">

	<header id="home-header">
		Home header
	</header>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php

			// if ( have_posts() ) :

			// 	while ( have_posts() ) : the_post(); ?>

					<section id="home-how-help">
						<h2 class="section-title">Como le podemos ayudar</h2>
						<?php
						$intro  = get_post_meta( get_the_ID(), 'frontpage_intro', true );
						echo $intro;
						?>
					</section>

					<?php /*
					<section id="home-test">
						test
					</section>
					*/ ?>

					<section id="home-services">
						<h2 class="section-title">Servicios</h2>
						<?php //the_content(); ?>
						<?php
						$services  = get_post_meta( get_the_ID(), 'frontpage_services', true );
						echo $services;
						?>
					</section>

					<section id="home-profiles">
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
								'order'               => 'ASC',
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

						if ( $count == 2 ) :
							while ( $query->have_posts() ) : $query->the_post();

								$title = get_the_title(); // This must be!, because this is the return - the_title would be echo
								$title_array = explode(' ', $title);
								$firstname = $title_array[0];

								echo '¡Hola! Yo soy '.$firstname;
								the_excerpt();

							endwhile;
						endif;
						?>
					</section>

				<?php
				// endwhile;

			// else :

			// 	get_template_part( 'template-parts/content', 'none' );

			// endif; ?>

		</main>

	</div>


</div>

<?php
get_footer();
