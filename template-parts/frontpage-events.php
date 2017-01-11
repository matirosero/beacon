		<?php
			/**
			 * The WordPress Query class.
			 * @link http://codex.wordpress.org/Function_Reference/WP_Query
			 *
			 */
			$args = array (
			    'post_type' => 'facebook_events',
				'posts_per_page' => 1,
				'order' => 'ASC',
			);

		$fbe_query = new WP_Query( $args );

		if( $fbe_query->have_posts() ): 
		while ( $fbe_query->have_posts() ) : $fbe_query->the_post(); ?>

			<section id="home-events">
			<div class="page-section row" data-equalizer data-equalize-on="large" data-equalize-by-row="true">


				<?php if ( has_post_thumbnail() ) : ?>
					<div class="post-thumbnail large-7 columns">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
							<div class="event-date-box">
								<?php echo beacon_fbevent_date('box'); ?>
							</div>
						</a>
					</div>
				<?php endif; ?>

				<div class="large-5 columns">
					<?php
					the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); 

					excerpt('22'); ?>
				</div>

				<?php
				wp_reset_query();
				?>

			</div>
			</section>

		<?php endwhile;
		endif; ?>