<?php
/**
 * Template Name: Coaching
 * The template for displaying information about coaching.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Beacon
 */

get_header(); ?>

<?php get_template_part( 'template-parts/content', 'hero-coaching' ); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

		<section id="coaching-steps" class="page-section">

			<div class="row">
				<div class="small-12 small-centered columns">
					<h2 class="section-title"><strong>3 pasos</strong> para lograr grandes resultados</h2>

					<div class="steps-wrap">
						<ul class="steps-bar">

							<?php
							//http://codepen.io/whqet/pen/EJgwb/

							$steps = get_post_meta( get_the_ID(), 'coaching_steps', true );

							foreach ( (array) $steps as $key => $step ) {

							    if ( isset( $step['step_description'] ) ) {

							        $i = ! isset( $i ) ? 1 : $i;

							        if ($i == 1 ) {
							        	$li_class = 'first';
							        } else {
							        	$li_class = '';
							        }

							        echo '<li class="'.$li_class.'">'.wpautop( $step['step_description'] ).'</li>';

							        $i++;
							    }
							}
							?>
						</ul>
						
					</div>
				</div>
			</div>
		</section>

		<section id="appointment-form" class="page-section">
			<div class="row">
				<div class="medium-11 large-9 small-centered columns">
					<a name="sesion-gratuita"></a>
					<h2 class="section-title">¡Anímese a dar el primer paso!</h2>
					<?php echo do_shortcode( '[contact-form-7 id="44" title="Solicitud de llamada gratuita"]' ); ?>
				</div>
			</div>
		</section>


	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>