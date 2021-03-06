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

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

    <?php if ( is_front_page() && is_home() ) : ?>
    <?php get_template_part( 'global-templates/hero' ); ?>
    <?php endif; ?>

    <section id="home">
        <div class="rellaxBg rellax" data-rellax-speed="-4">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 container-home-text">
                    <h2>Seniors + Tech</h2>
                    <p>Tech support events for retirement communities in the greater Seattle area</p>
                    <a href="tel: +1425-298-7335"><button class="btn-primary">CONTACT US</button></a>
                </div>
<!--
                <div class="col-lg-6">
                    <div class="container container-home-image">
                        <div class="row">
                            <div class="col-6"><img src="<?php bloginfo('template_url'); ?>/img/img_home01.png" class="" alt="Seniors plus tech"></div>
                            <div class="col-6"><img src="<?php bloginfo('template_url'); ?>/img/img_home02.png" class="" alt="Seniors plus tech"></div>
                            <div class="col-6"><img src="<?php bloginfo('template_url'); ?>/img/img_home03.png" class="" alt="Seniors plus tech"></div>
                            <div class="col-6"><img src="<?php bloginfo('template_url'); ?>/img/img_home04.png" class="" alt="Seniors plus tech"></div>
                        </div>
                    </div>
                </div>
-->
            </div>
        </div>

    </section>

    <section id="story">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1 col-md-6 order-md-1 col-sm-12 order-sm-2 order-2">
                    <img src="<?php bloginfo('template_url'); ?>/img/img_story01.png" alt="Helping seniors in retirement homes">
                </div>
                <div class="col-lg-6 order-lg-2 col-md-6 order-md-1 col-sm-12 order-sm-1 order-1 story-text">
                    <h2>Story</h2>
                    <p>In 2017, while at a Google Tech conference in downtown Seattle, I was approached by a senior named Josie and asked if I would go to her house and help update her Windows 7 computer. I said yes, and ended up showing her how to do 20+ other things she had no idea her computer could do. Now with the technology she's using Josie is more empowered and independent than ever before.</p>
                    <p>Working with Josie showed me just how empowering technology can be in a senior’s life. Unfortunately, many seniors struggle with tech products and services and have no one to turn to for help. That's where Seniors + Tech comes in. We specialize in working with seniors to provide in-person tech support so that seniors have the resources they need to be independent and connected.</p>
                </div>
            </div>
        </div>

    </section>

    <section id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 testimonial">
                    <div class="img_outline">
                        <img src="<?php bloginfo('template_url'); ?>/img/img_testimonial01.png" class="" alt="Charles">
                    </div>
                    <h2>Charles, 70</h2>
                    <p>"I'm probably like a lot of people in my age group. I'm definitely not tech savvy. Ryan has been a tremendous help introducing me to new tools I need. He's knowledgeable, passionate, and very patient."</p>
                </div>
                <div class="col-lg-4 testimonial">
                    <div class="img_outline">
                        <img src="<?php bloginfo('template_url'); ?>/img/img_testimonial02.png" class="" alt="Josie">
                    </div>
                    <h2>Josie, 70</h2>
                    <p>"Ryan helped me learn Facebook and how to set up a group in my Gmail. He was polite and patient. If I didn't understand something he just helped me understand; never condescending or patronizing."</p>
                </div>
                <div class="col-lg-4 testimonial">
                    <div class="img_outline">
                        <img src="<?php bloginfo('template_url'); ?>/img/img_testimonial03.png" class="" alt="Linda">
                    </div>
                    <h2>Linda, 69</h2>
                    <p>"Ryan helped me with selection of a new computer, set it up and patiently walked me through features that are important for me. Now I can do video calling with my family!"</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Services</h2>
            <div class="row">
                <div class="col-lg-6">
                    <p>We provide seniors with tech support and training for:</p>
                    <ul>
                        <li>Computers</li>
                        <li>Smart phones</li>
                        <li>Tablets</li>
                        <li>Email &amp; text</li>
                        <li>Security</li>
                        <li>Video calling</li>
                        <li>Social media</li>
                        <li>Printers</li>
                    </ul>
                    <ul>
                        <li>Readers</li>
                        <li>Photo sharing</li>
                        <li>Internet</li>
                        <li>Software installation</li>
                        <li>Password recovery</li>
                        <li>Accessibility</li>
                        <li>User training</li>
                        <li><span>and more…</span></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="<?php bloginfo('template_url'); ?>/img/img_service.png" class="" alt="Service">
                </div>
            </div>
        </div>
    </section>

    <section id="customers">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3>Retirement communites we work with</h3>
<!--                    <img src="<?php bloginfo('template_url'); ?>/img/logo_mbk.png" class="customer_logo" alt="MBK Senior Living">-->
                    <img src="<?php bloginfo('template_url'); ?>/img/logo_transforming_age.png" class="customer_logo" alt="Transforming Age">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo_Watermark.png" class="customer_logo" alt="Watermark Retirement Community">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo_era_living.png" class="customer_logo" alt="Era Living">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo_solstice.png" class="customer_logo" alt="Solstice Senior Living">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo_koelsch_communities.png" class="customer_logo" alt="Koelsch Communities">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo_aegis.png" class="customer_logo" alt="Aegis Living">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo_milestone.png" class="customer_logo" alt="Milestone Retirement Communities">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo_brookdale.png" class="customer_logo" alt="Brookdale Senior Living Solutions">
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact us</h2>
            <div class="row">
                <div class="col-lg-6">
                    <p>Have any questions? Give us a call or fill out the form and we will get back to you as soon as possible. Thank you and we look forward to hearing from you.</p>
                    <div class="contact">
                        <img src="<?php bloginfo('template_url'); ?>/img/img_contact.png" class="contact-img" alt="Ryan">
                        <div class="contact-text">
                            <h4>Ryan Nelson</h4>
                            <ul>
                                <li><img src="<?php bloginfo('template_url'); ?>/img/ic_role.svg" class="" alt="Role">Lead Tech</li>
                                <li><img src="<?php bloginfo('template_url'); ?>/img/ic_email.svg" class="" alt="Email"><a href="mailto:ryan@seniorsplustech.com">ryan@seniorsplustech.com</a></li>
                                <li><img src="<?php bloginfo('template_url'); ?>/img/ic_phone.svg" class="" alt="Phone"><a href="tel:+1-425-298-7335">425-298-7335</a></li>
                                <li><img src="<?php bloginfo('template_url'); ?>/img/ic_location.svg" class="" alt="Location">Seattle, WA</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <?php echo do_shortcode('[contact-form-7 id="4" title="Contact us"]'); ?>

                </div>
            </div>
        </div>

    </section>

    <?php get_footer(); ?>
