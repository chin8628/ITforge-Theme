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
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'itforge' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="menu col-md-8 col-md-offset-2">
			<nav class="navbar navbar-default navbar-static-top">
			  	<div>
			    	<a href="/itforge" class="navbar-brand"><img id="logo" src="<?php bloginfo('template_directory'); ?>/asset/img/logo.png"></a>
			    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    	<?php
				    		require_once('inc/wp_bootstrap_navwalker.php');
				    		$defaults = array(
								'container'       => false,
								'menu_class'      => 'nav navbar-nav',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'walker'          => new wp_bootstrap_navwalker()
							);
				    		wp_nav_menu($defaults);
				    	?>
				    	<ul class="nav navbar-nav navbar-right">
				    		<li class="search-expanding">
				    			<a href="#">
				    				<span class="glyphicon glyphicon-search icon-search" aria-hidden="true"></span>
				    			</a>
				    		</li>
				    	</ul>
				    	<!--
				    	<form class="navbar-form" role="search">
							<div class="form-group navbar-right">
						  		<input type="search" class="form-control" placeholder="ค้นหา" name="s">
							</div>
						</form>
						-->

					</div>
				</div>
			</nav>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

