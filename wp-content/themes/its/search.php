<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
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
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="contain_section">
        <div class="main_content our_packages">
            <div class="container">
                <div class="row">
                    <?php if (have_posts()) : ?>

                        <?php
                        // Start the loop.
                        while (have_posts()) : the_post();
                            ?>
                            <div class="packages_item col-xs-12 col-sm-6 col-md-4">
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
                                        <h3><a href="javascript void(0)"><?php the_title(); ?></a></h3>
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
                        // End the loop.
                        endwhile;

                        // Previous/next page navigation.
                        the_posts_pagination(array(
                            'prev_text' => __('Previous page', 'its'),
                            'next_text' => __('Next page', 'its'),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'its') . ' </span>',
                        ));

                    // If no content, include the "No posts found" template.
                    else :
                        echo "No Search Reasult Found";

                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
