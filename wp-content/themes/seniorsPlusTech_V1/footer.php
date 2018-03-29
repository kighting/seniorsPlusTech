<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

</div><!-- #page we need this extra closing tag here -->

<?php get_sidebar( 'footerfull' ); ?>

    <div class="wrapper wrapper-footer">

        <div class="<?php echo esc_attr( $container ); ?>">

            <div class="row">

                <div class="col-md-12">

                    <footer>

                        <span class="dashes">————</span>&nbsp; <?php  echo get_bloginfo( 'name' ); ?> &copy; <?php echo date('Y'); ?> <span class="dashes"> ————</span>

                    </footer><!-- #colophon -->

                </div><!--col end -->

            </div><!-- row end -->

        </div><!-- container end -->

    </div><!-- wrapper end -->

<?php wp_footer(); ?>

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4179576.js"></script>
<!-- End of HubSpot Embed Code -->

</body>

<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/main.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/rellax.js"></script>

</html>

