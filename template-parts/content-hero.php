<?php
// If a feature image is set, get the id, so it can be injected as a css background property
if ( has_post_thumbnail( $post->ID ) ) :
	$default_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
	$default_image = $default_image[0];

	// $small_image = get_field('thumbnail_small');
	// $medium_image = get_field('thumbnail_medium');
	// $large_image = get_field('thumbnail_large');
	// $xlarge_image = get_field('thumbnail_xlarge');

	// if ( empty( $xlarge_image ) && empty( $large_image ) && empty( $medium_image ) && empty( $small_image ) ) : ?>

		<header id="featured-hero" class="" role="banner" style="background-image: url('<?php echo $default_image ?>')">

	<?php 
	/*
	else:

		//default image (xxxl) is the fallback
		$mq = '#featured-hero {
						background-image: url('.$default_image.')
				}';

		if ( !empty( $xlarge_image ) ) :
			$mq .= '@media only screen and (max-width : 1440px) {
					#featured-hero {
						background-image: url('.$xlarge_image.')
					}
				}';
		endif;

		if ( !empty( $large_image ) ) :
			$mq .= '@media only screen and (max-width : 1200px) {
				#featured-hero {
					background-image: url('.$large_image.')
				}
			}';
		endif;

		if ( !empty( $medium_image ) ) :
			$mq .= '@media only screen and (max-width : 1024px) {
				#featured-hero {
					background-image: url('.$medium_image.')
				}
			}';
		endif;

		if ( !empty( $small_image ) ) :
			$mq .= '@media only screen and (max-width : 639px) {
				#featured-hero {
					background-image: url('.$small_image.')
				}
			}';
		endif;
		?>

		<header id="featured-hero" role="banner">
			<style scoped>
				<?php echo $mq; ?>
			</style>
	<?php 
	endif;
	*/
	?>

	<!-- <header id="featured-hero" role="banner" style="background-image: url('<?php echo $default_image ?>')"> -->

		<?php if ( is_page_template( 'page-templates/coaching.php' ) ) { ?>
			<div class="row">
				<div class="medium-7 medium-offset-5 columns">
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
		<?php } ?>


	</header><!-- #featured-hero -->

<?php endif;