<?php
/*
 * Template Name:Category Packges
 * 
 * The template for All Category Packges
 *
 * This is the template that displays all Category Packges.
 *
 */
get_header();
?>        
<main class="our_packages_list">
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
    <div class="contain_section">
        <div class="main_content our_packages">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="page_heading"><?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $packges_item_details = array(
                        'post_type' => 'packeges',
                        'posts_per_page' => -1,
                        'order' => 'ASC'
                    );
                    $package_item_speed = 2;
                    $packges_item_loop = new WP_Query($packges_item_details);
                    while ($packges_item_loop->have_posts()) : $packges_item_loop->the_post();
                        ?>
                        <div class="packages_item col-xs-12 col-sm-6 col-md-4 sj" data-animate="fadeInUp" data-animation-delay="<?php echo $speed; ?>00">
                            <div class="item">
                                <figure>
                                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                </figure>
                                <div class="row packages_info">
                                    <div class="col-xs-12">
                                        <?php
                                        $class = get_post_meta($post->ID, 'pkg_offer', true);
                                        if (!empty($class)) {
                                            ?>
                                            <span class="tag"><?= $class ?></span>
                                            <?php
                                        }
                                        ?>
                                        <div class="col-xs-4 pkg_item pkg_day"><a href="#"><?php echo get_post_meta($post->ID, 'pkg_type', true); ?></a></div>
                                        <div class="col-xs-4 pkg_item pkg_group"><a href="#"><?php echo get_post_meta($post->ID, 'pkg_duration', true); ?></a></div>
                                        <div class="col-xs-4 pkg_item pag_price"><a href="#"><?php echo get_post_meta($post->ID, 'pkg_adart_price', true); ?></a></div>
                                    </div>
                                </div>
                                <div class="packages_details">
                                    <h3><a href="#">Thailand holyday package</a></h3>
                                    <p class="paragraph">
                                        <?php
                                        $content = get_the_content();
                                        $exp = explode(' ', $content);
                                        $array_slice = array_slice($exp, 0, 22);
                                        $impload = implode(' ', $array_slice);
                                        echo $impload;
                                        ?>
                                    </p>
                                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        $package_item_speed++;
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>