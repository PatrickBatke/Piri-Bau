<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
						<div class="row justify-content-center" style="padding-left: 1rem;">
							<div class="col-xs-6 col-sm-6 col-md-3 align-items-center">
							  <p>KONTAKT</p>
								<ul style="list-style-type:none;">
									<li><i class="fa fa-phone-square"></i>  +43 264-23-29 </li>									
									<li><a href="mailto:office@piriprojekt.at"><i class="fa fa-envelope-square"></i>  office@piriprojekt.at</a></li>								
									<li><a href="https://www.google.com/maps/dir//Piri+Projektbau,+Schiffamtsgasse+8,+1020+Wien/@48.2189349,16.3737195,15z/data=!4m9!4m8!1m0!1m5!1m1!1s0x476d07a50b3a80ab:0xc1c0ba85053524b8!2m2!1d16.3737195!2d48.2189349!3e0"><i class="fas fa-map-pin"></i>  Besuchen Sie uns</a></li>
								</ul></div>
							<div class="col-xs-6 col-sm-6 col-md-3">
							<p>LEISTUNGEN</p>							
							<ul style="list-style-type:none;" id="footer-leistungen">			
									<li><a href="/#dachgeschossausbau">Dachgeschoßausbau</a></li>
									<li><a href="/#wohnungen">Wohnungen</a></li>
									<li><a href="/#baumeisterarbeiten">Baumeisterarbeiten</a></li>									
									<li><a href="/#geschaeftslokale">Geschäftslokale</a></li>
									<li><a href="/#hausverwaltung">Hausverwaltung</a></li>
								</ul>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3">			
							<p>INFORMATION</p>				
							<ul style="list-style-type:none;">										
									<li>Impressum</li>				
									<li>Datenschutzerklärung</li>
									<li>Geschäftsbedingungen</li>	
								</ul>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3" style="text-align: right;">
								<a href="http://www.deinbaumeister.at/de/home/">
									<img src="https://piribau.blob.core.windows.net/piribau/2019/03/der_baumeister_3.png" width="55%" height="auto">
								</a>								
							</div>
						</div>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
				<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

<!-- Copyright ROW  -->
<div class="wrapper" id="wrapper-footer-bottom">
	<div class="container" id="footerdiv_container">
		<div id="footerdivbottom" class="row justify-content-center align-items-center" style="height:70px; width: 100%;">
			<div class="col-sm-6" style="color:white;">
				Copyright 2019
			</div>				
			<div class="col-sm-6">
				<a href="/#page"><i class="fa fa-arrow-up" style="color:white; float:right; border: 1px solid white; padding: 5px;"></i></a>		
			</div>
		</div>
	</div>
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

