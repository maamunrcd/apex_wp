<?php
get_header();
while (have_posts()) : the_post();
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
    <section id="company-about" style="background: url('<?=$defoult_file; ?>') no-repeat scroll center top / 100% auto;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h3 class="brat_cumb"><?php echo get_the_title(); ?></h3>
                </div>
                <div class="col-sm-6 col-md-6">
                    <ol class="breadcrumb brat_cumb pull-right">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(home_url('/'));
    echo get_post_type(get_the_ID())
    ?>"><?php echo get_post_type(get_the_ID()); ?></a></li>
                        <li class="active"><?php the_title(); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section id="text-about">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
    <?php the_content(); ?>
                </div>
                <div class="col-md-4">
                    <div class="link-panel">
                        <ul>
                            <?php
                            $post_name = get_post_type(get_the_ID());
                            if ($post_name == "post") {
                                ?>
                                <div class="link-panel">
                                    <ul>
                                        <li>Recent Related News </li>
                                        <?php
                                        $post_list = array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 2,
                                            'order' => 'DSC'
                                        );
                                        $post_list_loop = new WP_Query($post_list);
                                        while ($post_list_loop->have_posts()) : $post_list_loop->the_post();
                                            ?>
                                            <li>
                                                <a href="<?php the_permalink(); ?>">
            <?php echo get_the_title(); ?>
                                                </a>
                                            </li>
                                            <?php
                                        endwhile;
                                        ?>
                                    </ul>
                                </div>
                                <?php
                            }else {
                                ?>
                                <li>Industries Our <?= get_post_type(get_the_ID()) ?></li>
                                <?php
                                $post_list = array(
                                    'post_type' => get_post_type(get_the_ID()),
                                    'posts_per_page' => 8,
                                    'order' => 'DSC'
                                );
                                $post_list_loop = new WP_Query($post_list);
                                while ($post_list_loop->have_posts()) : $post_list_loop->the_post();
                                    ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
            <?php echo get_the_title(); ?>
                                        </a>
                                    </li>
                                    <?php
                                endwhile;
                                ?>
                            </ul>
                        </div>
                        <div class="link-panel">
                            <ul>
                                <li>Recent Related News </li>
                                <?php
                                $post_list = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 2,
                                    'order' => 'DSC'
                                );
                                $post_list_loop = new WP_Query($post_list);
                                while ($post_list_loop->have_posts()) : $post_list_loop->the_post();
                                    ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
            <?php echo get_the_title(); ?>
                                        </a>
                                    </li>
                                    <?php
                                endwhile;
                                ?>
                            </ul>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile;
?>
<?php get_footer(); ?>