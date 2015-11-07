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
			  	<div class="container-fluid">
			  		<div class="navbar-header">
				      	<a href="" class="navbar-brand">
					    	<img id="logo" src="<?php bloginfo('template_directory'); ?>/asset/img/logo.png">
				      	</a>
				      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        	<span class="sr-only">Toggle navigation</span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				      	</button>
				    </div>
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
				    		<li id="search-expanding">
				    			<a id="icon-search">
				    				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				    			</a>
				    			<form class="navbar-form col-xs-12" role="search" id="search-input">
									<div class="form-group navbar-right">
								  		<input type="search" class="form-control" placeholder="ค้นหา" name="s">
									</div>
								</form>
				    		</li>
				    	</ul>
					</div>
				</div>
			</nav>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

