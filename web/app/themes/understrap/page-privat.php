<?php
/**
 * Template Name: Privat
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
<!-- 
        <nav id="sidebar">
            <ul class="list-unstyled">              
                <li><a href="tel:0043-2642-329"><i class="fas fa-phone"></i></a></li>									
                <li><a href="mailto:office@piriprojekt.at"><i class="fas fa-envelope"></i></a></li>								
                <li><a href="https://www.google.com/maps/dir//Piri+Projektbau,+Schiffamtsgasse+8,+1020+Wien/@48.2189349,16.373
                7195,15z/data=!4m9!4m8!1m0!1m5!1m1!1s0x476d07a50b3a80ab:0xc1c0ba85053524b8!2m2!1d16.3737195!2d48.2189349!3e0"
                 target="_blank"><i class="fas fa-map-pin"></i></a></li>
            </ul>
        </nav>
     -->


    <div class="container-fluid" id="content" tabindex="-1">


        <div class="row">

            <main class="site-main" id="main" style="width: 100%;">				
                <!-- ==================================================== Unsere Services / Dachgeschoßbau ===================================== -->
				<span class="anchor" id="dachgeschoßausbau"></span>
				<div class="container-fluid borderblack pbtm-mobil" id="dachgeschoßausbau2" style="width:100%; height:auto; ">
                    <div class="row justify-content-end align-items-center" style="padding-top: 4rem;">
                        <div class="col-lg-12" style="margin-bottom: 4rem;">
                            <h1 style="text-align:center;">Unsere Services für Privatkunden</h1>
                        </div>
                        <div  id="mr_2" class="col-lg-4 col-sm-5 col-xs-12 align-items-center mr-md-4 text-center">                            
                            <img class="icons_details" src="https://piribau.blob.core.windows.net/piribau/2019/03/Dachgeschossausbau_neu.png">
                            <h2 style="text-align:center;">Dachgeschoßausbau</h2>
                            <br>
                            <p style="text-align:center; font-weight:bold;">Lorem ipsum, dolor sit amet consectetur
                                adipisicing elit. Maiores,</p>
                            <p style="text-align:center;">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Voluptatibus,
                                repellendus vitae. Accusamus rem consequuntur totam voluptatum cumque tempora eos,
                                quibusdam velit molestiae distinctio? Asperiores tenetur commodi est laboriosam, sequi
                                magni.
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit delectus, autem nobis
                                similique
                                reiciendis quibusdam perferendis deserunt voluptatem inventore fuga? Id atque sit neque
                                quisquam placeat
                                dignissimos modi et autem.</p>
                        </div>
                        <div class="col-lg-6 col-sm-7 col-xs-12 align-items-center ml-auto mr-auto">
                            <img src="https://piribau.blob.core.windows.net/piribau/2019/03/31_unified_dach.png"
                                width="100%" height="auto">
                        </div>
                    </div>
                </div>
				<!-- ==================================================== Wohnungen ============================================================= -->
				<span class="anchor" id="wohnungen"></span>
                <div class="container-fluid borderblack row-normal-resp " id="wohnungen2" style="width:100%; height:auto;">
                    <div class="row justify-content-start align-items-center" style="padding-top: 4rem;">
                        <div class="col-lg-6 col-sm-7 mr-md-4">
                            <img src="https://piribau.blob.core.windows.net/piribau/2019/03/31_unified_wohnungen.png"
                                width="100%" height="auto">
                        </div>
                        <div class="col-lg-4 col-sm-5 align-items-center text-center">
                            <img class="icons_details" src="https://piribau.blob.core.windows.net/piribau/2019/03/Wohnungsumbau_neu.png">
                            <h2 style="text-align:center;">Wohnungen</h2>
                            <br>
                            <p style="text-align:center; font-weight:bold;">Lorem ipsum, dolor sit amet consectetur
                                adipisicing elit. Maiores,</p>
                            <p style="text-align:center;">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Voluptatibus,
                                repellendus vitae. Accusamus rem consequuntur totam voluptatum cumque tempora eos,
                                quibusdam velit molestiae distinctio? Asperiores tenetur commodi est laboriosam, sequi
                                magni.
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit delectus, autem nobis
                                similique
                                reiciendis quibusdam perferendis deserunt voluptatem inventore fuga? Id atque sit neque
                                quisquam placeat
                                dignissimos modi et autem.</p>
                        </div>
                    </div>
                </div>
                <!-- MOBIL -->
                <div class="container-fluid borderblack row-mobil-resp" style="width:100%; height:auto;">
                    <div class="row justify-content-start align-items-center" style="padding-bottom: 4rem; padding-top: 4rem;">
                        <div class="col-lg-6 col-sm-7  ml-auto mr-auto mdrows">
                            <img src="https://piribau.blob.core.windows.net/piribau/2019/03/31_unified_wohnungen.png"
                                width="100%" height="auto">
                        </div>
                        <div class="col-lg-4 col-sm-5 align-items-center text-center">                                
                            <img class="icons_details" src="https://piribau.blob.core.windows.net/piribau/2019/03/Wohnungsumbau.png">
                            <h2 style="text-align:center;">Wohnungen</h2>
                            <br>
                            <p style="text-align:center; font-weight:bold;">Lorem ipsum, dolor sit amet consectetur
                                adipisicing elit. Maiores,</p>
                            <p style="text-align:center;">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Voluptatibus,
                                repellendus vitae. Accusamus rem consequuntur totam voluptatum cumque tempora eos,
                                quibusdam velit molestiae distinctio? Asperiores tenetur commodi est laboriosam, sequi
                                magni.
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit delectus, autem nobis
                                similique
                                reiciendis quibusdam perferendis deserunt voluptatem inventore fuga? Id atque sit neque
                                quisquam placeat
                                dignissimos modi et autem.</p>
                        </div>  
                        <div class="col-xs-12  ml-auto mr-auto xsrows">
                            <img src="https://piribau.blob.core.windows.net/piribau/2019/03/31_unified_wohnungen.png"
                                width="100%" height="auto">
                        </div>                     
                    </div>
                </div>				
            </main>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer(); ?>