<?php
get_header();
while (have_posts()) : the_post();
    ?>
    <main class="our_package_details message_form_company_emp">
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
                        <h1 class="page_heading">Message from <?php echo get_post_meta($post->ID, 'employee_designation', true); ?></h1>
                    </div>
                </div>
                <div class="message_section row">
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3">
                        <div class="messager_img sj" data-animate="fadeInUp" data-animation-delay="200">
                            <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
                        </div>
                        <div class="emp_name">
                            <h3><?php echo get_the_title();?></h3>
                            <p><?php echo get_post_meta($post->ID, 'employee_designation', true); ?></p>     
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-7 col-md-8 col-lg-9">
                        <div class="the_content sj" data-animate="fadeInUp" data-animation-delay="200">
                            <p class="paragraph"><?php echo get_the_content();?></p>
                            <div class="social_links_personal">
                                <h5 class="social_flow">Follow Me</h5>
                                <ul>
                                    <li><a data-toggle="tooltip" data-placement="top" title="<?php echo get_post_meta($post->ID, 'employee_phone_number', true); ?>" href="tel:<?php echo get_post_meta($post->ID, 'employee_phone_number', true); ?>"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                                    <li><a data-toggle="tooltip" data-placement="top" title="<?php echo get_post_meta($post->ID, 'employee_email_id', true); ?>" href="mailto:<?php echo get_post_meta($post->ID, 'employee_email_id', true); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a data-toggle="tooltip" data-placement="top" target="_blank" title="<?php echo get_post_meta($post->ID, 'employee_fb_id', true); ?>" href="https://www.facebook.com/<?php echo get_post_meta($post->ID, 'employee_fb_id', true); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a data-toggle="tooltip" data-placement="top" target="_blank" title="<?php echo get_post_meta($post->ID, 'employee_twi_id', true); ?>" href="https://twitter.com/<?php echo get_post_meta($post->ID, 'employee_twi_id', true); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a data-toggle="tooltip" data-placement="top" target="_blank" title="<?php echo get_post_meta($post->ID, 'employee_linkedin_id', true); ?>" href="https://www.linkedin.com/<?php echo get_post_meta($post->ID, 'employee_linkedin_id', true); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a data-toggle="tooltip" data-placement="top" target="_blank" title="<?php echo get_post_meta($post->ID, 'employee_googlePlus_id', true); ?>" href="<?php echo get_post_meta($post->ID, 'employee_googlePlus_id', true); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
endwhile;
get_footer();
?>


