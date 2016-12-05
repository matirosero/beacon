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
	<div id="home-header-text" class="row expanded small-collapse">
		<div class="medium-7 medium-offset-1 large-6 xxlarge-5 xxlarge-offset-2 end columns">
			<h2 class="home-hero-title">¿Quiere hacer un cambio en su vida pero necesita el impulso para lograrlo?</h2>
			<p class="home-hero-logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/svg/logo-beacon-hero-shadow.svg" alt="<?php bloginfo( 'name' ); ?>" />
			</p>
			<p class="text-center home-header-cta"><a class="button" href="<?php echo get_page_link(10); ?>#appointment-form">Agende aquí su SESIÓN GRATUITA</a></p>
		</div>
	</div>
</header>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

		<?php
		// if ( have_posts() ) :
		// 	while ( have_posts() ) : the_post(); ?>

		<section id="home-how-help" class="page-section">
			<div class="row">
				<div class="medium-4 columns">
					<h2 class="section-title">¿Cómo le podemos ayudar?</h2>
					<p class="text-center"><a class="button" href="<?php echo get_page_link(10); ?>">Beneficios del coaching</a></p>
				</div>
				<div class="medium-8 columns entry-content">
					<?php
					echo wpautop( get_post_meta( get_the_ID(), 'frontpage_intro', true ) );
					?>
				</div>
			</div>
		</section>

		<?php get_template_part( 'template-parts/frontpage', 'profiles' ); ?>

		<?php /*
		<section id="home-test">
			test
		</section>
		*/ ?>

		<section id="home-services" class="page-section">
			<div class="row">
				<div class="medium-4 columns">
					<h2 class="section-title">Servicios</h2>
					<p class="text-center"><a class="button" href="<?php echo get_page_link(10); ?>#coaching-steps">Conozca los pasos del proceso</a></p>
				</div>
				<div class="medium-8 columns entry-content">
					<?php //the_content(); ?>
					<?php
					echo wpautop( get_post_meta( get_the_ID(), 'frontpage_services', true ) );
					?>
				</div>
			</div>
		</section>




			<?php
			// endwhile;
		// else :
		// 	get_template_part( 'template-parts/content', 'none' );
		// endif; ?>

	</main>

</div>




<?php
get_footer();
