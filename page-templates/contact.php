<?php
/**
 * Template Name: Contact
 * The template for displaying information about coaching.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Beacon
 */

get_header(); ?>


<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">


		<div class="row expanded" data-equalizer data-equalize-on="medium">

			<div class="medium-8 medium-push-4 large-9 large-push-3 columns">

				<div id="contact-form" class="row small-collapse medium-uncollapse" data-equalizer-watch>
					<div class="large-9 large-centered columns">


						<?php while ( have_posts() ) : the_post(); ?>

							<header class="entry-header">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- .entry-content -->

						<?php endwhile; // End of the loop. ?>

					</div>

				</div>

			</div>
			<aside id="contact-sidebar" class="medium-4 medium-pull-8 large-3 large-pull-9 columns" data-equalizer-watch>
				<h2>Otras formas de contactarnos</h2>

				<dl class="contact-alternate">

					<?php
					//http://codepen.io/whqet/pen/EJgwb/

					$emails = get_post_meta( get_the_ID(), 'contact_emails', true );

					if (!empty($emails)) {

						echo '<dt>Emails</dt>';

						echo '<dd><ul>';

						foreach ( (array) $emails as $key => $email ) {

						    if ( isset( $email['email'] ) ) {
						    	echo '<li><a href="mailto:'.$email['email'].'">'.$email['email'].'</a>';
						    }
						}

						echo '</dd></ul>';
					}

					$phones = get_post_meta( get_the_ID(), 'contact_phones', true );

					if (!empty($phones)) {

						echo '<dt>Teléfonos</dt>';

						echo '<dd><ul>';

						foreach ( (array) $phones as $key => $phone ) {

						    if ( isset( $phone['phone'] ) ) {
						    	echo '<li><a href="tel:'.$phone['phone'].'">'.$phone['phone'].'</a>';
						    }
						}

						echo '</dd></ul>';
					}

					$skypes = get_post_meta( get_the_ID(), 'contact_skype', true );

					if (!empty($skypes)) {

						echo '<dt>Skype</dt>';

						echo '<dd><ul>';

						foreach ( (array) $skypes as $key => $skype ) {

						    if ( isset( $skype['skype'] ) ) {
						    	echo '<li><a href="skype:'.$skype['skype'].'?call">'.$skype['skype'].'</a>';
						    }
						}

						echo '</dd></ul>';
					}
					?>
				</dl>


			</aside>
		</div>


	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>