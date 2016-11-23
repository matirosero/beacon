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

			if ( have_posts() ) :

				while ( have_posts() ) : the_post(); ?>

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
						<?php the_content(); ?>
					</section>

					<section id="home-profiles">
						Perfiles
					</section>

				<?php
				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main>

	</div>


</div>

<?php
get_footer();
