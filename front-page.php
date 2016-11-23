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



				<section id="home-how-help">
					Como le podemos ayudar
				</section>

				<section id="home-test">
					test
				</section>

				<section id="home-services">
					Servicios
				</section>

				<section id="home-profiless">
					Perfiles
				</section>
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

<?php
get_footer();
