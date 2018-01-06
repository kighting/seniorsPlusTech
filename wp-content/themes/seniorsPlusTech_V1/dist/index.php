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

        <div class="container">
            <div class="row">
                <div class="col-lg-6 container-home-text">
                    <h2><span class="color-red">Seniors</span><span class="color-yellow"> + </span><span class="color-blue">Tech</span></h2>
                    <h3>No such thing as a stupid question!</h3>
                    <p>1-on-1 tech support events for retirement communities in the greater Seattle area</p>
                    <button class="btn-primary" id="btn-schedule">Schedule an event</button>
                </div>
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
            </div>
        </div>

    </section>

    <section id="story">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-lg-1 col-md-4 order-md-1 col-sm-12 order-sm-2 order-2">
                    <img src="<?php bloginfo('template_url'); ?>/img/img_ryan.png" alt="Ryan">
                </div>
                <div class="col-lg-9 order-lg-2 col-md-8 order-md-1 col-sm-12 order-sm-1 order-1 story-text">
                    <h2>Story</h2>
                    <p>Hello, my name is Ryan, originally a front-end web developer. In early 2017, I was attending a Google Tech conference in downtown Seattle, when I met a senior named Josie. After talking tech for awhile, she asked if I would come to her house the following day and help update her computer.</p>
                    <p>I agreed, and during our meeting also helped her: install Google Chrome, create contact groups, organize browser bookmarks, setup email templates, organize shared files, create folders, sync camera photos in the cloud, and more. Now Josie’s more connected to her family and theater community than ever before, doing things she never knew were possible.</p>
                    <p>Working together was such an enjoyable experience that I wondered: how many other seniors need tech assistance, and can I do something to help? This thought has since grown into a small business — Seniors + Tech, providing retirement home seniors with the 1-on-1 technology support they need to stay connected with the rest of us. <span>Schedule an event at your retirement community today!</span></p>
                </div>
            </div>
        </div>

    </section>

    <section id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 testimonial">
                    <img src="<?php bloginfo('template_url'); ?>/img/img_testimonial01.png" class="" alt="Charles">
                    <h2>Charles, 70</h2>
                    <p>"I'm probably like a lot of people in my age group. I'm definitely not tech savvy. Ryan has been a tremendous help introducing me to new tools I need. He's knowledgeable, passionate, and very patient."</p>
                </div>
                <div class="col-lg-4 testimonial">
                    <img src="<?php bloginfo('template_url'); ?>/img/img_testimonial02.png" class="" alt="Josie">
                    <h2>Josie, 70</h2>
                    <p>"Ryan helped me learn Facebook and how to set up a group in my Gmail. He was polite and patient. If I didn't understand something he just helped me understand; never condescending or patronizing."</p>
                </div>
                <div class="col-lg-4 testimonial">
                    <img src="<?php bloginfo('template_url'); ?>/img/img_testimonial03.png" class="" alt="Linda">
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
                    <p>Seniors + Tech provides 1-on-1 tech support events to retirement communities in the greater Seattle area for:</p>
                    <ul>
                        <li>Computers</li>
                        <li>Smart phones</li>
                        <li>Email</li>
                        <li>Voice calling</li>
                        <li>Video calling</li>
                        <li>Text messaging</li>
                        <li>Printing</li>
                    </ul>
                    <ul>
                        <li>Photo sharing</li>
                        <li>Internet</li>
                        <li>System updates</li>
                        <li>Security</li>
                        <li>Accessibility</li>
                        <li>Social media</li>
                        <li><span>and more…</span></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="<?php bloginfo('template_url'); ?>/img/img_service.png" class="" alt="Service">
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Schedule an event</h2>
            <h3>The first time is always <span>free</span></h3>
            <div class="row">
                <div class="col-lg-6">
                    <p>Are you in charge of programs and activities for a retirement community in the greater Seattle area? Do you want to schedule an event or have more questions? Please contact us!</p>
                    <div class="contact">
                        <img src="<?php bloginfo('template_url'); ?>/img/img_contact.png" class="contact-img" alt="Ryan">
                        <div class="contact-text">
                            <h4>Ryan Nelson</h4>
                            <ul>
                                <li><img src="<?php bloginfo('template_url'); ?>/img/ic_role.svg" class="" alt="Role">Lead Instructor</li>
                                <li><img src="<?php bloginfo('template_url'); ?>/img/ic_email.svg" class="" alt="Email"><a href="mailto:ryan@seniorsplustech.com">ryan@seniorsplustech.com</a></li>
                                <li><img src="<?php bloginfo('template_url'); ?>/img/ic_phone.svg" class="" alt="Phone"><a href="tel:+4252987335">425-298-7335</a></li>
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
