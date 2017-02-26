<?php

/* =====
 * Code for Main_menu_functions
  ====== */

function its_holydays_functions() {
    register_nav_menu('Main-menu', 'Main Menu');
}

add_action('after_setup_theme', 'its_holydays_functions');
/* =====
 * Code for Main_menu_functions   End
  ====== */


/* * ****
 * Add Metabox For Post
 * **** */

function post_metabox() {
    add_meta_box(
            'post_meta_box', __('Post Meta Box', 'post'), 'post_details', 'post', 'normal', 'high'
    );
}

add_action('add_meta_boxes', 'post_metabox');

function post_details() {
    global $post;
    require 'includes/events_metabox.php';
}

function save_post_meta_to_post($post_id) {
    global $post;
    if ($post->post_type == 'post') {
        update_post_meta($post_id, 'event_start_date', $_POST['event_start_date']);
        update_post_meta($post_id, 'event_end_date', $_POST['event_end_date']);
    }
}

add_action('save_post', 'save_post_meta_to_post');

/* * ****
 * End Metabox For Post Code
 * **** */










/*
 * Code for Create Custom Post Type
 * Post type is ==> our_partners_client
 */

function our_partners_client() {
    register_post_type('our_partners_client', array(
        'labels' => array(
            'name' => __("Partners"),
            'singular_name' => __('Partners & Cliends')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'partners & clients'),
        'menu_icon' => 'dashicons-universal-access',
        'supports' => array('title', 'thumbnail', 'page-attributes', 'excerpt')
    ));
}

add_action('init', 'our_partners_client');
add_action('admin_head', 'our_partners_client_meta_box');

function our_partners_client_meta_box() {
    remove_meta_box('postimagediv', 'our_partners_client', 'side');
    add_meta_box('postimagediv', __('Our Partners Logo Image'), 'post_thumbnail_meta_box', 'our_partners_client', 'side');
}

/*
 * Code for create Custom Post Type
 * Post Type==>Our Partners and Cient End
 */








/*
 * Code for Create Custom Post Type
 * Post type is ==> Paper Add Start
 */

function paper_add() {
    register_post_type('paper_add', array(
        'labels' => array(
            'name' => __("Paper Add"),
            'singular_name' => __('Paper add')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'paper-add'),
        'menu_icon' => 'dashicons-media-interactive',
        'supports' => array('title', 'thumbnail', 'page-attributes')
    ));
}

add_action('init', 'paper_add');



add_action('admin_head', 'paper_add_image_meta_box');

function paper_add_image_meta_box() {
    remove_meta_box('postimagediv', 'paper_add', 'side');
    add_meta_box('postimagediv', __('Paper add Thumbnail Image'), 'post_thumbnail_meta_box', 'paper_add', 'side');
}

/*
 * End Code for Create Custom Post Type
 * Post type is ==> Paper add End
 */




/*
 * Code for Create Custom Post Type
 * Post type is ==> Affiliation Start
 */

function affiliation() {
    register_post_type('affiliation_section', array(
        'labels' => array(
            'name' => __("Affiliation"),
            'singular_name' => __('affiliation_section')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'affiliation_section'),
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'thumbnail', 'page-attributes', 'excerpt')
    ));
}

add_action('init', 'affiliation');

function affiliation_excerpt() {
    remove_meta_box('postexcerpt', 'affiliation_section', 'side');
    add_meta_box('postexcerpt', __('Insert affiliation Website Url'), 'post_excerpt_meta_box', 'affiliation_section', 'normal', 'high');
}

function affiliation_meta_box() {
    remove_meta_box('postimagediv', 'affiliation_section', 'side');
    add_meta_box('postimagediv', __('Affiliation thumbnail Logo'), 'post_thumbnail_meta_box', 'affiliation_section', 'side');
}

add_action('admin_head', 'affiliation_meta_box');
add_action('admin_head', 'affiliation_excerpt');

/*
 * Code for Create Custom Post Type
 * Post type is ==> Affiliation End
 */









/*
 * Code for Create Custom Post Type
 * Post type is ==> Air Ticketing Start
 */

function air_ticketing() {
    register_post_type('air_ticketing', array(
        'labels' => array(
            'name' => __("Air Ticketing"),
            'singular_name' => __('air ticketing')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'air ticketing'),
        'menu_icon' => 'dashicons-feedback',
        'supports' => array('title', 'thumbnail', 'page-attributes', 'excerpt')
    ));
}

add_action('init', 'air_ticketing');
add_action('admin_head', 'air_ticketing_meta_box');

function air_ticketing_meta_box() {
    remove_meta_box('postimagediv', 'air_ticketing', 'side');
    add_meta_box('postimagediv', __('Air Ticketing thumbnail Logo'), 'post_thumbnail_meta_box', 'air_ticketing', 'side');
}

function air_ticketing_excerpt() {
    remove_meta_box('postexcerpt', 'air_ticketing', 'side');
    add_meta_box('postexcerpt', __('Insert Air Ticketing Url'), 'post_excerpt_meta_box', 'air_ticketing', 'normal', 'high');
}

add_action('admin_head', 'air_ticketing_excerpt');

/*
 * Code for Create Custom Post Type
 * Post type is ==> Air Ticketing End
 */








/*
 * Code for Create Custom Post Type
 * Post type is ==> Others Services Start
 */

function others_services() {
    register_post_type('others_services', array(
        'labels' => array(
            'name' => __("Others Services"),
            'singular_name' => __('others-services')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'others services'),
        'menu_icon' => 'dashicons-admin-site',
        'supports' => array('title', 'editor', 'page-attributes', 'excerpt')
    ));
}

add_action('init', 'others_services');
add_action('admin_head', 'others_services_meta_box');

function others_services_meta_box() {
    remove_meta_box('postexcerpt', 'others_services', 'side');
    add_meta_box('postexcerpt', __('Others Services Logo Font Awesome Class Name'), 'post_excerpt_meta_box', 'others_services', 'normal', 'high');
}

/*
 * Code for Create Custom Post Type
 * Post type is ==> Others Services End
 */










/*
 * Code for Create Custom Post Type
 * Post type is ==> Management Start
 */

function management() {
    register_post_type('management', array(
        'labels' => array(
            'name' => __("Management"),
            'singular_name' => __('management')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'management'),
        'menu_icon' => 'dashicons-welcome-view-site',
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'excerpt')
    ));
}

add_action('init', 'management');

add_action('admin_head', 'management_meta_box');

function management_meta_box() {
    remove_meta_box('postimagediv', 'management', 'side');
    add_meta_box('postimagediv', __('Management Profile picture 250px x 220px'), 'post_thumbnail_meta_box', 'management', 'side');
}

/*
 * Code for Create Custom Post Type
 * Post type is ==> Management End
 */



/* * ****
 * Add Metabox For Packges Post
 * **** */

function mamagement_metabox() {
    add_meta_box(
            'test_meta_box', __('Management Others Details', 'management'), 'management_details', 'management', 'normal', 'high'
    );
}

add_action('add_meta_boxes', 'mamagement_metabox');

function management_details() {
    global $post;
    require 'includes/management_meta_box.php';
}

function save_management_meta_to_post($post_id) {
    global $post;
    if ($post->post_type == 'management') {
        update_post_meta($post_id, 'employee_designation', $_POST['employee_designation']);
        update_post_meta($post_id, 'employee_fb_id', $_POST['employee_fb_id']);
        update_post_meta($post_id, 'employee_twi_id', $_POST['employee_twi_id']);
        update_post_meta($post_id, 'employee_linkedin_id', $_POST['employee_linkedin_id']);
        update_post_meta($post_id, 'employee_googlePlus_id', $_POST['employee_googlePlus_id']);
        update_post_meta($post_id, 'employee_email_id', $_POST['employee_email_id']);
        update_post_meta($post_id, 'employee_phone_number', $_POST['employee_phone_number']);
    }
}

add_action('save_post', 'save_management_meta_to_post');

/*
 * End Code for Create Custom Post Type
 * Post type is ==> Packges
 */











/*
 * Code for Create Custom Post Type
 * Post type is ==>Packeges
 */

function all_packeges() {
    register_post_type('packeges', array(
        'labels' => array(
            'name' => __("Packges"),
            'singular_name' => __('Packges')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'packges'),
        'menu_icon' => 'dashicons-tag',
        'supports' => array('title', 'thumbnail', 'page-attributes', 'editor', 'excerpt'),
            //'taxonomies'=> array('location', 'category' ),
    ));
}

add_action('init', 'all_packeges');
add_action('init', 'taxonomies');

function taxonomies() {
    $labels = array(
        'name' => _x('Packeges Category', 'taxonomy general name'),
        'singular_name' => _x('packeges-category', 'taxonomy singular name'),
        'search_items' => __('Search Packeges-Category'),
        'all_items' => __('All Packeges Category'),
        'parent_item' => __('Parent Packeges Category'),
        'parent_item_colon' => __('Parent Packeges-category:'),
        'edit_item' => __('Edit Packeges Category'),
        'update_item' => __('Update Packeges Category'),
        'add_new_item' => __('Add Packeges Category'),
        'new_item_name' => __('New Packeges Category Name'),
        'menu_name' => __('Packeges Category'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'packeges-category'),
    );

    register_taxonomy('packeges-category', 'packeges', $args);
}

//add_action('init', 'packeges_register_taxonomy');
//function packeges_register_taxonomy() {
//    $plural = 'Location';
//    $singular = 'Location';
//    $labels = array(
//        'name' => $plural,
//        'singular_name' => $singular,
//        'search_items' => __('Search' . $plural),
//        'all_items' => __('All' . $plural),
//        'parent_item' => NULL,
//        'parent_item_colon' => NULL,
//        'edit_item' => 'Edit' . $singular,
//        'update_item' => 'Update' . $singular,
//        'add_new_item' => 'Add New' . $singular,
//        'new_item_name' => 'New' . $singular . 'Name',
//        'menu_name' => $plural,
//    );
//    $args = array(
//        'hierarchical' => true,
//        'labels' => $labels,
//        'show_ui' => true,
//        'show_admin_column' => true,
//        'update_count_callback' => '_update_post_term_count',
//        'query_var' => true,
//        'rewrite' => array('slug' => 'packges'),
//    );
//
//    register_taxonomy('location', array('packges'), $args);
//}

/*
 * Add Custom Editor Plagin
 */
require 'includes/add_custom_metabox_editor.php';

/*
 * Packges Meta Remove Matabox and Add Meta Box
 */
add_action('admin_head', 'packeges_image_meta_box');

function packeges_image_meta_box() {
    remove_meta_box('postimagediv', 'packeges', 'side');
    add_meta_box('postimagediv', __('Packeges Thumbnail Image'), 'post_thumbnail_meta_box', 'packeges', 'side');
}

/*
 * Multiple Featured image packeges Post.
 */
require_once('library/multi-post-thumbnails.php');
if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(array(
        'label' => '2nd Feature Image (750 X 600)',
        'id' => 'feature-image-2',
        'post_type' => 'packeges'
            )
    );
    new MultiPostThumbnails(array(
        'label' => '3rd Feature Image (750 X 600)',
        'id' => 'feature-image-3',
        'post_type' => 'packeges'
            )
    );
    new MultiPostThumbnails(array(
        'label' => '4th Feature Image (750 X 600)',
        'id' => 'feature-image-4',
        'post_type' => 'packeges'
            )
    );
    new MultiPostThumbnails(array(
        'label' => '5th Feature Image (750 X 600)',
        'id' => 'feature-image-5',
        'post_type' => 'packeges'
            )
    );
};

/* * ****
 * Add Metabox For Packges Post
 * **** */

function packges_metabox() {
    add_meta_box(
            'test_meta_box', __('Packges All Details', 'packeges'), 'packges_details_info', 'packeges', 'normal', 'high'
    );
}

add_action('add_meta_boxes', 'packges_metabox');

function packges_details_info() {
    global $post;
    require 'includes/packages_details_meta_box.php';
}

function save_packges_meta_to_post($post_id) {
    global $post;
    if ($post->post_type == 'packeges') {
        update_post_meta($post_id, 'pkg_location_map', $_POST['pkg_location_map']);
        update_post_meta($post_id, 'pkg_duration', $_POST['pkg_duration']);
        update_post_meta($post_id, 'pkg_cat', $_POST['pkg_cat']);
        update_post_meta($post_id, 'pkg_type', $_POST['pkg_type']);
        update_post_meta($post_id, 'pkg_adart_price', $_POST['pkg_adart_price']);
        update_post_meta($post_id, 'pkg_child_price', $_POST['pkg_child_price']);
        update_post_meta($post_id, 'pkg_offer', $_POST['pkg_offer']);
        update_post_meta($post_id, 'services', $_POST['services']);
        update_post_meta($post_id, 'pkg_ratting', $_POST['pkg_ratting']);
        update_post_meta($post_id, 'pkg_departure_location', $_POST['pkg_departure_location']);
        update_post_meta($post_id, 'pkg_departure_date', $_POST['pkg_departure_date']);
        update_post_meta($post_id, 'pkg_departure_time', $_POST['pkg_departure_time']);
        update_post_meta($post_id, 'pkg_return_location', $_POST['pkg_return_location']);
        update_post_meta($post_id, 'pkg_return_time', $_POST['pkg_return_time']);
        update_post_meta($post_id, 'pkg_return_date', $_POST['pkg_return_date']);
        update_post_meta($post_id, 'pkg_vehicle', $_POST['pkg_vehicle']);
        update_post_meta($post_id, 'pkg_included', $_POST['pkg_included']);
        update_post_meta($post_id, 'pkg_not_included', $_POST['pkg_not_included']);
        update_post_meta($post_id, 'terms_conditions', $_POST['terms_conditions']);
        update_post_meta($post_id, 'payment_mode', $_POST['payment_mode']);
        update_post_meta($post_id, 'remark', $_POST['remark']);
    }
}

add_action('save_post', 'save_packges_meta_to_post');

/*
 * End Code for Create Custom Post Type
 * Post type is ==> Packges
 */



/*
 * Create Custom Post Type we accept logo
 * Post type is ==> we_accept Start
 */

function we_accept() {
    register_post_type('we_accept', array(
        'labels' => array(
            'name' => __("Accepted Cards"),
            'singular_name' => __('Accept')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'accept'),
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array('title', 'thumbnail')
    ));
}

add_action('init', 'we_accept');

/*
 * Accept card Meta Remove Matabox and Add Meta Box
 */

function accept_image_meta_box() {
    remove_meta_box('postimagediv', 'we_accept', 'side');
    add_meta_box('postimagediv', __('Card Thumnail Image'), 'post_thumbnail_meta_box', 'we_accept', 'side');
}

add_action('admin_head', 'accept_image_meta_box');

/*
 * Create Custom Post Type we accept logo
 * Post type is ==> we_accept End
 */




/*
 * Create Custom Post Type we accept logo
 * Post type is ==> we_accept Start
 */

function client_logo() {
    register_post_type('client_logo', array(
        'labels' => array(
            'name' => __("Clients"),
            'singular_name' => __('client-logos')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'client-logos'),
        'menu_icon' => 'dashicons-money',
        'supports' => array('title', 'thumbnail', 'excerpt')
    ));
}

add_action('init', 'client_logo');

/*
 * Client logo Meta Remove Matabox and Add Meta Box
 */

function client_logo_image_meta_box() {
    remove_meta_box('postimagediv', 'client_logo', 'side');
    add_meta_box('postimagediv', __('Client Logo Thumnail Image'), 'post_thumbnail_meta_box', 'client_logo', 'side');
}

function client_logo_excerpt() {
    remove_meta_box('postexcerpt', 'client_logo', 'side');
    add_meta_box('postexcerpt', __('Insert Client Website Url'), 'post_excerpt_meta_box', 'client_logo', 'normal', 'high');
}

add_action('admin_head', 'client_logo_excerpt');

add_action('admin_head', 'client_logo_image_meta_box');

/*
 * Create Custom Post Type we accept logo
 * Post type is ==> we_accept End
 */







/*
 * widget for welcome message
 *
 */

function itsholydays_Widgets_init() {
    register_sidebar(array(
        'name' => __('Welcome Message'),
        'id' => 'welcome_itsholydays_msg',
        'description' => __('Widgets for Welcome Message'),
        'before_title' => '<div class="col-xs-12 col-sm-12 col-md-12"><h1 class="first_heading sj" data-animate="fadeInDown" data-animation-delay="200">',
        'after_title' => '</h1></div>',
    ));
}

add_action('widgets_init', 'itsholydays_Widgets_init');


/*
 * Code for Support Featured Image for Page
 */
add_theme_support('post-thumbnails');











/*
 * Create Custom Post Type Video Gallery
 * Post type is ==> Video Gallery Start
 */

function video_gallery() {
    register_post_type('video_gallery', array(
        'labels' => array(
            'name' => __("Video-Gallery"),
            'singular_name' => __('video-gallery')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'Video-Gallery'),
        'menu_icon' => 'dashicons-video-alt',
        'supports' => array('title', 'excerpt')
    ));
}

function video_gallery_meta_box() {
    remove_meta_box('postexcerpt', 'video_gallery', 'side');
    add_meta_box('postexcerpt', __('Insert Youtube Video Id'), 'post_excerpt_meta_box', 'video_gallery', 'normal', 'high');
}

add_action('admin_head', 'video_gallery_meta_box');
add_action('init', 'video_gallery');

/*
 * Video Gallery End
 */









/*
 * Create Custom Post Type Photos Gallery
 * Post type is ==> Photo Gallery Start
 */

function photo_gallery() {
    register_post_type('photo_gallery', array(
        'labels' => array(
            'name' => __("Photo-Gallery"),
            'singular_name' => __('photo-gallery')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'Photo-Gallery'),
        'menu_icon' => 'dashicons-camera',
        'supports' => array('title', 'thumbnail')
    ));
}

function photo_gallery_thum_meta_box() {
    remove_meta_box('postimagediv', 'photo_gallery', 'side');
    add_meta_box('postimagediv', __('Image Gallery Thumbnail Image 500 X 500'), 'post_thumbnail_meta_box', 'photo_gallery', 'side');
}

add_action('admin_head', 'photo_gallery_thum_meta_box');
//add_action('admin_head', 'photo_gallery_meta_box');
add_action('init', 'photo_gallery');




/* * ****
 * Add Metabox For Country Inso
 * **** */

function photo_gallery_metabox_include() {
    add_meta_box(
            'test_meta_box', __('Select Photo Gallery Tag', 'photo_gallery'), 'photo_gallery_metabox', 'photo_gallery', 'normal', 'high'
    );
}

add_action('add_meta_boxes', 'photo_gallery_metabox_include');

function photo_gallery_metabox() {
    global $post;
    require 'includes/gallery_tag.php';
}

function photo_gallery_metabox_info($post_id) {
    global $post;
    if ($post->post_type == 'photo_gallery') {
        update_post_meta($post_id, 'photo_tag', $_POST['photo_tag']);
    }
}

add_action('save_post', 'photo_gallery_metabox_info');

/*
 * End Code for Create Custom Meta Box
 * Post type is ==> Visa_info
 */




/*
 * Photo Gallery End
 */





/*
 * Create Custom Post Type Visa Info
 * Post type is ==> Visa Info Start
 */

function visa_info() {
    register_post_type('visa_info', array(
        'labels' => array(
            'name' => __("Visa Info"),
            'singular_name' => __('visa-info')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'visa info'),
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    ));
}

function visa_info_thumnail_metabox() {
    remove_meta_box('postexcerpt', 'visa_info', 'side');
    add_meta_box('postexcerpt', __('Insert Country Google Map iframe'), 'post_excerpt_meta_box', 'visa_info', 'normal', 'high');
}

add_action('admin_head', 'visa_info_thum_meta_box');
add_action('admin_head', 'visa_info_thumnail_metabox');
add_action('init', 'visa_info');

function visa_info_thum_meta_box() {
    remove_meta_box('postimagediv', 'visa_info', 'side');
    add_meta_box('postimagediv', __('Country image 1600 x 515'), 'post_thumbnail_meta_box', 'visa_info', 'side');
}

/*
 * Visa Info Custom Post End
 */


/* * ****
 * Add Metabox For Country Inso
 * **** */

function visa_info_metabox() {
    add_meta_box(
            'test_meta_box', __('Visa Info Country Details', 'visa_info'), 'visaInfo_details_info', 'visa_info', 'normal', 'high'
    );
}

add_action('add_meta_boxes', 'visa_info_metabox');

function visaInfo_details_info() {
    global $post;
    require 'includes/visa_info_metabox.php';
}

function save_visaInfo_meta_to_post($post_id) {
    global $post;
    if ($post->post_type == 'visa_info') {
        update_post_meta($post_id, 'country_capital_city', $_POST['country_capital_city']);
        update_post_meta($post_id, 'country_currency', $_POST['country_currency']);
        update_post_meta($post_id, 'country_local_time', $_POST['country_local_time']);
        update_post_meta($post_id, 'country_telephone_code', $_POST['country_telephone_code']);
        update_post_meta($post_id, 'country_bank', $_POST['country_bank']);
        update_post_meta($post_id, 'country_exchange_rate', $_POST['country_exchange_rate']);
        update_post_meta($post_id, 'containest', $_POST['containest']);
    }
}

add_action('save_post', 'save_visaInfo_meta_to_post');

/*
 * End Code for Create Custom Meta Box
 * Post type is ==> Visa_info
 */
/*
 * Multiple Featured image packeges Post.
 */
if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(array(
        'label' => 'Country Logo',
        'id' => 'feature-image-2',
        'post_type' => 'visa_info'
            )
    );
};

//Default Menu Code
function default_main_menu() {
    echo "<ul class='nav navbar-nav'>";
    echo '<li><a href="' . esc_url(home_url()) . '">Home</a></li>';
    echo "</ul>";
}

require_once ('wp_bootstrap_navwalker.php');

/* themOption file */
require_once 'themeoptions.php';

/*
 * External Stylsheet for styling admin pane.
 */
add_action('admin_enqueue_scripts', 'load_admin_styles');

function load_admin_styles() {
    wp_enqueue_style('admin_style', get_template_directory_uri() . '/assets/css/admin_style.css', false, '1.0.0');
}

/* =====
 * Code for Custom Post Search Query
  ====== */

function searchfilter($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', array('packeges'));
    }
    return $query;
}

add_filter('pre_get_posts', 'searchfilter');
/* =====
 * Code for Custom Post Search Query
  ====== */



/*
 * Code for Change footer Message in admin section.
 */

function remove_footer_admin() {
    echo '<span id="footer-thankyou">Powered by <a href="http://www.sarower.com" target="_blank">Sarower Jahan</a></span>';
}

add_filter('admin_footer_text', 'remove_footer_admin');

/**
 * =============================================================================================================
 * Code By Sarower
 * December 30 2016
 * =============================================================================================================
 */
/*
 * Create Custom Post Type Footer Logo
 * Post type is ==> footer_logo
 */

function footer_logo() {
    register_post_type('footer_logo', array(
        'labels' => array(
            'name' => __("Footer Logo"),
            'singular_name' => __('footer-logo')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'footerlogo'),
        'menu_icon' => 'dashicons-format-image',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    ));
}

add_action('init', footer_logo);


/*
 * Create Custom Post Type Career
 * Post type is ==> career
 */

function career() {
    register_post_type('career', array(
        'labels' => array(
            'name' => __("Career"),
            'singular_name' => __('career')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'career'),
        'menu_icon' => 'dashicons-businessman',
        'supports' => array('title', 'editor', 'excerpt')
    ));
}

add_action('init', career);


/**
 * Stop Wordpress update Nag
 */
function remove_core_updates() {
    global $wp_version;
    return(object) array('last_checked' => time(), 'version_checked' => $wp_version,);
}

add_filter('pre_site_transient_update_core', 'remove_core_updates');
add_filter('pre_site_transient_update_plugins', 'remove_core_updates');
add_filter('pre_site_transient_update_themes', 'remove_core_updates');



/*
 * Create Custom Post Type Footer Logo
 * Post type is ==> footer_logo
 */

function news_event() {
    register_post_type('news', array(
        'labels' => array(
            'name' => __("News"),
            'singular_name' => __('news')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'news'),
        'menu_icon' => 'dashicons-media-document',
        'supports' => array('title', 'editor')
    ));
}

add_action('init', news_event);