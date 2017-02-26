<?php
/**
 * Template Name: management
 * 
 * The template for displaying Management information
 *
 */
get_header();
while (have_posts()) : the_post();
    ?>     
    <main class="message_form_company_emp">
        <div class="breadcrumb_cont">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php">About Us</a></li>
                            <li class="active">Message from Managing Director</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="page_heading">Message from Executive Director</h1>
                    </div>
                </div>
                <div class="message_section row">
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3">
                        <div class="messager_img sj" data-animate="fadeInUp" data-animation-delay="200">
                            <img class="img-responsive" src="assets/images/exclusive_director.jpg" alt="" />
                        </div>
                        <div class="emp_name">
                            <h3>John Dell</h3>
                            <p>Executive Director</p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-7 col-md-8 col-lg-9">
                        <div class="the_content sj" data-animate="fadeInUp" data-animation-delay="200">
                            <p class="paragraph">“We have the ambition to announce tour package for all the beautiful countries of the world with the excellence of service. We want our honorable guests to be a part of our growth, we want each of their trips with us to be memorable and enjoyable starting from the moment they open our brochure.</p>
                            <div class="social_links_personal">
                                <h5 class="social_flow">Follow Me</h5>
                                <ul>
                                    <li><a data-toggle="tooltip" data-placement="top" title="+8801716-151 880" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                                    <li><a data-toggle="tooltip" data-placement="top" title="itsholidaysbd@gmail.com" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a data-toggle="tooltip" data-placement="top" title="https://www.facebook.com" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a data-toggle="tooltip" data-placement="top" title="https://www.twitter.com/" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a data-toggle="tooltip" data-placement="top" title="https://www.linkedin.com" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a data-toggle="tooltip" data-placement="top" title="https://www.g-plus.com" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php endwhile; ?>
<?php get_footer(); ?>