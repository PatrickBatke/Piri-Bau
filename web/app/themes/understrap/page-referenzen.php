<?php
/**
 * Template Name: Referenzen
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<?php if (is_front_page() && is_home()) : ?>
    <?php get_template_part('global-templates/hero'); ?>
<?php endif; ?>


<div class="wrapper" id="index-wrapper">

    <div class="container-fluid" id="content" tabindex="-1">


        <div class="row">

            <main class="site-main" id="main" style="width: 100%;">
                <!-- ==================================================== Titel ====================================== -->
                <div class="container-fluid borderblack" id="references-title">
                    <div class="row justify-content-center align-items-center" style="padding: 5rem 0rem;">
                        <div class="col-lg-12">
                            <h1 style="text-align:center;">Zufriedene Kunden</h1>
                        </div>
                        <div class="col-lg-6" style="padding-top: 2rem;">
                            <p style="text-align:center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi
                                id explicabo architecto, ipsam dolor nisi, eum numquam quam tempora
                                blanditiis voluptatibus, error natus iusto totam aliquid libero beatae.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi
                                id explicabo architecto, ipsam dolor nisi, eum numquam quam.</p>
                        </div>
                    </div>
                </div>
                <!-- ==================================================== Referenzen ====================================== -->   
                <!-- ==================================================== Dachgeschoßausbau Pokornygasse ====================================== -->                 
				<div class="container-fluid borderblack reference-single-projects" id="reference-single-projects-1">
                    <div class="row justify-content-center align-items-center">                       
                        <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12 align-items-center text-center">                          
                            <h2>Dachgeschoßausbau in der Pokornygasse</h2>
                            <br>                           
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
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
                        <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 align-items-center">
                            <?php echo do_shortcode("[foogallery id='662']"); ?>
                        </div>
                    </div>
                </div>
                <!-- ==================================================== Wohnungsumbau Zieglergasse ====================================== -->                
				<div class="container-fluid borderblack reference-single-projects" id="reference-single-projects-2">
                    <div class="row justify-content-center align-items-center">                    
                        <div class="col-lg-6 col-sm-7 col-xs-12 align-items-center">
                            <?php echo do_shortcode("[foogallery id='663']"); ?>
                        </div>   
                        <div class="col-lg-5 col-sm-5 col-xs-12 align-items-center text-center">                          
                            <h2>Wohnungsumbau in der Zieglergasse</h2>
                            <br>                           
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
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
				<!-- ==================================================== Dachgeschoßausbau Pokornygasse ====================================== -->                 
				<div class="container-fluid borderblack reference-single-projects" id="reference-single-projects-3">
                    <div class="row justify-content-center align-items-center">                       
                        <div class="col-lg-5 col-sm-5 col-xs-12 align-items-center text-center">                          
                            <h2>Dachgeschoßausbau in der Kutschkergasse</h2>
                            <br>                           
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
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
                        <div class="col-lg-6 col-sm-7 col-xs-12 align-items-center">
                            <?php echo do_shortcode("[foogallery id='665']"); ?>
                        </div>
                    </div>
                </div>
                <!-- ==================================================== Wohnungsumbau Zieglergasse ====================================== -->                
				<div class="container-fluid borderblack reference-single-projects" id="reference-single-projects-4">
                    <div class="row justify-content-center align-items-center">                    
                        <div class="col-lg-6 col-sm-7 col-xs-12 align-items-center">
                            <?php echo do_shortcode("[foogallery id='664']"); ?>
                        </div>   
                        <div class="col-lg-5 col-sm-5 col-xs-12 align-items-center text-center">                          
                            <h2>Geschäftslokalumbau in der Gonzagagasse</h2>
                            <br>                           
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
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
                <!-- ==================================================== Restliche Referenzen ====================================== -->   
                <div class="container-fluid borderblack" style="padding:4rem 0rem;" id="reference-single-projects-5">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-12 align-items-center" style="margin-bottom: 1rem;">
                            <h1 style="text-align:center;">Weitere Referenzen</h1>
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
                </div> 
            </main>     
        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #index-wrapper -->

<!-- JQUERY INTEGRATION -->
<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous">
</script>

<!-- SCROLL ANIMATION -->

<script>
    $('#navigation-menu>#navbarNavDropdown-right #menu-item-565 a').addClass('active-link');
</script>

<?php get_footer(); ?>