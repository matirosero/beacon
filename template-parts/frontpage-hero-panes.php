<header id="home-header" class="clearfix">
	<div id="pane-target">
		<ul id="hero-panes">

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
			        	$pane_class = 'first pane';
			        	$logo .= 'logo-beacon-hero-shadow.svg';
			        } else {
			        	$pane_class = 'pane';
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

						echo '<div class="pane-img" role="banner" style="background-image: url('.$img.')">&nbsp;</div>';
					else:

						//default image (xxxl) is the fallback
						$mq = '#pane-img-'.$i.' {
									background-image: url('.$img.')
							}';

						if ( !empty( $img_xlarge ) ) :
							$mq .= '@media only screen and (max-width : 1440px) {
									#pane-img-'.$i.' {
										background-image: url('.$img_xlarge.')
									}
								}';
						endif;

						if ( !empty( $img_medium ) ) :
							$mq .= '@media only screen and (max-width : 1024px) {
								#pane-img-'.$i.' {
									background-image: url('.$img_medium.')
								}
							}';
						endif;

						if ( !empty( $img_small ) ) :
							$mq .= '@media only screen and (max-width : 700px) {
								#pane-img-'.$i.' {
									background-image: url('.$img_small.')
								}
							}';
						endif;

						echo '<div id="pane-img-'.$i.'" class="pane-img" role="banner">&nbsp;</div>
								<style scoped>'
									.$mq.
								'</style>
							<div>';
					endif;


				        // echo '<div class="pane-img">&nbsp;</div>';

				        echo '<div class="pane-content">
				        	<h2 class="pane-title">'.$pane['header_description'].'</h2>
								<p class="pane-logo">
									<img src="'.$logo.'" alt="Beacon Transition &amp; Life Coaching" />
								</p>
								<p class="text-center home-header-cta">
									<a class="button" href="'.$cta_link.'">Agende sesión gratuita</a>
								</p>
							</div>';

						if ($i != 1 ) {
				        	echo '<a href="" class="previous-pane"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>';
				        }
				        if ($i != $count ) {
				        	echo '<a href="" class="next-pane"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>';
				        }
				        // if ($i == $count ) {
				        // 	echo '<a href="" class="first-pane">Start</a>';
				        // }

			        echo '</li>';



			        //Advance counter
			        $i++;
			    }
			}
			?>

		</ul>
	</div>
</header>