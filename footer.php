<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Beacon
 */
?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="column row">

					<p class="footer-logo text-center">
		              <a href="<?php esc_attr_e( home_url( '/' ) ); ?>" rel="home">
		                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/svg/logo-beacon-footer.svg" alt="<?php bloginfo( 'name' ); ?>" />
		              </a>
		            </p>

					<p class="text-center">
						&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo( 'name' ); ?>, todos los derechos reservados
						<br />
						Desarrollo web: <a href="http://matilderosero.com">Matilde Rosero</a> | Mercadeo: <a href="mailto:michelle.morera@gmail.com">Michelle Morera</a>
					</p>

				</div><!-- .column.row -->

			</footer><!-- #colophon -->

		</div> <!-- .off-canvas-content -->
	</div><!-- .off-canvas-wrapper-inner -->
</div><!-- .off-canvas-wrapper -->

<?php wp_footer(); ?>
</body>
</html>
