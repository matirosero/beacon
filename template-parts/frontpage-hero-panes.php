<header id="home-header">
	<div id="pane-target" class="pane">
		<ul id="hero-panes">

			<?php

			$panes = get_post_meta( get_the_ID(), 'frontpage_header', true );
			// var_dump($panes);

			$count = count($panes);


			foreach ( (array) $panes as $key => $pane ) {

			    if ( isset( $pane['header_description'] ) ) {

			        $i = ! isset( $i ) ? 1 : $i;

			        if ($i == 1 ) {
			        	$pane_class = 'first pane';
			        } else {
			        	$pane_class = 'pane';
			        }

			        $logo = get_stylesheet_directory_uri().'/assets/dist/svg/logo-beacon-hero-shadow.svg';
			        $cta_link = get_page_link(10).'#appointment-form';

			        echo '<li class="'.$pane_class.'">';

				        echo '<div class="pane-img">&nbsp</div>';

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
				        if ($i == $count ) {
				        	echo '<a href="" class="first-pane">Start</a>';
				        }

			        echo '</li>';



			        //Advance counter
			        $i++;
			    }
			}
			?>

		</ul>
	</div>
</header>