<?php
/*
 * Template Name: Contact us
 * 
 * The template for Contact us Page
 *
 * This is the template that displays Contact us Page.
 *
 */
get_header();
//Quick contact
$phone_no_1 = get_option('phone_no_1');
$phone_no_2 = get_option('phone_no_2');
$phone_no_3 = get_option('phone_no_3');
$email_1 = get_option('email_1');
$email_2 = get_option('email_2');
$email_3 = get_option('email_3');
$address = get_option('address');
$address_2 = get_option('address_2');
$facebook = get_option('facebook');
$g_map_location = get_option('g_map_location');

if (have_posts()) : while (have_posts()) : the_post();
        ?>    
        <main class="contact_us">
            <div class="breadcrumb_cont">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                                <li class="active"><?php the_title(); ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="page_heading">Contact Us</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="contact_us_info">
                                        <p>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <a href="javascript:void(0)"><?= $address; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="contact_us_info">
                                        <p>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <a href="tel:<?= $phone_no_1; ?>">
                                                <span>
                                                    <?= $phone_no_1; ?>
                                                </span>
                                            </a>
                                            <a href="tel:<?= $phone_no_3; ?>">
                                                <span>
                                                    <?= $phone_no_3; ?>
                                                </span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="contact_us_info">
                                        <p>
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <a href="mailto:<?= $email_1; ?>"><?= $email_1; ?>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="contact_us_info">
                                        <p>
                                            <i class="fa fa-globe" aria-hidden="true"></i>
                                            <a target="_blink" href="<?= site_url(); ?>"><?= site_url(); ?>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <?php echo the_content(); ?>
                        </div>
                    </div>
                </div>
                <div class="contact_iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6066.036278632683!2d90.42146673429771!3d23.781901868549237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf132e6319f6fac1a!2sITS+Holidays+Ltd.!5e1!3m2!1sen!2sbd!4v1476549255258" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </main>
        <?php
    endwhile;
endif;
get_footer();
?>