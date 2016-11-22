<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Beacon
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<!-- Force IE to use the latest rendering engine available -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php echo file_get_contents( get_template_directory() . '/assets/dist/sprite/sprite.svg' ); ?>


<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

		<?php 
		/*
		get_template_part( 'template-parts/content', 'offcanvas' ); ?>

		<div class="off-canvas-content" data-off-canvas-content>

			<header id="masthead" class="header" role="banner">

				 <!-- This navs will be applied to the topbar, above all content
					  To see additional nav styles, visit the /parts directory -->
				 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>

			</header> <!-- end .header -->

			<div id="content" class="site-content">
		*/ ?>

		<!-- off-canvas title bar for 'small' screen -->
		<div class="title-bar" data-hide-for="medium" data-responsive-toggle="main-menu">
		  <div class="title-bar-left">
			<button class="menu-icon" type="button" data-toggle="offCanvasLeft"></button>
			<span class="title-bar-title"><?php bloginfo( 'name' ); ?></span>
		  </div>
		</div><!-- .title-bar -->


		<!-- <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
		  <button class="menu-icon" type="button" data-toggle></button>
		  <div class="title-bar-title">Menu</div>
		</div> -->


		<div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
			<button class="close-button" aria-label="Close menu" type="button" data-close>
				<span aria-hidden="true">&times;</span>
			</button>
			<?php
			 $args = array (
				 'theme_location' 	=> 'primary',
				 'container' 		=> 'nav',
				 'container_class'	=> 'offcanvas-navigation',
				 'menu_class' 		=> 'mobile-menu',
			 );
				wp_nav_menu( $args );
			?>
		</div><!-- #offCanvasLeft -->
		<div class="off-canvas-content" data-off-canvas-content>

			<header id="masthead" class="" role="banner">


			    <nav id="main-menu" class="top-bar hide-for-small-only">
			      <section class="top-bar-left hide-for-small-only">
			        <ul class="dropdown menu" data-dropdown-menu>
			          <li>
			            <h1 class="site-title">
			              <a href="<?php esc_attr_e( home_url( '/' ) ); ?>" rel="home">
			                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/svg/logo-beacon-topbar.svg" alt="<?php bloginfo( 'name' ); ?>" />
			              </a>
			            </h1>
			          </li>
			        </ul>
			      </section>
			      <section class="top-bar-right hide-for-small-only">
			        <?php joints_top_nav(); ?>
			      </section>
			    </nav><!-- #site-navigation -->


			</header><!-- #masthead -->

			<div id="content" class="site-content">
