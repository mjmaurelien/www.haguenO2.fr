<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/logo_baner.ico">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/animate.css/animate.min.css">
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>


	<header id="masthead" class="site-header" role="banner">
		<!--<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
				</ul>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>-->

			<!-- ============= MON MENU ============= -->

		<div class="large-12 columns menu2 text-center">
		    <ul class="topnav" id="myTopnav">
		      <li class="logo_top">
						<a class="accueil" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						</a>
					</li>
		      <li class="icon">
		        <a href="javascript:void(0);" onclick="myFunction()">&#9776;
						</a>
		      </li>
					<li>
					<?php wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>
				</li>
				</ul>

		 </div>


		 	<!-- ========================== -->

	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
