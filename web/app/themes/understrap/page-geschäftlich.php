<?php
/**
 * Template Name: Geschäftlich
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

    <div class="container-fluid" id="content" tabindex="-1">


        <div class="row">

            <main class="site-main" id="main" style="width: 100%;">				
				<!-- ==================================================== Baumeisterarbeiten ================================================ -->
				<span class="anchor" id="baumeisterarbeiten"></span>
                <div class="container-fluid borderblack pbtm-mobil" id="baumeisterarbeiten2" style="width:100%; height:auto;">
                    <div class="row justify-content-end align-items-center" style="padding-top: 4rem;">
                        <div class="col-lg-12" style="margin-bottom: 4rem;">
                            <h1 style="text-align:center;">Unsere Services für Geschäftskunden</h1>
                        </div>
                        <div id="mr_1" class="col-lg-4 col-sm-5 align-items-center mr-md-4 text-center">
                            <img class="icons_details" src="https://piribau.blob.core.windows.net/piribau/2019/03/Baumeister_neu.png">
                            <h2 style="text-align:center;">Baumeisterarbeiten</h2>
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
                        <div class="col-lg-6 col-sm-7  ml-auto mr-auto">
                            <img src="https://piribau.blob.core.windows.net/piribau/2019/03/31_unified_baumaeister.png"
                                width="100%" height="auto">
                        </div>
                    </div>
                </div>
                <!-- ==================================================== Geschäftslokale ============================================ -->
				<span class="anchor" id="geschäftslokale"></span>
				<div class="container-fluid borderblack row-normal-resp pbtm-mobil" id="geschäftslokale2" style="width:100%; height:auto;">
                    <div class="row justify-content-start align-items-center" style="padding-top: 4rem;">
                        <div class="col-lg-6 col-sm-7 mr-md-4">
                            <img src="https://piribau.blob.core.windows.net/piribau/2019/03/31_unified_geschaeft.png"
                                width="100%" height="auto">
                        </div>
                        <div class="col-lg-4 col-sm-5 align-items-center text-center">
                            <img class="icons_details" src="https://piribau.blob.core.windows.net/piribau/2019/03/Geschaeftslokal_neu.png">
                            <h2 style="text-align:center;">Geschäftslokale</h2>
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
                            <img src="https://piribau.blob.core.windows.net/piribau/2019/03/31_unified_geschaeft.png"
                                width="100%" height="auto">
                        </div>
                        <div class="col-lg-4 col-sm-5 align-items-center text-center">
                            <img class="icons_details" src="https://piribau.blob.core.windows.net/piribau/2019/03/Geschaeftslokal_neu.png">
                            <h2 style="text-align:center;">Geschäftslokale</h2>
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
                            <img src="https://piribau.blob.core.windows.net/piribau/2019/03/31_unified_geschaeft.png"
                                width="100%" height="auto">
                        </div>                      
                    </div>
                </div>
                <!-- ==================================================== Hausverwaltung ========================================= -->
				<span class="anchor" id="hausverwaltung"></span>
				<div class="container-fluid borderblack pbtm-mobil" id="hausverwaltung2" style="width:100%; height:auto;">
                    <div class="row justify-content-end align-items-center" style="padding-top: 4rem;">
                        <div  id="mr_3" class="col-lg-4 col-sm-5 align-items-center mr-md-4 text-center">
                            <img class="icons_details" src="https://piribau.blob.core.windows.net/piribau/2019/03/Hausverwaltung_neu.png">
                            <h2 style="text-align:center;">Hausverwaltung</h2>
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
                        <div class="col-lg-6 col-sm-7  ml-auto mr-auto">
                            <img src="https://piribau.blob.core.windows.net/piribau/2019/03/31_unified_hausverwaltung.png"
                                width="100%" height="auto">
                        </div>
                    </div>
                </div>                	
            </main>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer(); ?>