<header id="home-header" class="clearfix">
	<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
		<ul class="orbit-container">
		    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class="icon-left-dir" aria-hidden="true"></i></button>
		    <button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class="icon-right-dir" aria-hidden="true"></i></button>
			<?php

			$panes = get_post_meta( get_the_ID(), 'frontpage_header', true );
			// var_dump($panes);

			$count = count($panes);


			foreach ( (array) $panes as $key => $pane ) {

			    if ( isset( $pane['header_description'] ) ) {

			        $i = ! isset( $i ) ? 1 : $i;

			        $cta_link = get_page_link(10).'#sesion-gratuita';
			        $logo = get_stylesheet_directory_uri().'/assets/dist/svg/';

			        if ($i == 1 ) {
			        	$pane_class = 'first orbit-slide is-active';
			        	$logo .= 'logo-beacon-hero-shadow.svg';
			        } else {
			        	$pane_class = 'orbit-slide';
			        	$logo .= 'logo-beacon-hero-over-orange.svg';
			        }

			        $img = $pane['header_image'];
			        // $img_id = $pane['header_image_id'];

			        $img_xlarge = $pane['header_image_xlarge'];
			        // $img_xlarge_id = $pane['header_image_xlarge_id'];

			        $img_medium = $pane['header_image_medium'];
			        // $img_medium_id = $pane['header_image_medium_id'];

			        $img_small = $pane['header_image_small'];
			        // $img_small_id = $pane['header_image_small_id'];

			        echo '<li class="'.$pane_class.'">';

				    if ( empty( $img_xlarge ) && empty( $img_medium ) && empty( $img_small ) ) : 

						echo '<div class="slide-img" role="banner" style="background-image: url('.$img.')">&nbsp;</div>';
					else:

						//default image (xxxl) is the fallback
						$mq = '#slide-img-'.$i.' {
									background-image: url('.$img.')
							}';

						if ( !empty( $img_xlarge ) ) :
							$mq .= '@media only screen and (max-width : 1440px) {
									#slide-img-'.$i.' {
										background-image: url('.$img_xlarge.')
									}
								}';
						endif;

						if ( !empty( $img_medium ) ) :
							$mq .= '@media only screen and (max-width : 1024px) {
								#slide-img-'.$i.' {
									background-image: url('.$img_medium.')
								}
							}';
						endif;

						if ( !empty( $img_small ) ) :
							$mq .= '@media only screen and (max-width : 700px) {
								#slide-img-'.$i.' {
									background-image: url('.$img_small.')
								}
							}';
						endif;

						echo '<div id="slide-img-'.$i.'" class="slide-img" role="banner">&nbsp;</div>
								<style scoped>'
									.$mq.
								'</style>
							<div>';
					endif;


				        // echo '<div class="slide-img">&nbsp;</div>';

				        echo '<div class="slide-content">
				        	<p class="slide-title">'.$pane['header_description'].'</p>
								<p class="slide-logo">
									<img src="'.$logo.'" alt="Beacon Transition &amp; Life Coaching" />
								</p>
								<p class="text-center home-header-cta">
									<a class="button" href="'.$cta_link.'">Agende sesión gratuita</a>
								</p>
							</div>';

			        echo '</li>';

			        //Advance counter
			        $i++;
			    }
			}
			?>

		</ul>
	</div><!-- /.orbit -->
</header>