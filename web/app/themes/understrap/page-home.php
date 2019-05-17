<?php
/**
 * Template Name: Home
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

<div class="row justify-content-center align-items-center" id="home-video" style="margin-right: 0; margin-left:0; 
				width:100%; height:auto; background-size: cover; position: relative">

				<video autoplay muted loop style="width:100%">
					<source src="https://piribau.blob.core.windows.net/piribau/2019/04/Imagevideo_Piri_720_ohne_schriften.mp4" type="video/mp4">
				</video>
</div>

<div class="wrapper" id="index-wrapper">

    <div class="container-fluid" id="content" tabindex="-1">

                <div class="row">

                    <main class="site-main" id="main" style="width: 100%;">
                    
                    <!-- ==================================================== INFO BOX ==================================================== -->
                    <?php $args = array(
                    'posts_per_page' => 5,
                    'offset' => 0,
                    'category' => '',
                    'category_name' => 'AktuelleInformationen',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => '', 'exclude' => '',
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'post', 'post_mime_type' => '',
                    'post_parent' => '',
                    'author' => '',
                    'post_status' => 'publish',
                    'suppress_filters' => true
                    );

                    $myposts = get_posts( $args );

                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>			
                    <div class="row justify-content-center align-items-center" id="info-box" style="margin-right: 0; margin-left:0; padding: 1.5em 0;">
                        <div class="col-md-7 col-lg-8 col-xl-7 ml-auto mr-auto content-row-content-center card-wrapper-center">
                            <div class="card" id="info-card">
                                <div class="card-body">
                                    <h2 class="card-title"><?php the_title(); ?></h2>
                                    <p class="card-text"><?php the_content(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <?php
                    endforeach;
                    wp_reset_postdata();
                    ?>
                
				<!-- ==================================================== ÜBER UNS ============================================================= -->
                <span class="anchor" id="about"></span>
                <div id="about2" class="container-fluid borderblack" style="background-image: 
                url(https://piribau.blob.core.windows.net/piribau/2019/02/familienunternehmen.png);
					background-repeat: no-repeat; background-size: cover; padding-bottom: 5rem;">
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
                                </div>
                            </div>
                        </div>                     
                    </div>
                    <div class="row justify-content-center align-items-center mt-5">
                            <div class="col-lg-4" style="text-align: center;">
                                <a class="piri-btn" href="/aboutus">MEHR ERFAHREN</a>
                            </div>
                    </div>
                </div>
                 <!-- ==================================================== Unsere Services / Dachgeschoßbau ===================================== -->
				<span class="anchor" id="services"></span>
				<div class="container-services container-fluid borderblack pbtm-mobil" id="dachgeschoßausbau2">
                    <div class="row justify-content-end align-items-center" style="padding-top: 4rem;">
                        <div class="col-lg-12" style="margin-bottom: 4rem;">
                            <h1 style="text-align:center;">Unsere Leistungen für Privatkunden</h1>
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
                <div class="container-services container-fluid borderblack row-normal-resp " id="wohnungen2">
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
                <div class="container-services container-fluid borderblack row-mobil-resp">
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
                <!-- ==================================================== Baumeisterarbeiten ================================================ -->
				<span class="anchor" id="baumeisterarbeiten"></span>
                <div class="container-fluid container-services borderblack pbtm-mobil" id="baumeisterarbeiten2">
                    <div class="row justify-content-end align-items-center" style="padding-top: 4rem;">
                        <div class="col-lg-12" style="margin-bottom: 4rem;">
                            <h1 style="text-align:center;">Unsere Leistungen für Geschäftskunden</h1>
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
				<span class="anchor" id="geschaeftslokale"></span>
				<div class="container-services container-fluid borderblack row-normal-resp pbtm-mobil" id="geschäftslokale2">
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
                <div class="container-services container-fluid borderblack row-mobil-resp">
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
				<div class="container-services container-fluid borderblack pbtm-mobil" id="hausverwaltung2">
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
                <!-- ==================================================== Referenzen ========================================= -->
                <span class="anchor" id="references"></span>
				<div class="container-fluid borderblack" id="references2" style="padding-bottom:5rem;">
                    <div class="row justify-content-center align-items-center" style="padding-top: 4rem;">
                        <div class="col-lg-12 align-items-center" style="margin-bottom: 2rem;">
                            <h1 style="text-align:center;">Zufriedene Kunden</h1>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 align-right" style="margin-top: 2rem;">
                            <?php echo do_shortcode("[foogallery id='518']"); ?>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2" style="margin-top: 2rem;">
                            <?php echo do_shortcode("[foogallery id='519']"); ?>                                                    
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 align-left" style="margin-top: 2rem;">
                            <?php echo do_shortcode("[foogallery id='520']"); ?>
                        </div>                                       
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 align-right" style="margin-top: 2rem;">
                            <?php echo do_shortcode("[foogallery id='521']"); ?>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2" style="margin-top: 2rem;">
                            <?php echo do_shortcode("[foogallery id='522']"); ?>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 align-left" style="margin-top: 2rem;">
                            <?php echo do_shortcode("[foogallery id='523']"); ?>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center mt-5">
                            <div class="col-lg-4" style="text-align: center;">
                                <a class="piri-btn" href="/referenzen">MEHR SEHEN</a>
                            </div>
                    </div> 
                </div> 
                <!-- ==================================================== Kontakt ======================================= -->
				<span class="anchor" id="contact"></span>
				<div class="container-fluid borderblack " id="findus2" style="padding-bottom: 2rem; padding-top: 4rem;">
                    <div class="row justify-content-start align-items-center" id="contact_us">
                        <div class="col-lg-12 align-items-center" style="margin-bottom: 2rem; top:13%;">
                            <h2 style="text-align:center; color:black;">Kontaktieren Sie uns</h2>
                        </div>
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
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <img src="https://piribau.blob.core.windows.net/piribau/2019/04/kontakt-dragan.jpg">
                        </div>
                        <div class="col-sm-10 col-md-7 col-lg-6" style="padding-top: 2rem;">                         
                            <?php echo do_shortcode("[ninja_form id=2]"); ?>
                        </div>                        
                    </div>                                       
                </div>
                <!-- ==================================================== Hier finden sie uns ======================================= -->
                <div class="container-fluid borderblack" id="findus2" style="padding-bottom: 2rem;">                    
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-12  align-items-center" style="padding-top: 2rem;">
                            <h2 style="text-align:center; color:black;">Hier finden Sie uns</h2>
                        </div>
                        <div class="col-sm-10 col-md-9 col-lg-8 col-xl-6" style="margin-top: 4rem;">
                            <?php echo do_shortcode("[su_gmap width='100%' height='auto' responsive='yes' address='Piribau' zoom='0']"); ?>
                        </div>
                    </div>
                </div>
            </main>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #index-wrapper -->

<!-- JQUERY INTEGRATION -->
<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous">
</script>

<!-- SCROLL ANIMATION -->

<script>
/* Scroll zum Bereich */

$('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').stop().click(function () {
    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
        var UD_HASH = this.hash;
        var UD_ZIEL = $(this.hash);
        if (UD_ZIEL.length) {
            var UD_ABSTAND_TOP = UD_ZIEL.offset().top;
            $('html,body').animate({
                scrollTop: UD_ABSTAND_TOP
            }, 1500, function () {
                window.location.hash = UD_HASH;
            });
            return false;
        }
    }
});

/* Active Link */

/* $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').click(function () {
    $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').removeClass('active-link');
    $(this).addClass('active-link');
}); */

function getViewportOffset($e) {
    var $window = $(window),
        scrollLeft = $window.scrollLeft(),
        scrollTop = $window.scrollTop(),
        offset = $e.offset();
    return {
        left: offset.left - scrollLeft,
        top: offset.top - scrollTop - $('#navigation-menu').height()
    };
}

$(window).on("load scroll resize", function () {
    var viewportOffsetAboutus = getViewportOffset($("#about"));
    var viewportOffsetServices = getViewportOffset($("#services"));
    var viewportOffsetReferences = getViewportOffset($("#references"));
    var viewportOffsetContact = getViewportOffset($("#contact"));

    if (viewportOffsetAboutus.top > 101) {
        $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').removeClass('active-link');
    }
    if (viewportOffsetAboutus.top <= 100) {
        $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').removeClass('active-link');
        $('#menu-item-164 a').addClass('active-link');
        $('#menu-item-553 a').addClass('active-link');
    }
    if (viewportOffsetServices.top <= 100) {
        $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').removeClass('active-link');
        $('#menu-item-658 a').addClass('active-link');
        $('#menu-item-554 a').addClass('active-link');
    }
    if (viewportOffsetReferences.top <= 100) {
        $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').removeClass('active-link');
        $('#menu-item-657 a').addClass('active-link');
        $('#menu-item-656 a').addClass('active-link');
    }
    if (viewportOffsetContact.top <= 100) {
        $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').removeClass('active-link');
        $('#menu-item-647 a').addClass('active-link');
        $('#menu-item-646 a').addClass('active-link');
    }
}); 

</script>

<?php get_footer(); ?>