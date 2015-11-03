<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ITforge
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/asset/css/reset.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/asset/css/bootstrap.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/asset/css/style.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'itforge' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<!--
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'itforge' ); ?></button>
		</nav>
		-->

		<div class="menu container col-md-8 col-md-offset-2">
			<nav class="navbar navbar-default navbar-static-top">
			  	<div>
			  		<?php //bloginfo( 'name' ); ?>
			    	<a href="/itforge" class="navbar-brand"><img id="logo" src="<?php bloginfo('template_directory'); ?>/asset/img/logo.png"></a>
			    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    		<ul class="nav navbar-nav">
					    	<?php
					    		$defaults = array('echo' => false);
					    		echo strip_tags(wp_nav_menu($defaults), '<li><a>');
					    	?>
				    	</ul>
					</div>
				</div>
			</nav>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

