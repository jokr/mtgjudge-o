<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package o
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#table-of-contents">
<div id="page" class="hfeed site container">
	<header id="masthead" class="site-header row" role="banner">
		<div class="site-branding row">
			<h1 class="site-title col-md-8">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description col-md-4"><?php bloginfo( 'description' ); ?></h2>
		</div>

		<?php if ( get_header_image() ) : ?>
			<div class="site-header-img row">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
				</a>
			</div>
		<?php endif; // End header image check. ?>

		<nav id="site-navigation" class="main-navigation row" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'mtgjudge-o' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'mtgjudge-o' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>
		<!-- #site-navigation -->
		<div class="secondary-navigation row">
			<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
		</div>
	</header>
	<!-- #masthead -->

	<div id="content" class="site-content row">
