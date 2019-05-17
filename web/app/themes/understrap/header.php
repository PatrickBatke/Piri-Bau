<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar"  itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary clearfix" id="navigation-menu">


				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'left-menu',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown-left',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'left-menu',
						'depth'           => 2,
					)
				); ?>

					<!-- Paste the Logo here -->
					<?php 
						the_custom_logo();
				    ?>

				<button id="mobil-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdowns" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
						<i class="fas fa-bars" style="color: black;"></i>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'right-menu',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown-right',
						'menu_class'      => 'navbar-nav mr-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'right-menu',
						'depth'           => 2,
					)
				); ?>

					<?php wp_nav_menu(
					array(
						'theme_location'  => 'mobile-menu',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdowns',
						'menu_class'      => 'navbar-nav mr-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'mobile-menu',
						'depth'           => 2,
					)
				); ?>

		</nav><!-- .site-navigation -->

	

	</div><!-- #wrapper-navbar end -->


	<header>
    <div class="row justify-content-center align-items-center" id="header-wallpaper" style="margin-right: 0; margin-left:0; 
				width:100%; height:auto; background-size: cover; position: relative">

 		<nav id="sidebar">
            <ul class="list-unstyled">              
                <li><a href="tel:0043-2642-329"><i class="fas fa-phone"></i></a></li>	
				<li class="showonhover"><p>+43-2642-329</p></li>								
                <!-- <li><a href="mailto:office@piriprojekt.at"><i class="fas fa-envelope"></i></a></li>								
                <li><a href="https://www.google.com/maps/dir//Piri+Projektbau,+Schiffamtsgasse+8,+1020+Wien/@48.2189349,16.373
                7195,15z/data=!4m9!4m8!1m0!1m5!1m1!1s0x476d07a50b3a80ab:0xc1c0ba85053524b8!2m2!1d16.3737195!2d48.2189349!3e0"
                 target="_blank"><i class="fas fa-map-pin"></i></a></li> -->
            </ul>
		</nav>
		
		<nav id="sidebar-mobile">
            <ul class="list-unstyled">              
                <li><a href="tel:0043-2642-329"><i class="fas fa-phone"></i></a></li>											
                <!-- <li><a href="mailto:office@piriprojekt.at"><i class="fas fa-envelope"></i></a></li>								
                <li><a href="https://www.google.com/maps/dir//Piri+Projektbau,+Schiffamtsgasse+8,+1020+Wien/@48.2189349,16.373
                7195,15z/data=!4m9!4m8!1m0!1m5!1m1!1s0x476d07a50b3a80ab:0xc1c0ba85053524b8!2m2!1d16.3737195!2d48.2189349!3e0"
                 target="_blank"><i class="fas fa-map-pin"></i></a></li> -->
            </ul>
		</nav>

    </div>

	</header>
    
        <!-- SIDEBAR mit Kontaktdaten -->
        <!-- <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Kontaktieren Sie uns</h3>
            </div>
            <ul class="list-unstyled">              
                <li><i class="fa fa-phone-square"></i>  +43 264-23-29 </li>									
                <li><a href="mailto:office@piriprojekt.at"><i class="fa fa-envelope-square"></i>  office@piriprojekt.at</a></li>								
                <li><a href="https://www.google.com/maps/dir//Piri+Projektbau,+Schiffamtsgasse+8,+1020+Wien/@48.2189349,16.3737195,15z/data=!4m9!4m8!1m0!1m5!1m1!1s0x476d07a50b3a80ab:0xc1c0ba85053524b8!2m2!1d16.3737195!2d48.2189349!3e0"><i class="fas fa-map-pin"></i>  Besuchen Sie uns</a></li>
            </ul>
        </nav> -->

       
    