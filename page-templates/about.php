<?php
/**
 * Template Name: About
 * The template for displaying information about coaching.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Beacon
 */

get_header(); ?>


<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

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

		// $count = $query->post_count;



		while ( $query->have_posts() ) : $query->the_post();

			// Count.
			$i = ! isset( $i ) ? 1 : $i;

			// Does this post count odd?
			$odd = $i % 2; // 1/0

			$title = get_the_title(); // This must be!, because this is the return - the_title would be echo
			$title_array = explode(' ', $title);
			$firstname = $title_array[0];

			if($odd) : ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('profile odd row expanded'); ?> data-equalizer data-equalize-on="medium" data-equalize-by-row="true">
				<?php

				$profile_image_class = 'profile-image medium-4 columns';
				$profile_bio_class = 'profile-image medium-8 columns';

			else: ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('profile even row expanded'); ?> data-equalizer data-equalize-on="medium" data-equalize-by-row="true">
			<?php

				$profile_image_class = 'profile-image medium-4 medium-push-8 columns';
				$profile_bio_class = 'profile-image medium-8 medium-pull-4 columns';

			endif;


			// If a feature image is set, get the id, so it can be injected as a css background property
			if ( has_post_thumbnail( $post->ID ) ) :
				$default_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
				$default_image = $default_image[0];

			endif; ?>


				<div class="<?php echo $profile_image_class; ?>" data-equalizer-watch style="background-image: url('<?php echo $default_image ?>')">
					&nbsp;
				</div>

				<div class="profile-bio <?php echo $profile_bio_class; ?>" data-equalizer-watch>
					<div class="row">
						<div class="large-9 large-centered columns">
						 	<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
						 	<?php the_content(); ?>
						</div>
				 	</div>
				</div>

			</article>

			<?php

			// Count up.
			$i++;

		endwhile;

		wp_reset_query();
		?>





	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>