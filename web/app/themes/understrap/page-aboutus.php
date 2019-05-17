<?php
/**
 * Template Name: Aboutus
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
                   
                
                    <!-- ==================================================== ÜBER UNS ============================================================= -->
                    <span class="anchor" id="aboutus_page"></span>
                    <div id="aboutus2" class="container-fluid borderblack" style="background-image: 
                    url(https://piribau.blob.core.windows.net/piribau/2019/02/familienunternehmen.png);
                        background-repeat: no-repeat; width:100%; height:auto; background-size: cover; padding-bottom: 2rem;">
                        <div class="row justify-content-center">
                            <div class="col-xs-1">
                                <h1>Wir über uns</h1>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin-top: 2rem;">
                            <div class="col-lg-6">
                                <h3 style="text-align:center;">Familienunternehmen</h3>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin-top: 2rem;">
                            <div class="col-lg-5">
                                <p style="text-align:center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id
                                    illum debitis
                                    magnam velit facere saepe suscipit praesentium sed consectetur assumenda
                                    vel in accusantium, harum quia atque. Magni iste quos suscipit! Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Et minus quia alias,
                                    autem provident recusandae tempore exercitationem quas aliquid? Eveniet ipsum,
                                    sint obcaecati libero minus perferendis iusto possimus vel! Ratione.</p>
                            </div>
                        </div>
                        <div class="row justify-content-center" id="portraitcards" style="margin-top: 2rem;">
                            <div class="col-lg-3 col-md-6 col-sm-8 col-xs-4" style="height:auto important!">
                                <div class="card" style="background-color: 	#EAEAEA; color:black; height: auto;">                                
                                    <img class="card-img-top img-fluid mx-auto d-block" src="https://piribau.blob.core.windows.net/piribau/2019/02/dragan_01.jpg"
                                        alt="Card image cap" style="width: 40%; margin-top: 2rem; border-radius: 50%;">
                                    <div class="card-body d-flex flex-column" style="text-align:center;">
                                        <h5 class="card-title">Dragan Firulovic</h5>
                                        <p class="card-text"> <i> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Voluptas,
                                                facere. Maiores.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, facere.
                                                Maiores.
                                            </i></p>
                                        <span class="mt-auto align-text-bottom" style="text-align:right !important;"><a
                                                style="color:black;" href="#">Mehr lesen
                                                <i class="fa fa-arrow-right"></i></a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-8 col-xs-4" style="height:auto important!">
                                <div class="card" style="background-color: 	#EAEAEA; color:black; height: auto;">                                
                                    <img class="card-img-top img-fluid mx-auto d-block" src="https://piribau.blob.core.windows.net/piribau/2019/02/person_04.jpg"
                                        alt="Card image cap" style="width: 40%; margin-top: 2rem; border-radius: 50%;">
                                    <div class="card-body d-flex flex-column" style="text-align:center;">
                                        <h5 class="card-title">Mirela Firulovic</h5>
                                        <p class="card-text"> <i> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Voluptas,
                                                facere. Maiores.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, facere.
                                                Maiores.
                                            </i></p>
                                        <span class="mt-auto align-text-bottom" style="text-align:right !important;"><a
                                                style="color:black;" href="#">Mehr lesen
                                                <i class="fa fa-arrow-right"></i></a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-8 col-xs-4" style="height:auto important!">
                                <div class="card" style="background-color: 	#EAEAEA; color:black; height: auto;">
                                    <img class="card-img-top img-fluid mx-auto d-block" src="https://piribau.blob.core.windows.net/piribau/2019/02/person_02.jpg"
                                        alt="Card image cap" style="width: 40%; margin-top: 2rem; border-radius: 50%;">
                                    <div class="card-body d-flex flex-column" style="text-align:center;">
                                        <h5 class="card-title">Name</h5>
                                        <p class="card-text"> <i> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Voluptas,
                                                facere. Maiores.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, facere.
                                                Maiores.
                                            </i></p>
                                        <span class="mt-auto align-text-bottom" style="text-align:right !important;"><a
                                                style="color:black;" href="#">Mehr lesen
                                                <i class="fa fa-arrow-right"></i></a></span>
                                    </div>
                                </div>
                            </div>                        
                            <div class="col-lg-3 col-md-6 col-sm-8 col-xs-4" style="height:auto important!">
                                <div class="card" style="background-color: 	#EAEAEA; color:black; height: auto;">                                
                                    <img class="card-img-top img-fluid mx-auto d-block" src="https://piribau.blob.core.windows.net/piribau/2019/02/person_03.jpg"
                                        alt="Card image cap" style="width: 40%; margin-top: 2rem; border-radius: 50%;">
                                    <div class="card-body d-flex flex-column" style="text-align:center;">
                                        <h5 class="card-title">Name</h5>
                                        <p class="card-text"> <i> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Voluptas,
                                                facere. Maiores.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, facere.
                                                Maiores.
                                            </i></p>
                                        <span class="mt-auto align-text-bottom" style="text-align:right !important;"><a
                                                style="color:black;" href="#">Mehr lesen
                                                <i class="fa fa-arrow-right"></i></a></span>
                                    </div>
                                </div>
                            </div>                     
                        </div>                    
                    </div>

            </main>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer(); ?>