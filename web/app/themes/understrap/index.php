<?php
/**
 * The main template file.
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

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #index-wrapper -->

<script type="text/javascript">

    window.addEventListener('scroll', checkHeader);

    var checkHeader = _.throttle(() => { 

    }, 300);

    let scrollPosition = Math.round(window.scrollY);



</script>

<?php get_footer(); ?>