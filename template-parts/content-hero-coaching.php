<?php
// If a feature image is set, get the id, so it can be injected as a css background property
if ( has_post_thumbnail( $post->ID ) ) :
	$default_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
	$default_image = $default_image[0];

	?>

	<header id="featured-hero" class="" role="banner" style="background-image: url('<?php echo $default_image ?>')">

		<?php if ( is_page_template( 'page-templates/coaching.php' ) ) { ?>
			<div class="row">
				<div class="medium-8 medium-offset-4 large-7 large-offset-5 columns">
					<div class="hero-container">
						<h1 class="entry-title">
							Beneficios del Coaching
						</h1>
						<ul class="coaching-benefits">
							<li>Crecer en la conciencia de sí mismo</li>
							<li>Identificar sus valores y su visión del futuro</li>
							<li>Desarrollar objetivos y los planes de acción para alcanzarlos</li>
							<li>Sentirse más confiado y optimista</li>
							<li>Identificar los obstáculos y cómo vencerlos</li>
							<li>Claridad para tomar mejores decisiones</li>
							<li>Avanzar hacia el cumplimiento de las metas</li>
							<li>Generar una transformación que le permita obtener resultados</li>
							<li>Devolverle a la vida balance, energía, enfoque, pasión y creatividad</li>
						</ul>
					</div>
				</div>
			</div>
		<?php } ?>


	</header><!-- #featured-hero -->

<?php endif;