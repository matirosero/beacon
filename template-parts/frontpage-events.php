		<?php
			/**
			 * The WordPress Query class.
			 * @link http://codex.wordpress.org/Function_Reference/WP_Query
			 *
			 */
			$args = array (
			    'post_type' => 'facebook_events',
				'posts_per_page' => -1,
				'order' => 'ASC',
			);

		$fbe_query = new WP_Query( $args );

		$count = $fbe_query->post_count;

		if ( $count >= 1 ) : ?>

			<section id="home-events" class="page-section row expanded" data-equalizer data-equalize-on="large" data-equalize-by-row="true">

				<?php

				while ( $fbe_query->have_posts() ) : $fbe_query->the_post();




					the_content( );

				endwhile; 

				wp_reset_query();
				?>

			</section>

		<?php endif; ?>