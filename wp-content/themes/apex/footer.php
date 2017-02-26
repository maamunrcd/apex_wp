<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="atom-logo">
                    <?php $logo_url = get_option('logo_url'); ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img class="img-responsive" src="<?php echo ($logo_url == '') ? esc_url(get_template_directory_uri()) . '/assets/images/logo.png' : $logo_url ?>" alt="" />
                    </a>
                    <a class="navbar-brand page-scroll" href="<?php echo ($logo_url == '') ? esc_url(get_template_directory_uri()) . '/assets/images/atomap-logo.png' : $logo_url ?><?php echo esc_url(home_url('/')); ?>"></a>
                </div>
                <ul class="social_icon">
                    <li class="active"><a target="_blank" href="https://www.facebook.com/<?= $facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/<?= $twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/<?= $youtube; ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/<?= $instagram; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-5 col-md-5">
                <div class="atom-logo">
                    <?php
                    $about_text = get_option('about_text');
                    $footer_about_title = get_option('footer_about_title');
                    ?>
                    <h3><?=$footer_about_title?></h3>
                    <?=$about_text;?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="atom-logo">
                    <h3>Recent Post</h3>
                    <ul>
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
                                <a href="<?php the_permalink();?>">
                                    <?php echo get_the_title(); ?>
                                </a>
                            </li>
                            <?php
                        endwhile;
                        ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p><?=$copyright_text?></p>
                </div>
                <div class="col-sm-4"><p> � Powered www.delphiware.com</p></div>
                <div class="col-sm-4">
                    <p></p>
                </div>
            </div>
        </div>

    </div>
</section>
<?php wp_footer(); ?>
</body>
</html>

