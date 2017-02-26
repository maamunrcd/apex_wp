<?php
/*
 * Template Name:services
 * 
 * The template for Services Page
 *
 * This is the template that displays all Services.
 *
 */
get_header();
?>      
<main class="others_services">
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
                    <h1 class="page_heading sj" data-animate="fadeInUp" data-animation-delay="200"><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="row">
                <?php
                $service_item_details = array(
                    'post_type' => 'others_services',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                );
                $service_item_speed = 2;
                $service_loop = new WP_Query($service_item_details);
                while ($service_loop->have_posts()) : $service_loop->the_post();
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 sj" data-animate="fadeInUp" data-animation-delay="<?= $service_item_speed ?>00">
                        <div class="row others_services_item">
                            <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
                                <i class="fa fa-<?php echo get_the_excerpt(); ?>" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-8 col-sm-12 col-md-8 col-lg-8">
                                <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                                <p class="paragraph">
                                    <?php echo get_the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    $service_item_speed++;
                endwhile;
                ?>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>