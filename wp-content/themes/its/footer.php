<?php
$phone_no_1 = get_option('phone_no_1');
$phone_no_2 = get_option('phone_no_2');
$phone_no_3 = get_option('phone_no_3');
$email_1 = get_option('email_1');
$email_2 = get_option('email_2');
$email_3 = get_option('email_3');
$address = get_option('address');
$address_2 = get_option('address_2');
$facebook = get_option('facebook');

//Qr Code
$scan_img_author = get_option('scan_img_author');
$scan_this_img = get_option('scan_this_img');

$scroll_message = get_option('scroll_message');
if (!$scroll_message) {
    $scroll_message = '';
}
?>

<footer class="section footer_section">
    <div class="container">
        <div class="row">
            <div class="item col-480-100 col-xs-6 col-sm-6 col-md-offset-1 col-md-4 col-lg-2 col-lg-offset-0">
                <div class="company_intor sj" data-animate="fadeInUp" data-animation-delay="200">
                    <h6 class="footer_heading">Company Introduction</h6>
                    <ul class="footer_list">
                        <li><a href="http://itsholidaysltd.com/about-us/">About Us</a></li>
                        <li><a href="http://itsholidaysltd.com/air-ticketing/">Air Ticketing</a></li>
                        <li><a href="http://itsholidaysltd.com/packages/">Packages</a></li>
                        <li><a href="http://itsholidaysltd.com/other-services/">Other Services</a></li>
                        <li><a href="http://itsholidaysltd.com/hotel-reservation/">Hotel Reservation</a></li>
                        <li><a href="http://itsholidaysltd.com/visa-info/">Visa Information</a></li>
                        <li><a href="http://itsholidaysltd.com/career/">Career</a></li>
                        <li><a href="http://itsholidaysltd.com/feedback/">Feedback</a></li>
                        <li><a href="http://itsholidaysltd.com/contact-us/">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="item col-480-100 col-xs-6 col-sm-6 col-md-6 col-lg-3">
                <div class="sj" data-animate="fadeInUp" data-animation-delay="300">
                    <h6 class="footer_heading">Contact Information</h6>
                    <div class="contact-info">
                        <p>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <a href="javascript:void(0)"><?= $address; ?>
                            </a>
                        </p>
                        <p>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:<?= $phone_no_1; ?>"><?= $phone_no_1; ?>,</a>
                        </p>
                        <p>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:<?= $phone_no_2; ?>"><?= $phone_no_2; ?></a>
                        </p>
                        <p>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <a href="mailto:<?= $email_2; ?>"><?= $email_2; ?>
                            </a>
                        </p>
                        <p>
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <a href="http://itsholidaysltd.com/">www.itsholidaysltd.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item col-480-100 col-xs-6 col-sm-5 col-md-4 col-md-offset-1 col-lg-2 col-lg-offset-0">
                <div class="sj" data-animate="fadeInUp" data-animation-delay="400">
                    <h6 class="footer_heading">We accept</h6>
                    <ul class="card_list">
                        <?php
                        $total_card = array(
                            'post_type' => 'we_accept',
                            'posts_per_page' => -1,
                            'order' => 'ASC'
                        );
                        $card_loop = new WP_Query($total_card);
                        $word_even = 0;
                        while ($card_loop->have_posts()) : $card_loop->the_post();
                            ?>
                            <li><a href="#"><?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?></a></li>
                            <?php
                        endwhile;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="item col-480-100 col-xs-6 col-sm-3 col-md-2 col-lg-2">
                <div class="sj" data-animate="fadeInUp" data-animation-delay="500">
                    <h6 class="footer_heading">Scan This</h6>
                    <div class="quar_code">
                        <img class="img-responsive" src="<?= $scan_this_img; ?>">
                        <a href="#"><?= $scan_img_author; ?></a>
                    </div>
                </div>
            </div>
            <div class="item col-480-100 col-xs-6 col-sm-4 col-sm-offset-0 col-md-4 col-lg-3">
                <div class="sj" data-animate="fadeInUp" data-animation-delay="600">
                    <h6 class="footer_heading">Our fan page</h6>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F<?= $facebook ?>%2F%3Ffref%3Dts&tabs=ITS%20Holidays%20Ltd.&width=262&height=165&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
                            width="100%" 
                            height="165" 
                            style="border:none;overflow:hidden" 
                            scrolling="no" 
                            frameborder="0" 
                            allowTransparency="true"
                            ></iframe>
                </div>
            </div>
        </div>
        <div class="row fotoer_logo_section">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="jcarousel-wrapper footer_jcarousel sj" data-animate="fadeInUp" data-animation-delay="200">
                    <div class="jcarousel footer_carousel">
                        <ul>
                            <?php
                            $clients = array(
                                'post_type' => 'footer_logo',
                                'posts_per_page' => -1,
                                'order' => 'ASC'
                            );
                            $clients_loop = new WP_Query($clients);
                            while ($clients_loop->have_posts()) : $clients_loop->the_post();
                                ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?></a></li>
                                <?php
                            endwhile;
                            ?>
                        </ul>
                    </div>
                    <a href="javascript:void(0)" class="jcarousel-control-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                    <a href="javascript:void(0)" class="jcarousel-control-next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-md-offset-4">
                        <P class="copyright_name">Copyright &copy; 2014-15 ITS HOLIDAYS</P>
                        <P class="creator">Design and Devlopment by <a href="http://www.sarower.com/" >Sarower Jahan.</a></P>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Back to top-->
    <span id="back_to_top" class="hidden">
        <a href="#top" class="well well-sm"  onclick="jQuery('html,body').animate({scrollTop: 0}, 'slow');
                return false;">
            <i class="glyphicon glyphicon-chevron-up"></i>
        </a>
    </span>
    <section class="page_loading_message">
        <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img class="text-center img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/welcome.png" alt="" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</footer>
<!-- Modal -->
<div class="paper_add_model">
    <div class="modal fade" id="ad_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <img src="" class="ad_img_lrg img-responsive" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>


<div class="marquee_cont">
    <div class="marquee">
        <div class="content" data-duration='20000'><?=$scroll_message;?></div>
    </div>
</div>

<!-- Bootstrap v3.3.6 -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

<!-- Bootstrap Datepicker v4.17.37 -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-datepicker.js"></script>

<!-- jcarousel library-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.jcarousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jcarousel.responsive.js"></script>

<!-- Script for Revolution Slider -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/rs-plugin/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/rs-plugin/js/jquery.themepunch.revolution.min.js'></script> 

<!-- JS for Custom Scrollbar-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.nicescroll.min.js"></script>

<!-- JS for jQuery Isotop Gallery-->
<script src='<?php echo get_template_directory_uri(); ?>/assets/js/isotope.pkgd.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.pkgd.js'></script>

<!-- JS for jQuery Magnific Pop Up-->
<script src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js'></script>

<!-- JS for Core Waypoint -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/waypoints.min.js"></script>

<!-- JS for Select Master-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap-select-master/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script>


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.marquee.min.js"></script>

<!-- JS for Theme Styling-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>
<?php wp_footer(); ?>
</body>
</html>