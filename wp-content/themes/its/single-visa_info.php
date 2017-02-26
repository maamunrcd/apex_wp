<?php
get_header();
while (have_posts()) : the_post();
    ?>
    <main class="contry_visa_info">
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
        <?php
    endwhile;
    ?>
    <div class="main_content">
        <div class="container">
            <div class="row">
                <div class="country_information">
                    <div class="select_country col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="dropdown text-center">
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
                        <?php
                        while (have_posts()) : the_post();
                            ?>
                            <?php echo get_the_excerpt(); ?>
                            <div class="country_details_section">
                                <p class="country_details text-left">
                                    Country Details
                                </p>
                                <div class="country_details_info">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <p class="details_title">Country Name<span>:</span></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="details_content"><?= get_the_title(); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <p class="details_title">Capital City<span>:</span></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="details_content"><?php echo get_post_meta($post->ID, 'country_capital_city', true); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <p class="details_title">Currency<span>:</span></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="details_content"><?php echo get_post_meta($post->ID, 'country_currency', true); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <p class="details_title">Local Time<span>:</span></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="details_content"><?php echo get_post_meta($post->ID, 'country_local_time', true); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <p class="details_title">Telephone Code <span>:</span></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="details_content"><?php echo get_post_meta($post->ID, 'country_telephone_code', true); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <p class="details_title">Bank<span>:</span></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="details_content"><?php echo get_post_meta($post->ID, 'country_bank', true); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <p class="details_title">Exchange Rate<span>:</span></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="details_content"><?php echo get_post_meta($post->ID, 'country_exchange_rate', true); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <div class="application_section">
                                <figure class="thumbnail_image">
                                    <?php
                                    the_post_thumbnail('full', array('class' => 'img-responsive'));
                                    ?>
                                </figure>
                                <div class="country_name_and_details">
                                    <h3 class="country_title"><?= get_the_title(); ?></h3>
                                    <p class="continents_name">
                                        <?php echo get_post_meta($post->ID, 'containest', true); ?>
                                        <span class="line">|</span>
                                        <a href="#"><?= get_the_title() == "Bangladesh" ? "Schengen Visa Countries" : ""; ?></a>
                                    </p>
                                    <p class="pudate_date">
                                        <?php if (get_the_modified_time() != get_the_time()) : ?>
                                            <span>Last Update</span>
                                            <span class="line">:</span>
                                            <span><?php the_modified_time('F j, Y'); ?> at <?php the_modified_time('g:i a'); ?></span>
                                        <?php else: ?>
                                        <?php endif; ?>
                                    </p>
                                </div>
                                <div class="visiting_facilitys">
                                    <?php the_content(); ?>
                                </div>
                                <div class="contry_social_info">
                                    <ul>
                                        <?php $current_url = get_the_permalink(); ?>
                                        <li><a class="fb_bg" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($current_url); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span>Share</span></a></li>
                                        <li><a class="twit_bg" href="https://twitter.com/intent/tweet?text=<?php echo the_title(); ?>&url=<?php echo urlencode($current_url); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span>Share</span></a></li>
                                        <li><a class="g_plus_bg" href="https://plus.google.com/share?url=<?php echo urlencode($current_url); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i><span>Share</span></a></li>
                                        <li><a class="link_bg" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($current_url); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i><span>Share</span></a></li>
                                        <li><a class="pint_bg" href="https://www.pinterest.com/pin/create/button/?url=<?php echo urlencode($current_url); ?>" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i>Share</span></a></li>
                                    </ul>
                                </div>
                                <?php
                                $containest = get_post_meta($post->ID, 'containest', true);
                            endwhile;
                            ?>
                            <div class="some_more_popular">
                                <p class="visiting_facilitys_title">Some more popular destinations</p>
                                <p>Please click on the flags for detailed checklist.</p>
                                <div class="row">
                                    <?php
                                    $visa_info_country_list = array(
                                        'post_type' => 'visa_info',
                                        'posts_per_page' => -1,
                                        'order' => 'ASC'
                                    );
                                    $visa_info_country_list_loop = new WP_Query($visa_info_country_list);
                                    while ($visa_info_country_list_loop->have_posts()) : $visa_info_country_list_loop->the_post();
                                        if ($containest == get_post_meta($post->ID, 'containest', true)) {
                                            ?>
                                            <div class="county_flat_item col-sm-3 col-md-2 col-lg-2">
                                                <div class="thumbnail text-center">
                                                    <?php
                                                    if (class_exists('MultiPostThumbnails')) {
                                                        $image_name = 'feature-image-' . 2;  // sets image name as feature-image-1, feature-image-2 etc.
                                                        if (MultiPostThumbnails::has_post_thumbnail('visa_info', $image_name)) {
                                                            $image_id = MultiPostThumbnails::get_post_thumbnail_id('visa_info', $image_name, $post->ID);  // use the MultiPostThumbnails to get the image ID
                                                            $image_thumb_url = wp_get_attachment_image_src($image_id, 'small-thumb');  // define thumb src based on image ID
                                                            $image_feature_url = wp_get_attachment_image_src($image_id, 'feature-image'); // define full size src based on image ID
                                                            $attr = array(
                                                                'class' => "folio-sample", // set custom class
                                                                'rel' => $image_thumb_url[0], // sets the url for the image thumbnails size
                                                                'src' => $image_feature_url[0], // sets the url for the full image size 
                                                            );
                                                            $image = wp_get_attachment_image($image_id, 'feature-image', false, $attr);

                                                            echo $image;
                                                        }
                                                    }; // end if MultiPostThumbnails 
                                                    ?>
                                                    <div class="caption">
                                                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                                    </div>
                                                </div>

                                            </div>
                                            <?php
                                        }
                                    endwhile;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </main>
            <?php
            get_footer();
            ?>