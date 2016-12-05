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

		if ( $count == 2 ) : ?>

			<section id="home-profiles" class="page-section row expanded" data-equalizer data-equalize-on="large" data-equalize-by-row="true">

				<?php

				while ( $query->have_posts() ) : $query->the_post();

					// Count.
					$i = ! isset( $i ) ? 1 : $i;

					// Does this post count odd?
					// $odd = $i % 2; // 1/0

					$title = get_the_title(); // This must be!, because this is the return - the_title would be echo
					$title_array = explode(' ', $title);
					$firstname = $title_array[0];

					if ( $i == 1 ) : ?>

						<!-- <div class="home-profile-img medium-12 columns show-for-medium-only" >&nbsp;</div> -->

						<article id="post-<?php the_ID(); ?>" <?php post_class('large-4 columns'); ?> data-equalizer-watch>

					<?php else: ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('large-4 columns'); ?> data-equalizer-watch>

					<?php endif;
					?>



						<!-- <div class="eq-container" style="padding:1rem 0" data-equalizer-watch> -->
							<?php
							echo '<p class="lead">¡Hola! Yo soy '.$firstname.'</p>';
							the_excerpt();
							?>
						<!-- </div> -->



					<?php
					if ( $i == 1 ) : ?>
						</article>
						<div class="home-profile-img large-4 columns" data-equalizer-watch>
							&nbsp;
						</div>
					<?php else: ?>
						</article>
					<?php endif;


					// Count up.
					$i++;

				endwhile; 

				wp_reset_query();
				?>

			</section>

		<?php endif; ?>