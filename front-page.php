<?php
/**
 * The front-page.php template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Beacon
 */

get_header(); ?>

<div class="row">

	<div class="medium-8 medium-centered columns">

		<div id="primary" class="content-area">

			<main id="main" class="site-main" role="main">
			<?php

			$intro  = get_post_meta( get_the_ID(), 'frontpage_intro', true );
			echo $intro;

			if ( have_posts() ) :

				while ( have_posts() ) :

					the_post();

					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main>

		</div>

	</div>

</div>

<?php
get_footer();
