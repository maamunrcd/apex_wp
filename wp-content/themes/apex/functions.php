<?php
/* =====
 * Code for Main_menu_functions
  ====== */

function apex_menu_funbctions() {
    register_nav_menu('main-menu', 'Main Menu');
}

add_action('after_setup_theme', 'apex_menu_funbctions');

//Default Menu Code
function default_main_menu() {
    echo "<ul class='nav navbar-nav'>";
    echo '<li><a href="' . esc_url(home_url()) . '">Home</a></li>';
    echo "</ul>";
}

require_once ('wp_bootstrap_navwalker.php');

/* =====
 * Code for Main_menu_functions   End
  ====== */

/*========
 * Add all css and js scripts
 *========*/
function fire_scripts(){
    //Bootstrap Css
    wp_register_style('bootstrap',get_template_directory_uri().'/assets/css/assets/bootstrap.min.css');
    //scrolling_nav Css
    wp_register_style('scrolling_nav',get_template_directory_uri().'/assets/css/assets/scrolling-nav.css');
    //style Css
    wp_register_style('style',get_template_directory_uri().'/assets/css/style.css');
    //inner_page Css
    wp_register_style('inner_page',get_template_directory_uri().'/assets/css/inner-page.css');
    //animate_content Css
    wp_register_style('animate_content',get_template_directory_uri().'/assets/css/assets/animate_content.css');
    //responsive Css
    wp_register_style('responsive',get_template_directory_uri().'/assets/css/responsive.css');
    //carousel Css
    wp_register_style('carousel',get_template_directory_uri().'/assets/css/assets/carousel.css');
    //carousel Css
    wp_register_style('carousel',get_template_directory_uri().'/assets/css/assets/carousel.css');
    //font-awesome.min.css Css
    wp_register_style('font-awesome.min.css',get_template_directory_uri().'/assets/css/font-awesome.min.css.css');



    //Call Bootstrap Css
    wp_enqueue_style('bootstrap');
    //Call scrolling nav Css
    wp_enqueue_style('scrolling_nav');
    //Call style nav Css
    wp_enqueue_style('style');
    //Call inner-page Css
    wp_enqueue_style('inner_page');
    //Call animate_content Css
    wp_enqueue_style('animate_content');
    //Call responsive Css
    wp_enqueue_style('responsive');
    //Call carousel Css
    wp_enqueue_style('carousel');
    //Call font-awesome.min.css Css
    wp_enqueue_style('font-awesome.min.css');


    //Bootstrap Js
    wp_register_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js');
    //waypoints Js
    wp_register_script('waypoints',get_template_directory_uri().'/assets/js/waypoints.min.js');
    //custom Js
    wp_register_script('custom',get_template_directory_uri().'/assets/js/custom.js');

    /*Scrolling Nav JavaScript */
    //easing Js
    wp_register_script('easing',get_template_directory_uri().'/assets/js/jquery.easing.min.js');

    //scrolling Js
    wp_register_script('scrolling',get_template_directory_uri().'/assets/js/scrolling-nav.js');

    //Add jquery js
    wp_enqueue_script('jquery');
    //Add bootstrap js
    wp_enqueue_script('bootstrap');
    //Add waypoints js
    wp_enqueue_script('waypoints');
    //Add custom js
    wp_enqueue_script('custom');
    //Add easing js
    wp_enqueue_script('easing');
    //Add scrolling js
    wp_enqueue_script('scrolling');

}
add_action('wp_enqueue_scripts','fire_scripts');




//Them Options File
/* themOption file */
require_once 'themeoptions.php';


/*
 * Create Custom Post Type Slider
 * Post type is ==> Slider
 */

function slider() {
    register_post_type('slider', array(
        'labels' => array(
            'name' => __("Sliders"),
            'singular_name' => __('slider')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'slider'),
        'menu_icon' => 'dashicons-admin-page',
        'category'=>true,
        'supports' => array('title','thumbnail','author','excerpt')
    ));
}

add_action('init', slider);
function slider_meta_box() {
    remove_meta_box('postimagediv', 'slider', 'side');
    add_meta_box('postimagediv', __('Slider Image'), 'post_thumbnail_meta_box', 'slider', 'side');
}
add_action('admin_head', 'slider_meta_box');
/**
 * End Slider post
 */


/*
 * Create Custom Post Type solution
 * Post type is ==> solution
 */
function solution() {
    register_post_type('solutions', array(
        'labels' => array(
            'name' => __("Solutions"),
            'singular_name' => __('solution')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'solution'),
        'menu_icon' => 'dashicons-admin-tools',
        'category'=>true,
        'supports' => array('title','thumbnail','editor','author')
    ));
}
add_action('init', solution);
function soluction_meta_box() {
    remove_meta_box('postimagediv', 'solutions', 'side');
    add_meta_box('postimagediv', __('Solution Thumbnail Image'), 'post_thumbnail_meta_box', 'solutionss', 'side');
}
add_action('admin_head', 'soluction_meta_box');







/*
 * Create Custom Post Type Project
 * Post type is ==> Project
 */
function project() {
    register_post_type('projects', array(
        'labels' => array(
            'name' => __("Projects"),
            'singular_name' => __('projects')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'projects'),
        'menu_icon' => 'dashicons-admin-settings',
        'category'=>true,
        'supports' => array('title','thumbnail','editor','author')
    ));
}
add_action('init', project);
function project_meta_box() {
    remove_meta_box('postimagediv', 'projects', 'side');
    add_meta_box('postimagediv', __('Project Thumbnail Image'), 'post_thumbnail_meta_box', 'projects', 'side');
}
add_action('admin_head', 'project_meta_box');

////Project End

/* * ****
 * Add Metabox For Projects Post
 * **** */

function project_metabox() {
    add_meta_box(
        'test_meta_box', __('Project Status', 'packeges'), 'products_details_info', 'projects', 'normal', 'high'
    );
}

add_action('add_meta_boxes', 'project_metabox');

function products_details_info() {
    global $post;
    require 'includes/projects_meta_box.php';
}

function save_project_meta_to_post($post_id) {
    global $post;
    if ($post->post_type == 'projects') {
        update_post_meta($post_id, 'project_status', $_POST['project_status']);
    }
}

add_action('save_post', 'save_project_meta_to_post');

//End  * Project Post Type



/*
 * Multiple Featured image Pages Post.
 */
require_once('library/multi-post-thumbnails.php');
if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(array(
            'label' => 'Set Your Innerpage Banner Image',
            'id' => 'feature-image-2',
            'post_type' => 'page'
        )
    );
};
function page_meta_box() {
    remove_meta_box('postimagediv', 'page', 'side');
    add_meta_box('postimagediv', __('Page Thumnail Image'), 'post_thumbnail_meta_box', 'page', 'side');
}
add_action('admin_head', 'page_meta_box');


add_theme_support('post-thumbnails');

/*
 * End solution post type
 */


/*
 * widget for welcome message
 *
 */

function apex_Widgets_init() {
    register_sidebar(array(
        'name' => __('Welcome Message'),
        'id' => 'welcome_apex_msg',
        'description' => __('Widgets for Welcome Message'),
        'before_title' => '<div class="col-xs-12 col-sm-12">',
        'after_title' => '</div>',
    ));
}

add_action('widgets_init', 'apex_Widgets_init');




/*
 * Create Custom Post Type Slider
 * Post type is ==> Slider
 */

function page_custom_items() {
    register_post_type('page_banner', array(
        'labels' => array(
            'name' => __("Page Banner"),
            'singular_name' => __('page_banner')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'page_banner'),
        'menu_icon' => 'dashicons-images-alt2',
        'category'=>true,
        'supports' => array('title','thumbnail','editor','author','excerpt')
    ));
}

add_action('init', page_custom_items);
function page_banner_meta_box() {
    remove_meta_box('postimagediv', 'page_banner', 'side');
    add_meta_box('postimagediv', __('Banner Thumnail Image'), 'post_thumbnail_meta_box', 'page_banner', 'side');
}
function page_banner_url() {
    remove_meta_box('postexcerpt', 'page_banner', 'side');
    add_meta_box('postexcerpt', __('Banner details page Url'), 'post_excerpt_meta_box', 'page_banner',  'normal', 'high');
}
add_action('admin_head', 'page_banner_meta_box');
add_action('admin_head', 'page_banner_url');






//
/*
 * Create Custom Post Type Project
 * Post type is ==> Project
 */
function industrie() {
    register_post_type('industries', array(
        'labels' => array(
            'name' => __("Industries"),
            'singular_name' => __('industries')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'industries'),
        'menu_icon' => 'dashicons-admin-multisite',
        'category'=>true,
        'supports' => array('title','thumbnail','editor','author')
    ));
}
add_action('init', industrie);
function industries_meta_box() {
    remove_meta_box('postimagediv', 'industries', 'side');
    add_meta_box('postimagediv', __('Industries Thumbnail Image'), 'post_thumbnail_meta_box', 'industries', 'side');
}
add_action('admin_head', 'industries_meta_box');

////Project End





//
/*
 * Create Custom Post Type Project
 * Post type is ==> Project
 */
function product() {
    register_post_type('products', array(
        'labels' => array(
            'name' => __("Products"),
            'singular_name' => __('products')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'Products'),
        'menu_icon' => 'dashicons-image-rotate-right',
        'category'=>true,
        'supports' => array('title','thumbnail','editor','author')
    ));
}
add_action('init', product);
function product_meta_box() {
    remove_meta_box('postimagediv', 'products', 'side');
    add_meta_box('postimagediv', __('Products Thumbnail Image'), 'post_thumbnail_meta_box', 'products', 'side');
}
add_action('admin_head', 'product_meta_box');

////Project End
