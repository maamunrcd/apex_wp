<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header();
$timezone = +6;
$today = gmdate("j M Y", time() + 3600 * ($timezone + abs(date("I") - 1)));

global $wp_query;
$tax = get_query_var('category');
$term = get_query_var('term');
$defaults = array(
    'post_type' => 'post',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'meta_key' => 'custom_order',
    'tax_query' => array(
        array(
            'taxonomy' => $tax,
            'field' => 'slug',
            'terms' => $term,
        ),
    ),
);

$serviceQuery = new WP_Query($defaults);
?>        
<main class="inner">
    <div class="breadcrumb_cont">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li class="active"><?php single_cat_title(); ?></li>
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
                        <h1 class="page_heading"><?php single_cat_title(); ?></h1>
                    </div>
                </div>
                <div class="row">
                    <?php if (have_posts()): ?>            
                        <?php
                        while (have_posts()):the_post();
                            if (get_post_meta($post->ID, 'event_end_date', true)) {
                                ?>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="enents_item">
                                            <div class="col-md-5">
                                                <figure>
                                                    <?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
                                                </figure>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="event_details">
                                                    <h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                                                    <p>
                                                        <?php
                                                        $content = get_the_content();
                                                        $get_content = substr($content, 0, 100);
                                                        echo $get_content . "....";

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
                                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="enents_item">
                                            <div class="col-md-5">
                                                <figure>
                                                    <?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
                                                </figure>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="event_details">
                                                    <h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                                                    <p>
                                                        <?php
                                                        $content = get_the_content();
                                                        $get_content = substr($content, 0, 100);
                                                        echo $get_content . "....";
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
                        endwhile;
                        ?>
                        <?php
                    else:
                        echo "No Content In This Category";
                    endif;
                    ?>

                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>
<?php get_footer(); ?>
