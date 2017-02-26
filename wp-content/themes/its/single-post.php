<?php
$timezone = +6;
$today = gmdate("j M Y", time() + 3600 * ($timezone + abs(date("I") - 1)));
get_header();
while (have_posts()) : the_post();
    ?>      
    <main class="inner">
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
            <div class="main_content events">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="page_heading"><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        if (get_post_meta($post->ID, 'event_end_date', true)) {
                            ?>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="enents_item">
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <figure>
                                                <?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
                                            </figure>
                                        </div>
                                        <div class="col-xs-12 col-sm-8 col-md-8">
                                            <div class="event_details">
                                                <p>
                                                    <?php
                                                    echo get_the_content();
                                                    $start_event = strtotime(get_post_meta($post->ID, 'event_start_date', true));
                                                    $end_event = strtotime(get_post_meta($post->ID, 'event_end_date', true));
                                                    $today_date = strtotime($today);
                                                    $going_date = $end_event - $start_event;
                                                    $going_event = $start_event + $going_date;
                                                    ?>
                                                    <span><?php echo get_post_meta($post->ID, 'event_start_date', true); ?></span>
                                                    <b><?php
                                                        if ($today_date < $start_event) {
                                                            echo "Upcomming Events";
                                                        } elseif ($today_date < $going_event) {
                                                            echo "Ongoing Event";
                                                        } else {
                                                            echo "Closed Event";
                                                        }
                                                        ?></b>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="enents_item">
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <figure>
                                                <?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
                                            </figure>
                                        </div>
                                        <div class="col-xs-12 col-sm-8 col-md-8">
                                            <div class="event_details">
                                                <p>
                                                    <?php
                                                    echo get_the_content();
                                                    ?>
                                                    <span><?php echo get_post_meta($post->ID, 'event_start_date', true); ?></span>
                                                </p>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </main>
<?php endwhile;
?>
<?php get_footer(); ?>