<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="wrapper" id="error-404-wrapper">
    
    <section id="container-404">

        <div class="container" tabindex="-1">

            <div class="row">

                <div class="col-lg-12" id="primary">

                    <h2>Error 404. This page can't be found.</h2>
                    <p>Please check your URL and try again.</p>

                </div><!-- #primary -->

            </div><!-- .row -->

        </div><!-- Container end -->
        
    </section>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
