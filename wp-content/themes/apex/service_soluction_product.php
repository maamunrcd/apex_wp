<?php
/*
 * Template Name:All Service Soluction Product Page
 *
 * The template for All Service Soluction Product Page
 *
 * This is the template that displays All Service Soluction Product.
 *
 */
get_header();
if (class_exists('MultiPostThumbnails')) {
        $image_name = 'feature-image-2';  // sets image name as feature-image-1, feature-image-2 etc.
        if (MultiPostThumbnails::has_post_thumbnail('page', $image_name)) {
            $image_id = MultiPostThumbnails::get_post_thumbnail_id('page', $image_name, $post->ID);  // use the MultiPostThumbnails to get the image ID
            $image_feature_url = wp_get_attachment_image_src($image_id, 'feature-image'); // define full size src based on image ID
        }
    }; // end if MultiPostThumbnails 
    $defoult_file = get_template_directory_uri() . '/assets/images/inner-pagebg.jpg';
    if (empty($image_feature_url[0])) {
        $print_img = $defoult_file;
    } else {
        $print_img = $image_feature_url[0];
    }
?>
    <section id="company-about" style="background: url('<?=$print_img; ?>') no-repeat scroll center top / 100% auto;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h3 class="brat_cumb"><?php echo get_the_title(); ?></h3>
                </div>
                <div class="col-sm-6 col-md-6">
                    <ol class="breadcrumb brat_cumb pull-right">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li class="active"><?php the_title(); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php
                    while ( have_posts() ) : the_post(); ?>
                       <?php the_content(); ?>

                        <?php
                    endwhile; //resetting the page loop
                    wp_reset_query(); //resetting the page query
                    ?>
                </div>
            </div>
            <div class="row">
                <?php
                $all_soluction = array(
                    'post_type' =>get_the_title(),
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                );
                $all_soluction_loop = new WP_Query($all_soluction);
                while ($all_soluction_loop->have_posts()) : $all_soluction_loop->the_post();
                    $page_title=get_the_title();
                        ?>
                        <div class="col-sm-4 col-md-4">
                            <div class="thumbnail">
                                <div class="thum-img">
                                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                </div>
                                <div class="caption">
                                    <h3><?php the_title(); ?></h3>
                                    <?php
                                    $content=get_the_excerpt();
                                    $conent_array=explode(" ", $content);
                                    $conent_slice=array_slice($conent_array,0,45);
                                    $ready_content=implode(" ",$conent_slice);


                                    ?>
                                    <p><?=$ready_content; ?></p>
                                    <p><a href="<?=the_permalink();?>">Read More <i class="fa fa-caret-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    ?>
                    <?php
                endwhile;
                ?>
            </div>
        </div>
    </section>

    <!-- footer -->
<?php
get_footer();
?>