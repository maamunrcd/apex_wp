<?php
/*
 * Template Name:Events
 * 
 * The template for All Events
 *
 * This is the template that displays all Events.
 *
 */
get_header();
$timezone = +6;
$today = gmdate("j M Y", time() + 3600 * ($timezone + abs(date("I") - 1)));
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
                    $categories = get_the_category();
 
var_dump($categories);
                    exit();
                    $events = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                        'category' => 8
                    );
                    $packges_item_loop = new WP_Query($events);
                    while ($packges_item_loop->have_posts()) : $packges_item_loop->the_post();
                        if ($today < strtotime(get_post_meta($post->ID, 'event_start_date', true))) {
                            ?>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="enents_item">
                                        <div class="col-md-5">
                                            <figure>
                                                <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/demo.jpg" alt="The Pulpit Rock">
                                            </figure>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="event_details">
                                                <h3><a href=""><?php echo get_the_title(); ?></a></h3>
                                                <p>
                                                    <?php
                                                    echo get_the_content();
                                                    $start_event = strtotime(get_post_meta($post->ID, 'event_start_date', true));
                                                    $end_event = strtotime(get_post_meta($post->ID, 'event_end_date', true));
                                                    $today_date = strtotime($today);
                                                    $going_date = $end_event - $start_event;
                                                    $going_event = $start_event + $going_date;
                                                    ?>
                                                    <span><?php echo $today; ?></span>
                                                    <b><?php
                                                        if ($today_date < $start_event) {
                                                            echo "Upcomming";
                                                        } elseif ($today_date < $going_event) {
                                                            echo "Ongoing Event";
                                                        } else {
                                                            echo "Closed  Event";
                                                        }
                                                        ?></b>
                                                </p>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
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
</main>
<?php
get_footer();
?>