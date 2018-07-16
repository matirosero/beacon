<?php
/**
 * The front-page.php template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Beacon
 */

get_header(); ?>

<?php //get_template_part( 'template-parts/frontpage', 'hero-v1' ); ?>
<?php //get_template_part( 'template-parts/frontpage', 'hero-panes' ); ?>
<?php get_template_part( 'template-parts/frontpage', 'hero-orbit' ); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

		<?php
		// if ( have_posts() ) :
		// 	while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/frontpage', 'events' ); ?>


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




		<section id="home-quiz" class="page-section link-quiz">
			<div class="row column">
				<h2 class="section-title">¿Tiene dudas sobre su próximo paso?</h2>
				<p><a class="button" href="<?php echo get_page_link(93); ?>#coaching-steps"><strong>Test gratuito:</strong> Descubra más sobre usted</a></p>
			</div>
		</section>


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

		<?php get_template_part( 'template-parts/frontpage', 'profiles' ); ?>

	</main>

<?php
get_footer();
