<?php
/**
 * Template Name: Visa Info
 * 
 * The template for displaying Visa Info
 *
 */
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>      
        <main class="visainfo">
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
                        <div class="col-xs-12 sj" data-animate="fadeInUp" data-animation-delay="200">
                            <h1 class="page_heading">I’m a Bangladeshi citizen, seeking Visa Information for</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="sub_heading sj" data-animate="fadeInUp" data-animation-delay="400">
                                To ease your life, we have collected visa information for over 150 Countries. All the visa information is updated on our web portal to serve you for Business & Visit purpose.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 select_country col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                            <div class="dropdown text-center sj" data-animate="fadeInUp" data-animation-delay="600">
                                <button class="btn btn-primary form-control dropdown-toggle" type="button" data-toggle="dropdown">>> Choose the Country You will Visit
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <?php
                                    $visa_info_countries = array(
                                        'post_type' => 'visa_info',
                                        'posts_per_page' => -1,
                                        'order' => 'ASC'
                                    );
                                    $visa_info_countries_loop = new WP_Query($visa_info_countries);
                                    while ($visa_info_countries_loop->have_posts()) : $visa_info_countries_loop->the_post();
                                        ?>
                                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                        <?php
                                    endwhile;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="section visainto_services">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <h1 class="first_heading sj" data-animate="fadeInUp" data-animation-delay="800">Our Services</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="visainfo_services_item col-xs-12 col-sm-6 col-md-4 sj" data-animate="fadeInUp" data-animation-delay="200">
                            <div class="item text-center">
                                <figure>
                                    <img class="img-responsive" alt="pkg_img" src="http://itsholidaysltd.com/wp-content/uploads/2016/09/services_image.png">
                                </figure>
                                <div class="services_details">
                                    <h3><a href="#">Visa Information</a></h3>
                                    <p class="paragraph">To ease your life, we have collected <strong>visa information for over 200 countries</strong> for Bangladeshi Citizens.</p>
                                    <a class="btn btn-primary" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="visainfo_services_item col-xs-12 col-sm-6 col-md-4 sj" data-animate="fadeInUp" data-animation-delay="400">
                            <div class="item text-center">
                                <figure>
                                    <img class="img-responsive" alt="pkg_img" src="http://itsholidaysltd.com/wp-content/uploads/2016/09/services_image2.png">
                                </figure>
                                <div class="services_details">
                                    <h3><a href="#">Visa Processing / Logistics Support</a></h3>
                                    <p class="paragraph">Apply for your <strong>visa from Bangladesh</strong> for over <strong>70 Embassies @ New Delhi</strong> through our Logistics Service..!</p>
                                    <a class="btn btn-primary" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="visainfo_services_item col-xs-12 col-sm-6 col-md-4 sj" data-animate="fadeInUp" data-animation-delay="600">
                            <div class="item text-center">
                                <figure>
                                    <img class="img-responsive" alt="pkg_img" src="http://itsholidaysltd.com/wp-content/uploads/2016/09/services_image3.jpg">
                                </figure>
                                <div class="services_details">
                                    <h3><a href="#">Visa Consultancy</a></h3>
                                    <p class="paragraph">We provide&nbsp;<strong>personalized visa consultancy service</strong>&nbsp;for almost all countries.</p>
                                    <a class="btn btn-primary" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section provide_visa_processing_section sj" data-animate="fadeInUp" data-animation-delay="300">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <h1 class="first_heading">Countries We Provide Visa Processing / Logistics Support</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="paragraph">ITS ! Is a Premium Outbound Travel Facilitator &amp; Specifically Recognized for Serving Bangladeshi Citizens with 'Visa Processing / Logistics Support' for<strong> Countries which don't have Embassies in Dhaka. </strong> We are currently processing Visa for <strong>70+</strong> such countries as given below:
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="paragraph">
                                For the Complete Country List and Visa Information
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <div class="btn btn-primary">Click Here</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section visa_thing sj" data-animate="fadeInUp" data-animation-delay="300">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <h1 class="first_heading">Why do you need ITS Thing?</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="paragraph">Getting a visa before travel is an unavoidable and difficult task to accomplish. This is because proper information is not often available. Furthermore, out of 200 countries only 40 has an Embassy in Bangladesh. Bangladeshis have to go to a third country like India or Sri Lanka to process visas for those countries, but not anymore! Visa Thing brings you the ease and convenience of processing visas for more than 70 countries which do not have any Embassy in Bangladesh. You no longer need to go to a third country and instead can apply directly from our office. We also have a database of visa information for 200 Countries in our website for Bangladeshi nationals.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="paragraph">
                                For the Complete Country List and Visa Information
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <div class="btn btn-primary">Click Here</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container visa_information_list">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="visa_list_item">
                                <p><span>1</span>Check visa requirements of your desired
                                    country from Visa Informatin page.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="visa_list_item">
                                <p><span>2</span>Once the required documents for visa application of your desired country is ready, submit it at our office.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="visa_list_item">
                                <p><span>3</span>If Visa is approved, collect your visa stamped passport from VISA Thing's office.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container what_visa_things">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="visa_this_left">
                                <h4>What is ITS</h4>
                                <p>ITS is a Premium Visa Facilitating Service for Bangladeshi citizens. It brings travelers the ease and convenience of processing Visas for over 70 countries that do not have an Embassy in Bangladesh</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <ul class="visa_think_link">
                                <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Dedicated Expert Help</a></li>
                                <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Guaranteed Privacy & Security</a></li>
                                <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>No Hidden Fees</a></li>
                                <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Prompt Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php
    endwhile;
endif;
?>

<?php get_footer(); ?>