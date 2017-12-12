<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->
				
				<div class= "site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri() . '/images/header-logo.png'; ?>" class="header-logo" alt="csl logo" />
					</a>
				</div>
				<div class= "site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri() . '/images/desktop-header-logo.png'; ?>" class="desktop-header-logo" alt="csl logo" />
					</a>
				</div>
	
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

					<button class="toggle-open">
						<span class="line1"></span>
						<span class="line2"></span>
						<span class="line3"></span>
					</button>
					<ul class="social-icons">
						<?php echo '<i class="fa fa-facebook-square" aria-hidden="true"></i>' ?>
						<?php echo '<i class="fa fa-twitter" aria-hidden="true"></i>' ?>
					<ul>
					

				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
			<div class="mobile-menu">
				<ul>
				<?php wp_nav_menu (array('theme_location' => 'secondary-menu','menu_class' => 'nav'));?>
				</ul>
			</div> 
			<div id="content" class="site-content">
