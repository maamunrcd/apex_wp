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


<!--Slider Start -->
<section class="slider">
    <?php putRevSlider("slider", "home") ?>
</section><!--Slider End -->
<main>
    <div class="contain_section">
        <section class="section welcome_msg">
            <div class="container">
                <div class="row">
                    <?php if (is_active_sidebar('welcome_itsholydays_msg')) : ?>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <?php dynamic_sidebar('welcome_itsholydays_msg'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="section our_packages">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h1 class="first_heading">Our Packages</h1>
                    </div>
                </div>
                <div class="jcarousel-wrapper">
                    <div class="jcarousel our_packages_items">
                        <ul>
                           
                        </ul>
                    </div>
                    <a href="#" class="jcarousel-control-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                    <a href="#" class="jcarousel-control-next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    <p class="jcarousel-pagination"></p>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <a class="view_all btn btn-primary" href="<?php echo esc_url(home_url('/')); ?>packages/">VIEW ALL PACKAGES</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="special_offer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12 sj" data-animate="fadeInLeft" data-animation-delay="200">
                        <div id="special_offer" class="carousel slide" data-ride="carousel">
                            <?php
                            $spacial_packeges = array(
                                'post_type' => 'packeges',
                                'posts_per_page' => -1,
                                'order' => 'ASC'
                            );
                            $spacial_packeges_loop = new WP_Query($spacial_packeges);
                            $actives = 1;
                            $bullet_actives = 0;
                            ?>
                            <!-- Indicators for special offer -->
                            <ol class="carousel-indicators">
                                <?php
                                while ($spacial_packeges_loop->have_posts()) : $spacial_packeges_loop->the_post();
                                    $cheack = get_post_meta($post->ID, 'pkg_cat', true);
                                    if ($cheack == "spacial") {
                                        ?>
                                        <li data-target="#special_offer" data-slide-to="<?php echo $bullet_actives; ?>" class="<?php echo $bullet_actives == 0 ? 'active' : ''; ?>"></li>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                    $bullet_actives ++;
                                endwhile;
                                ?>
                            </ol><!--End Indicators for special offer -->

                            <!-- Wrapper for Special Offer -->
                            <div class="sj carousel-inner" role="listbox" data-animate="fadeInLeft" data-animation-delay="200">
                                <?php
                                while ($spacial_packeges_loop->have_posts()) : $spacial_packeges_loop->the_post();
                                    $cheack = get_post_meta($post->ID, 'pkg_cat', true);
                                    if ($cheack == "spacial") {
                                        ?>
                                        <div class="item <?php echo $actives == 1 ? 'active' : ''; ?>">
                                            <div class="packages_item">
                                                <h5>from <?php echo get_post_meta($post->ID, 'pkg_adart_price', true); ?></h5>
                                                <div class="rateing">
                                                    <?php
                                                    $star_length = strlen(get_post_meta($post->ID, 'pkg_ratting', true));
                                                    for ($len = 1; $len <= $star_length; $len++) {
                                                        ?><i class = "fa fa-star" aria-hidden = "true"></i>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <h3><a href="<?php echo get_post_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                                                <p><b><?php echo get_post_meta($post->ID, 'pkg_departure_date', true); ?></b> to <b><?php echo get_post_meta($post->ID, 'pkg_return_date', true); ?></b></p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    $actives ++;
                                endwhile;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style type="text/css">
            .carousel-control.left,.carousel-control.right{
                background:none;
            }
            .hot_offers{
                background:#efefef;
                padding:20px 0 50px;
                text-align: left;
            }
            .hot_offers h2{
                margin: 30px 0 15px 0;
                color:#0091d2;
                font-size:22px;
            }
            .hot_offers .item h4{
                margin: 0;
                background:#0091d2;
                color:white;
            }
            .hot_offers .item .image{
                height:350px;
                overflow:hidden;
                background: #0091d2;
            }
            .hot_offers .item .image img{
                min-height: 350px;
            }
            .hot_offers .item h4 a{
                display:block;
                padding:15px;
            }
            .hot_offers .item ul{
                padding: 0 0 0 40px;
            }
            .hot_offers .item li{
                list-style: square;
                margin-bottom:15px;
            }
            .hot_offers .carousel-indicators{
                bottom:-30px;
            }
        </style>
        <div class="hot_offers">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <h2>Special Air ticket offer</h2>
                        <div id="special_air_ticket" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img class="img-responsive" src="http://itsholidaysltd.com/wp-content/uploads/2016/12/paris-eiffel-tower-pictures-hd-wallpaper.jpg" alt="" />
                                    <h4 class="title"><a href="#">Title will come here.</a></h4>
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="http://itsholidaysltd.com/wp-content/uploads/2016/12/paris-eiffel-tower-pictures-hd-wallpaper.jpg" alt="" />
                                    <h4 class="title"><a href="#">Title will come here.</a></h4>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#special_air_ticket" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#special_air_ticket" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <h2>Special package Offer</h2>
                        <div id="special_offer_2" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <?php
                                $actives = 1;
                                while ($spacial_packeges_loop->have_posts()) : $spacial_packeges_loop->the_post();
                                    $cheack = get_post_meta($post->ID, 'pkg_cat', true);
                                    if ($cheack == "spacial") {
                                        ?>
                                        <div class="item <?= ($actives == 1) ? 'active' : '' ?>">
                                            <div class="image"><img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-responsive" /></div>
                                            <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        </div>
                                        <?php
                                        $actives ++;
                                    }
                                endwhile;
                                ?>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#special_offer_2" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#special_offer_2" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <h2>News and Event</h2>
                        <div id="news_event" class="carousel slide" data-ride="carousel">
                            <img src="http://itsholidaysltd.com/wp-content/uploads/2017/02/news-events.jpg" alt="" class="img-responsive" />
                            <br />
                            <br />
                            <?php
                            $args = array(
                                'post_type' => 'news',
                                'posts_per_page' => -1
                            );
                            $sr1 = 0;
                            $loop = new WP_Query($args);
                            ?>
                            <ol class="carousel-indicators">
                                <?php
                                while ($loop->have_posts()) : $loop->the_post();
                                    ?>
                                    <li data-target="#news_event" data-slide-to="<?= $sr1 ?>" class="<?= ($sr1 == 0) ? 'active' : '' ?>"></li>
                                    <?php
                                    $sr1++;
                                endwhile;
                                ?>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <?php
                                $sr = 0;
                                while ($loop->have_posts()) : $loop->the_post();
                                    ?>
                                    <div class="item <?= ($sr == 0) ? 'active' : '' ?>">
                                        <?php the_content(); ?>
                                    </div>
                                    <?php
                                    $sr++;
                                endwhile;
                                ?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <h2>Upcoming Destination</h2>
                        <div id="upcoming_destination" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <?php
                                $actives = 1;
                                while ($spacial_packeges_loop->have_posts()) : $spacial_packeges_loop->the_post();
                                    $cheack = get_post_meta($post->ID, 'pkg_cat', true);
                                    if ($cheack == "upcoming") {
                                        ?>
                                        <div class="item <?= ($actives == 1) ? 'active' : '' ?>">
                                            <div class="image"><img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-responsive" /></div>
                                            <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        </div>
                                        <?php
                                        $actives ++;
                                    }
                                endwhile;
                                ?>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#upcoming_destination" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#upcoming_destination" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="item sj animated fadeInRight" data-animate="fadeInRight" data-animation-delay="400" style="animation-delay: 400ms;">
            <section class="section paper_add">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <h1 class="first_heading">Hot Deal</h1>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $paper_add = array(
                            'post_type' => 'paper_add',
                            'posts_per_page' => 2,
                            'order' => 'ASC'
                        );
                        $paper_item_speed = 1;
                        $paperAdd_loop = new WP_Query($paper_add);
                        $word_even = 0;
                        while ($paperAdd_loop->have_posts()) : $paperAdd_loop->the_post();
                            $paper_item_speed = $paper_item_speed + 2;
                            ?>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="paper_additem sj" data-animate="<?php echo ($word_even % 2 == 0) ? "fadeInLeft" : "fadeInRight"; ?>" data-animation-delay="<?php echo ($paper_item_speed >= 9) ? '7' : $paper_item_speed; ?>00">
                                    <a onclick="addTile(this);" data-toggle="modal" data-title="<?php the_title(); ?>" data-target="#ad_modal" href="#">
                                        <?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
                                    </a>
                                </div>
                            </div>
                            <?php
                            $word_even++;
                        endwhile;
                        ?>
                        <script type="text/javascript">
                            function addTile(THIS) {
                                var title = jQuery(THIS).attr('data-title');
                                var image = jQuery(THIS).children().attr('src');
                                jQuery(document).ready(function() {
                                    jQuery('#ad_modal .modal-title').text(title);
                                    jQuery('#ad_modal .ad_img_lrg').attr('src', image);
                                })
                            }
                        </script>
                    </div>
                </div>
            </section>
            <section class="section our_partners">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <h1 class="first_heading">Our Partners and Clients</h1>
                        </div>
                    </div>
                    <div class="jcarousel-wrapper our_partners_jcarousel">
                        <div class="jcarousel our_partner_slider">
                            <ul>
                                <?php
                                $args = array(
                                    'post_type' => 'our_partners_client',
                                    'posts_per_page' => -1,
                                    'order' => 'DESC'
                                );
                                $item_speed = 1;
                                $partners_loop = new WP_Query($args);
                                while ($partners_loop->have_posts()) : $partners_loop->the_post();
                                    ?>
                                    <li class="sj" data-animate="fadeInUp" data-animation-delay="<?php echo ($item_speed >= 9) ? '7' : $item_speed; ?>00">
                                        <a target="_blank" href="<?php echo get_the_excerpt(); ?>">
                                            <?php the_post_thumbnail(); ?>
                                            <h4><?php the_title(); ?></h4>
                                        </a>
                                    </li>
                                    <?php
                                endwhile;
                                ?>
                            </ul>
                        </div>

                        <a href="#" class="jcarousel-control-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        <a href="#" class="jcarousel-control-next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </section>
        </div>
</main>
<?php
get_footer();
?>