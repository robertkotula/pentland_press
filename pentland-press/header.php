<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pentland_Press
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- CSS stylesheets -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/header.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/media_queries.css">

	<!-- Script Files -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pentland-press' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<?php if( has_custom_logo() ) {
							the_custom_logo();
						} else { ?>
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						<?php } ?>
				</a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		            <span class="navbar-toggler-icon"></span>
		        </button>
		    <div class="collapse navbar-collapse" id="navbarResponsive">
					<?php
						wp_nav_menu( array(
						    'theme_location'  => 'primary',
						    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
						    'container'       => 'div',
						    'container_class' => 'collapse navbar-collapse',
						    'container_id'    => 'bs-example-navbar-collapse-1',
						    'menu_class'      => 'navbar-nav mr-auto',
						    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						    'walker'          => new WP_Bootstrap_Navwalker(),
						) );
					?>
		    </div>
		    </div>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
