<?php
/**
* Template Name: Kontakt
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="wrapper" id="index-wrapper">
    
        <!-- SIDEBAR mit Kontaktdaten -->
<!--         <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Kontaktieren Sie uns</h3>
            </div>
            <ul class="list-unstyled">              
                <li><i class="fa fa-phone-square"></i>  +43 264-23-29 </li>									
                <li><a href="mailto:office@piriprojekt.at"><i class="fa fa-envelope-square"></i>  office@piriprojekt.at</a></li>								
                <li><a href="https://www.google.com/maps/dir//Piri+Projektbau,+Schiffamtsgasse+8,+1020+Wien/@48.2189349,16.3737195,15z/data=!4m9!4m8!1m0!1m5!1m1!1s0x476d07a50b3a80ab:0xc1c0ba85053524b8!2m2!1d16.3737195!2d48.2189349!3e0"><i class="fas fa-map-pin"></i>  Besuchen Sie uns</a></li>
            </ul>
        </nav> -->

     <!--    <nav id="sidebar">
            <ul class="list-unstyled">              
                <li><a href="tel:0043-2642-329"><i class="fas fa-phone"></i></a></li>									
                <li><a href="mailto:office@piriprojekt.at"><i class="fas fa-envelope"></i></a></li>								
                <li><a href="https://www.google.com/maps/dir//Piri+Projektbau,+Schiffamtsgasse+8,+1020+Wien/@48.2189349,16.373
                7195,15z/data=!4m9!4m8!1m0!1m5!1m1!1s0x476d07a50b3a80ab:0xc1c0ba85053524b8!2m2!1d16.3737195!2d48.2189349!3e0"
                 target="_blank"><i class="fas fa-map-pin"></i></a></li>
            </ul>
        </nav> -->
    


    <div class="container-fluid" id="content" tabindex="-1">


        <div class="row">

            <main class="site-main" id="main" style="width: 100%;">				
                 <!-- ==================================================== Hier finden Sie uns ======================================= -->
				<span class="anchor" id="findus"></span>
				<div class="container-fluid borderblack" id="findus2" style="padding-bottom: 2rem; padding-top: 4rem; background-image: 
                url(https://piribau.blob.core.windows.net/piribau/2019/03/hintergrund_kontakt.jpg);
					background-repeat: no-repeat; width:100%; height:auto; background-size: cover; height: auto;">
                    <div class="row justify-content-start align-items-center pbtm-mobil" id="contact_us">
                       <!--  <img src="https://piribau.blob.core.windows.net/piribau/2019/03/hintergrund_kontakt.jpg"> -->
                        <div class="col-lg-12 align-items-center" style="margin-bottom: 2rem; top:13%;">
                            <h1 style="text-align:center; color:black;">Kontaktieren Sie uns</h1>
                        </div>
                        <!-- <div class="col-xs-2 col-sm-4 col-md-6 col-lg-4 " style="margin-top: 2rem;">
                            <p style="text-align:left; font-weight:bold;">PIRI PROJEKTBAU GmbH</p>
                            <p style="text-align:left;">
                                Adresse: Schiffamtsgasse 5 <br>
                                PLZ: 1020 Wien <br>
                                Telefon: 01/264-23-29 <br>
                                Fax: 01/264-23-29-15 <br>
                                E-mail: office@piriprojekt.at<br>
                                <br>
                                <u>Kontaktpersonen:</u><br>
                                Projektleiter: Herr Dr. Milisav FIRULOVIC<br>
                                T: 0664/154 88 65<br>
                                Planungsleiter: Herr Bmstr. Ing. Dragan FIRULOVIC<br>
                                T: 0664/237 28 78<br>
                                Bauleiter: Herr Dipl. Ing. Dragutin BORDIJASAVIC<br>
                                T: 0664/460 67 76
                            </p>
                        </div> -->
                        <div class="col-xs-8 col-sm-6 col-md-5 col-lg-5 align-items-center overlay-contact" style="padding-top: 2rem; margin-left:3rem;">
                          <!--   <p style="text-align:center; font-weight:bold;">PIRI PROJEKTBAU GmbH</p>
                            <p style="text-align:center; margin-bottom: 3rem;">
                                Adresse: Schiffamtsgasse 5 <br>
                                PLZ: 1020 Wien <br>
                                Telefon: 01/264-23-29 <br>
                                Fax: 01/264-23-29-15 <br>
                                E-mail: office@piriprojekt.at<br>                                
                            </p> -->
                            <?php echo do_shortcode("[ninja_form id=2]"); ?>
                        </div>
                    </div>                    
                </div>
                <div class="container-fluid borderblack" id="findus2" style="width:100%; padding-bottom: 2rem;">                    
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-12  align-items-center" style="padding-top: 2rem;">
                            <h2 style="text-align:center; color:black;">Hier finden Sie uns</h2>
                        </div>
                        <div class="col-md-8 col-lg-8" style="margin-top: 4rem;">
                            <?php echo do_shortcode("[su_gmap width='100%' height='auto' responsive='yes' address='Piribau' zoom='0']"); ?>
                        </div>
                    </div>
                </div>
            </main>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer(); ?>