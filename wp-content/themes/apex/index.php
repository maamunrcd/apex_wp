<?php
/*
 * Template Name: home
 *
 * The template for Home Page
 *
 * This is the template that displays Home Page.
 *
 */
get_header();
?>

<!-- Intro Section -->
<section id="slider" class="creb" data-animate="fadeInUp" data-animation-delay="100">
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php

            $sliders = array(
                'post_type' => 'slider',
                'posts_per_page' => 3,
                'order' => 'DSC'
            );
            $active_slider = 1;
            $sliders_loop = new WP_Query($sliders);
            while ($sliders_loop->have_posts()) : $sliders_loop->the_post();
                ?>
                <div class="item <?php echo $active_slider==1?'active':'' ?>">
                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                    <div class="carousel-caption headings">
                        <h3 class="creb" data-animate="fadeInUp" data-animation-delay="500"><b >
                                <?php
                                    $string=get_the_title();
                                ?>
                                <?php echo wordwrap($string,25,"<br>"); ?></b>
                        </h3>
                        <p class="creb animated fadeInDown" data-animate="fadeInDown" data-animation-delay="800" style="animation-delay: 800ms;">
                            <?php
                            $paragr=get_the_excerpt();
                            ?>
                            <?php echo wordwrap($paragr,65,"<br>"); ?></b>
                        </p>
                       </div>
                </div>
                <?php
                $active_slider =$active_slider+1;
            endwhile;
            ?>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</section>

<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="row">
            <?php if (is_active_sidebar('welcome_apex_msg')) : ?>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <?php dynamic_sidebar('welcome_apex_msg'); ?>   
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services">
    <div class="container">
        <div class="row">
            <?php
            $services_category = array(
                'post_type' => 'page',
                'posts_per_page' => -1,
                'order' => 'ASC'
            );
            $services_category_loop = new WP_Query($services_category);
            while ($services_category_loop->have_posts()) : $services_category_loop->the_post();
                $page_title=get_the_title();
                if($page_title=="Solutions" || $page_title=="Projects" || $page_title=="Industries"){
                    ?>
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <div class="thum-img">
                                <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                            </div>
                            <div class="caption">
                                <h3><?php the_title(); ?></h3>
                                <?php
                                    $content=get_the_content();
                                    $conent_array=explode(" ", $content);
                                $conent_slice=array_slice($conent_array,0,45);
                                $ready_content=implode(" ",$conent_slice);


                                ?>
                                <p><?=$ready_content;?></p>
                                <p><a href="<?=the_permalink();?>">Read More <i class="fa fa-caret-right"></i></a></p>
                            </div>
                        </div>
                    </div>
            <?php
                }else{

                }
                ?>
                <?php
            endwhile;
            ?>
        </div>
    </div>
</section>
<section id="meet">
    <?php
    $welcome_message_title = get_option('welcome_message_title');
    $welcome_message = get_option('welcome_message');
    $welcome_message_image = get_option('welcome_message_image');
    $details_page_url = get_option('details_page_url');
    ?>
    <div class="container">
        <div class="col-md-6">
            <h1><?=$welcome_message_title;?></h1>
            <p><?=$welcome_message?></p>
            <br />
            <a class="sea-btn" href="<?=$details_page_url;?>">SEE OUR LATEST WORK</a>
        </div>
        <div class="col-md-6 creb" data-animate="fadeInRight" data-animation-delay="500">
            <div class="company_pro">
                <img src="<?=$welcome_message_image;?>" alt="icon" />
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
<section id="since">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>We are since 2016</p>
                <h3>THE STARTING POINT OF ALL ACHIVEMENT IS DESIRE</h3>
                <a class="btn btn-default subbutton" href="<?php home_url() ?>/about-us">View More</a>
            </div>
        </div>
    </div>
</section>
<section id="boxer">
    <div class="container">
        <div class="row">
            <?php
            $page_banner_list = array(
                'post_type' => 'page_banner',
                'posts_per_page' => 2,
                'order' => 'DSC'
            );
            $page_banner_list_loop = new WP_Query($page_banner_list);
            while ($page_banner_list_loop->have_posts()) : $page_banner_list_loop->the_post();
                ?>
                <div class="col-md-6">
                    <a href="<?php echo get_the_excerpt(); ?>">
                        <div class="box">
                            <?php
                            echo the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                            ?>
                            <div class="text-content">
                                <h4><?php the_title();?></h4>
                                <p><?=get_the_content();?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            endwhile;
            ?>
        </div>
    </div>
</section>
<section id="social-box">
    <div class="container">
        <div class="social-address">
            <div class="row">
                <?php
                $packages_status = array(
                    'post_type' => 'projects',
                    'posts_per_page' => -1,
                    'order' => 'DSC'
                );
                $running_project=0;
                $pending_project=0;
                $finished_project=0;
                $packages_status_loop = new WP_Query($packages_status);
                while ($packages_status_loop->have_posts()) : $packages_status_loop->the_post();
                    $project_status=get_post_meta($post->ID, 'project_status', true);
                    if($project_status=="running"){
                        $running_project=$running_project+count($project_status);
                    }else if($project_status=="pending"){
                        $pending_project=$pending_project+count($project_status);
                    }else if($project_status=="finished"){
                        $finished_project=$finished_project+count($project_status);
                    }
                    ?>

                    <?php
                endwhile;
                ?>
                <div class="col-md-4">
                    <center>
                        <div id="shiva"><span class="count"><?=$running_project;?></span></div>
                        <h5>Running Project</h5>
                    </center>
                </div>
                <div class="col-md-4">
                    <center>
                        <div id="shiva"><span class="count"><?=$pending_project;?></span></div>
                        <h5>Pending Project</h5>
                    </center>
                </div>
                <div class="col-md-4">
                    <center>
                        <div id="shiva"><span class="count"><?=$finished_project;?></span></div>
                        <h5>Finished Project</h5>
                    </center>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php
get_footer();
?>
