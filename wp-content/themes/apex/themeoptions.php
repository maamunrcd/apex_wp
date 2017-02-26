<?php
/*
 * Code for Theme Option
 * setup_theme_admin_menu() is for creating admin menu. 
 * theme_settings_page() is for Theme Option HTML
 */

function setup_theme_admin_menu() {
    add_menu_page('Theme settings', 'Theme Option', 'manage_options', 'aspirations_theme_settings', 'theme_settings_page');
}

add_action("admin_menu", "setup_theme_admin_menu");


/*
 * Custom Media upload handeler. 
 */

function theme_settings_page() {
    wp_enqueue_media();
    if (isset($_REQUEST['page'])) {
        $page = $_REQUEST['page'];
        $tab = $_REQUEST['tab'];
        if (!empty($tab)) {
            $tab = $_REQUEST['tab'];
        } else {
            $tab = "site_options";
        }
    }
    ?>
    <div class="wrap custom_theme_option">
        <h2 class="nav-tab-wrapper">
            <a class="nav-tab <?php echo ($tab == "site_options" ? 'nav-tab-active' : ''); ?>" href="?page=aspirations_theme_settings&amp;tab=site_options">Site Options</a>
            <a class="nav-tab <?php echo ($tab == "contact_info" ? 'nav-tab-active' : ''); ?>" href="?page=aspirations_theme_settings&amp;tab=contact_info">Contact Info</a>
            <a class="nav-tab <?php echo ($tab == "general_info" ? 'nav-tab-active' : ''); ?>" href="?page=aspirations_theme_settings&amp;tab=general_info">General Info</a>
        </h2>

        <?php
        switch ($tab) {
            case 'site_options' :
                if (isset($_REQUEST['site_options_btn'])) {
                    $logo_url = get_option('logo_url');

                    if (isset($_POST['logo_url'])) {
                        update_option('logo_url', $_POST['logo_url'], 'yes');
                    }
                }
                $logo_url = get_option('logo_url');


                if (!$logo_url) {
                    $logo_url = '';
                }
                ?>
                <div id="dashboard_right_now" class="postbox sj_postbox">
                    <h2 class="hndle ui-sortable-handle"><span>Site Options</span></h2>
                    <div class="inside">
                        <div class="main">
                            <form method="POST" action="#">
                                <table class="sj_table site_options">
                                    <tr class="border_bottom">
                                        <td width="200"><label for="site_logo">Site Logo</label></td>
                                        <td width="200">
                                            <div class="uploader stag-table-metabox-table">
                                                <input type="hidden" id="logo_url" value="<?php echo $logo_url ?>" name="logo_url" type="text" />
                                                <input id="logo_url_button" class="button" name="logo_url_button" type="text" value="Upload" />
                                            </div>
                                        </td>
                                        <td><img src="<?php echo $logo_url ?>" alt="" id="show_img" style="max-width:250px;"/><label class="hints">Logo Image must be in JPG, JPEG, PNG or SVG and size must be under 280 X 200 pixel.</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="hidden" name="site_options2" value="1" /></td>
                                        <td><input type="submit" name="site_options_btn" value="Update" class="button button-primary button-large" /></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </form> 
                            <script type="text/javascript">
                                jQuery(document).ready(function($) {
                                    var _custom_media = true,
                                            _orig_send_attachment = wp.media.editor.send.attachment;

                                    $('.stag-table-metabox-table .button').click(function(e) {
                                        var send_attachment_bkp = wp.media.editor.send.attachment;
                                        var button = $(this);
                                        var id = button.attr('id').replace('_button', '');
                                        _custom_media = true;
                                        wp.media.editor.send.attachment = function(props, attachment) {
                                            if (_custom_media) {
                                                $("#" + id).val(attachment.url);
                                                $('#show_img').attr('src', attachment.url);
                                            } else {
                                                return _orig_send_attachment.apply(this, [props, attachment]);
                                            }
                                            ;
                                        }

                                        wp.media.editor.open(button);
                                        return false;
                                    });

                                    $('.add_media').on('click', function() {
                                        _custom_media = false;
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>

                <?php
                if (isset($_REQUEST['welcome_message'])) {
                    if (isset($_POST['welcome_message_title'])) {
                        update_option('welcome_message_title', $_POST['welcome_message_title'], 'yes');
                    }
                    if (isset($_POST['welcome_message'])) {
                        update_option('welcome_message', $_POST['welcome_message'], 'yes');
                    }
                    if (isset($_POST['welcome_message_image'])) {
                        update_option('welcome_message_image', $_POST['welcome_message_image'], 'yes');
                    }
                    if (isset($_POST['details_page_url'])) {
                        update_option('details_page_url', $_POST['details_page_url'], 'yes');
                    }
                }
                $welcome_message_title = get_option('welcome_message_title');
                $welcome_message = get_option('welcome_message');
                $welcome_message_image = get_option('welcome_message_image');
                $details_page_url = get_option('details_page_url');


                if (!$welcome_message_title) {
                    $welcome_message_title = '';
                }
                if (!$welcome_message) {
                    $welcome_message = '';
                }
                if (!$welcome_message_image) {
                    $welcome_message_image = '';
                }
                if (!$details_page_url) {
                    $details_page_url = '';
                }
                ?>
                <div id="dashboard_right_now" class="postbox sj_postbox">
                    <h2 class="hndle ui-sortable-handle"><span>Home page Message</span></h2>
                    <div class="inside">
                        <style>
                            .input_width{
                                width:100%;
                            }
                        </style>
                        <div class="main">
                            <form method="POST" action="#">
                                <table class="sj_table site_options">
                                    <tr class="border_bottom">
                                        <td width="200"><label for="welcome_message_title">Message Title</label></td>
                                        <td width="200">
                                            <input class="input_width" type="text" id="welcome_message_title" name="welcome_message_title" value="<?php echo $welcome_message_title; ?>" />
                                        </td>
                                        <td><label class="hints">An welcome message will display on your site for few times. Set, how many times it will show.</label></td>
                                    </tr>
                                    <tr class="border_bottom">
                                        <td width="200"><label for="welcome_message">Welcome Message</label></td>
                                        <td width="200">
                                            <textarea id="welcome_message" name="welcome_message" cols="80" rows="10"><?php echo $welcome_message; ?></textarea>
                                        </td>
                                        <td><label class="hints">An welcome message will display on your site for few times. Set, how many times it will show.</label></td>
                                    </tr>
                                    <tr class="border_bottom">
                                        <td><label for="welcome_message_image">Welcome Message Image</label></td>
                                        <td width="150">
                                            <div class="uploader stag-table-metabox-table">
                                                <input type="hidden" id="welcome_message_image" value="<?php echo $welcome_message_image; ?>" name="welcome_message_image" type="text" />
                                                <input id="welcome_message_image_button" class="button" name="welcome_message_image_button" type="text" value="Upload" />
                                            </div>
                                        </td>
                                        <td><img src="<?php echo $welcome_message_image; ?>" alt="" id="show_img3" style="max-width:250px;"/>
                                            <label class="hints"><br>Welcome Message Image must be in JPG, JPEG, PNG or SVG.</label>
                                        </td>
                                    </tr>
                                    <tr class="border_bottom">
                                        <td width="100"><label for="details_page_url">Url For details Page</label></td>
                                        <td colspan="2">
                                            <input class="input_width" type="text" id="details_page_url" name="details_page_url" value="<?php echo $details_page_url; ?>" />
                                            <br>
                                            Please Insert Your Details Page Url... Example:  http://yourdomain.com/about-us
                                        </td></tr>
                                    <tr>
                                        <td></td>
                                        <td><br /><input type="submit" name="welcome_submit" value="Update" class="button button-primary button-large" /></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>

                <?php
                break;
            case 'contact_info':
                if ($_POST) {
                    if ($_POST['update_contact_info'] == '1') {
                        $phone_no_1 = get_option('phone_no_1');
                        $phone_no_2 = get_option('phone_no_2');
                        $phone_no_3 = get_option('phone_no_3');
                        $email_1 = get_option('email_1');
                        $email_2 = get_option('email_2');
                        $email_3 = get_option('email_3');
                        $email_4 = get_option('email_4');
                        $address = get_option('address');
                        $address_2 = get_option('address_2');

                        if (isset($_POST['phone_no_1'])) {
                            update_option('phone_no_1', $_POST['phone_no_1'], 'yes');
                        }
                        if (isset($_POST['phone_no_2'])) {
                            update_option('phone_no_2', $_POST['phone_no_2'], 'yes');
                        }
                        if (isset($_POST['phone_no_3'])) {
                            update_option('phone_no_3', $_POST['phone_no_3'], 'yes');
                        }
                        if (isset($_POST['email_1'])) {
                            update_option('email_1', $_POST['email_1'], 'yes');
                        }
                        if (isset($_POST['email_2'])) {
                            update_option('email_2', $_POST['email_2'], 'yes');
                        }
                        if (isset($_POST['email_3'])) {
                            update_option('email_3', $_POST['email_3'], 'yes');
                        }
                        if (isset($_POST['email_4'])) {
                            update_option('email_4', $_POST['email_4'], 'yes');
                        }
                        if (isset($_POST['address'])) {
                            update_option('address', $_POST['address'], 'yes');
                        }
                        if (isset($_POST['address_2'])) {
                            update_option('address_2', $_POST['address_2'], 'yes');
                        }
                    }
                }
                $phone_no_1 = get_option('phone_no_1');
                $phone_no_2 = get_option('phone_no_2');
                $phone_no_3 = get_option('phone_no_3');
                $email_1 = get_option('email_1');
                $email_2 = get_option('email_2');
                $email_3 = get_option('email_3');
                $email_4 = get_option('email_4');
                $address = get_option('address');
                $address_2 = get_option('address_2');
                if (!$phone_no_1) {
                    $phone_no_1 = '';
                }
                if (!$phone_no_2) {
                    $phone_no_2 = '';
                }
                if (!$phone_no_3) {
                    $phone_no_3 = '';
                }
                if (!$email_1) {
                    $email_1 = '';
                }
                if (!$email_2) {
                    $email_2 = '';
                }
                if (!$email_3) {
                    $email_3 = '';
                }
                if (!$email_4) {
                    $email_4 = '';
                }
                if (!$address) {
                    $address = '';
                }
                if (!$address_2) {
                    $address_2 = '';
                }
                ?>
                <div id="dashboard_right_now" class="postbox sj_postbox">
                    <h2 class="hndle ui-sortable-handle"><span>Site Options</span></h2>
                    <div class="inside">
                        <div class="main">
                            <form method="POST" action="#">
                                <table class="sj_table">
                                    <tr>
                                        <td><label for="phone_no_1">Phone No 1</label></td>
                                        <td><input type="text" name="phone_no_1" id="phone_no_1" value="<?php echo $phone_no_1; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="phone_no_2">Phone No 2</label></td>
                                        <td><input type="text" name="phone_no_2" id="phone_no_2" value="<?php echo $phone_no_2; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="phone_no_3">Phone No 3</label></td>
                                        <td><input type="text" name="phone_no_3" id="phone_no_3" value="<?php echo $phone_no_3; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="email_1">Email 1</label></td>
                                        <td><input type="text" name="email_1" id="email_1" value="<?php echo $email_1; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="email_2">Email 2</label></td>
                                        <td><input type="text" name="email_2" id="email_2" value="<?php echo $email_2; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="email_3">Email 3</label></td>
                                        <td><input type="text" name="email_3" id="email_3" value="<?php echo $email_3; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="email_4">Send All Email Address</label></td>
                                        <td><input type="text" name="email_4" id="email_4" value="<?php echo $email_4; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="address">Office Address</label></td>
                                        <td><textarea type="text" name="address" id="address" ><?php echo $address; ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><label for="address_2">Office Address 2</label></td>
                                        <td><textarea type="text" name="address_2" id="address_2" ><?php echo $address_2; ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><input type="hidden" name="update_contact_info" value="1" /></td>
                                        <td><input type="submit" value="Update" name="up_contact_btn" class="button button-primary button-large" /></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>

                <?php
                if ($_POST) {
                    if ($_POST['social_update'] == '1') {
                        $google_plus = get_option('google_plus');
                        $facebook = get_option('facebook');
                        $instagram = get_option('instagram');
                        $twitter = get_option('twitter');
                        $linked_in = get_option('linked_in');
                        $youtube = get_option('youtube');

                        if (isset($_POST['facebook'])) {
                            update_option('facebook', $_POST['facebook'], 'yes');
                        }
                        if (isset($_POST['google_plus'])) {
                            update_option('google_plus', $_POST['google_plus'], 'yes');
                        }
                        if (isset($_POST['instagram'])) {
                            update_option('instagram', $_POST['instagram'], 'yes');
                        }
                        if (isset($_POST['twitter'])) {
                            update_option('twitter', $_POST['twitter'], 'yes');
                        }
                        if (isset($_POST['linked_in'])) {
                            update_option('linked_in', $_POST['linked_in'], 'yes');
                        }
                        if (isset($_POST['youtube'])) {
                            update_option('youtube', $_POST['youtube'], 'yes');
                        }
                    }
                }
                $facebook = get_option('facebook');
                $google_plus = get_option('google_plus');
                $instagram = get_option('instagram');
                $twitter = get_option('twitter');
                $linked_in = get_option('linked_in');
                $youtube = get_option('youtube');

                if (!$facebook) {
                    $facebook = '';
                }
                if (!$google_plus) {
                    $google_plus = '';
                }
                if (!$instagram) {
                    $instagram = '';
                }
                if (!$twitter) {
                    $twitter = '';
                }
                if (!$linked_in) {
                    $linked_in = '';
                }
                if (!$youtube) {
                    $youtube = '';
                }
                ?>
                <br/>

                <div id="dashboard_right_now" class="postbox sj_postbox">
                    <h2 class="hndle ui-sortable-handle"><span>Social pages</span></h2>
                    <div class="inside">
                        <div class="main">
                            <form method="POST" action="#">
                                <table class="sj_table">
                                    <tr>
                                        <td><label for="google_plus">Google Plus</label></td>
                                        <td><input type="text" name="google_plus" id="google_plus" value="<?php echo $google_plus; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="facebook">Facebook Page</label></td>
                                        <td><input type="text" name="facebook" id="facebook" value="<?php echo $facebook; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="instagram">Instagram</label></td>
                                        <td><input type="text" name="instagram" id="instagram" value="<?php echo $instagram; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="twitter">Twitter Page</label></td>
                                        <td><input type="text" name="twitter" id="twitter" value="<?php echo $twitter; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="linked_in">Linked in Page</label></td>
                                        <td><input type="text" name="linked_in" id="linked_in" value="<?php echo $linked_in; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="youtube">Youtube</label></td>
                                        <td><input type="text" name="youtube" id="youtube" value="<?php echo $youtube; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td><input type="hidden" name="social_update" value="1" /></td>
                                        <td><input type="submit" value="Update" class="button button-primary button-large" /></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>

                <?php
                if ($_POST) {
                    if ($_POST['location_info'] == '1') {
                        $g_map_location = get_option('g_map_location');

                        if (isset($_POST['g_map_location'])) {
                            update_option('g_map_location', $_POST['g_map_location'], 'yes');
                        }
                    }
                }

                $g_map_location = get_option('g_map_location');
                if (!$g_map_location) {
                    $g_map_location = '';
                }
                ?>

                <div id="dashboard_right_now" class="postbox sj_postbox">
                    <h2 class="hndle ui-sortable-handle"><span>Location</span></h2>
                    <div class="inside">
                        <div class="main">
                            <form method="POST" action="#">
                                <table class="sj_table">
                                    <tr>
                                        <td><label for="g_map_location">Google Map Location</label></td>
                                        <td><textarea name="g_map_location" id="g_map_location"><?php echo $g_map_location; ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><input type="hidden" name="location_info" value="1" /></td>
                                        <td><input type="submit" value="Update" class="button button-primary button-large" /></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 'general_info':
                if (isset($_REQUEST['copyright_text_btn'])) {
                    $copyright_text = get_option('copyright_text');

                    if (isset($_POST['copyright_text'])) {
                        update_option('copyright_text', $_POST['copyright_text'], 'yes');
                    }
                }
                $copyright_text = get_option('copyright_text');

                if (!$copyright_text) {
                    $copyright_text = '';
                }



                /* =====Office Schidule PHP===== */

                if (isset($_REQUEST['office_schidule_btn'])) {
                    $weekly_first_day = get_option('weekly_first_day');
                    $weekly_last_day = get_option('weekly_last_day');
                    $office_opening_time = get_option('office_opening_time');
                    $office_closing_time = get_option('office_closing_time');

                    if (isset($_POST['weekly_first_day'])) {
                        update_option('weekly_first_day', $_POST['weekly_first_day'], 'yes');
                    }
                    if (isset($_POST['weekly_last_day'])) {
                        update_option('weekly_last_day', $_POST['weekly_last_day'], 'yes');
                    }
                    if (isset($_POST['office_opening_time'])) {
                        update_option('office_opening_time', $_POST['office_opening_time'], 'yes');
                    }
                    if (isset($_POST['office_closing_time'])) {
                        update_option('office_closing_time', $_POST['office_closing_time'], 'yes');
                    }
                }
                $weekly_first_day = get_option('weekly_first_day');
                $weekly_last_day = get_option('weekly_last_day');
                $office_opening_time = get_option('office_opening_time');
                $office_closing_time = get_option('office_closing_time');

                if (!$weekly_first_day) {
                    $weekly_first_day = '';
                }
                if (!$weekly_last_day) {
                    $weekly_last_day = '';
                }
                if (!$office_opening_time) {
                    $office_opening_time = '';
                }
                if (!$office_closing_time) {
                    $office_closing_time = '';
                }

                if (isset($_REQUEST['about_us_text'])) {

                    if (isset($_POST['about_text'])) {
                        update_option('about_text', $_POST['about_text'], 'yes');
                    }
                    if (isset($_POST['footer_about_title'])) {
                        update_option('footer_about_title', $_POST['footer_about_title'], 'yes');
                    }
                }
                $about_text = get_option('about_text');
                $footer_about_title = get_option('footer_about_title');
                if (!$footer_about_title) {
                    $footer_about_title = '';
                }
                ?>
                <div id="dashboard_right_now" class="postbox sj_postbox">
                    <h2 class="hndle ui-sortable-handle"><span>Working Schidule</span></h2>
                    <div class="inside">
                        <div class="main">
                            <form method="POST" action="#">
                                <table class="sj_table site_options">
                                    <tr class="border_bottom">
                                        <td width="100"><label for="weekly_first_day">Weekly First Day</label></td>
                                        <td>
                                            <input name="weekly_first_day" id="weekly_first_day" value="<?php echo $weekly_first_day; ?>"/>
                                        </td>
                                        <td><label class="hints">Weekly Frist Day</label></td>
                                    </tr>
                                    <tr class="border_bottom">
                                        <td width="100"><label for="weekly_last_day">Weekly Last Day</label></td>
                                        <td>
                                            <input name="weekly_last_day" id="weekly_last_day" value="<?php echo $weekly_last_day; ?>"/>
                                        </td>
                                        <td><label class="hints">Weekly Last Day</label></td>
                                    </tr>
                                    <tr class="border_bottom">
                                        <td width="100"><label for="office_opening_time">Office Opening Time</label></td>
                                        <td>
                                            <input name="office_opening_time" id="office_opening_time" value="<?php echo $office_opening_time; ?>"/>
                                        </td>
                                        <td><label class="hints">Maximum 15 words is most suitable for this text.</label></td>
                                    </tr>
                                    <tr class="border_bottom">
                                        <td width="100"><label for="office_closing_time">Office Closing Time</label></td>
                                        <td>
                                            <input name="office_closing_time" id="office_closing_time" value="<?php echo $office_closing_time; ?>"/>
                                        </td>
                                        <td><label class="hints">Maximum 15 words is most suitable for this text.</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" name="office_schidule_btn" value="Update" class="button button-primary button-large" /></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </form>  
                        </div>
                    </div>
                </div>

                <div id="dashboard_right_now" class="postbox sj_postbox">
                    <h2 class="hndle ui-sortable-handle"><span>Copyright text</span></h2>
                    <div class="inside">
                        <div class="main">
                            <form method="POST" action="#">
                                <table class="sj_table site_options">
                                    <tr class="border_bottom">
                                        <td width="100"><label for="copyright_text">Copyright Text</label></td>
                                        <td>
                                            <textarea name="copyright_text" id="copyright_text" cols="40" rows="5"><?php echo $copyright_text; ?></textarea>
                                        </td>
                                        <td><label class="hints">Maximum 15 words is most suitable for this text.</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" name="copyright_text_btn" value="Update" class="button button-primary button-large" /></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </form>  
                        </div>
                    </div>
                </div>
                <div id="dashboard_right_now" class="postbox sj_postbox">
                    <h2 class="hndle ui-sortable-handle"><span>Apex Engineering History</span></h2>
                    <div class="inside">
                        <div class="main">
                            <form method="POST" action="#">
                                <table class="sj_table site_options">
                                    <tr class="border_bottom">
                                        <td width="100"><label for="footer_about_title">Footer About Title</label></td>
                                        <td>
                                            <input name="footer_about_title" id="footer_about_title" value="<?php echo $footer_about_title; ?>"/>
                                        </td>
                                        <td><label class="hints">Enter Your Company About heading..</label></td>
                                    </tr>
                                    <tr class="border_bottom">
                                        <td width="100"><label for="about_text">Apex Engineering Footer about text</label></td>
                                        <td>
                                            <textarea name="about_text" id="about_text" cols="40" rows="5"><?php echo $about_text; ?></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" name="about_us_text" value="Update" class="button button-primary button-large" /></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 'insert_place':
                if (isset($_REQUEST['copyright_text_btn'])) {
                    $copyright_text = get_option('copyright_text');

                    if (isset($_POST['copyright_text'])) {
                        update_option('copyright_text', $_POST['copyright_text'], 'yes');
                    }
                }
                $copyright_text = get_option('copyright_text');

                if (!$copyright_text) {
                    $copyright_text = '';
                }



                ///Office Schidule PHP

                if (isset($_REQUEST['Insert'])) {
                    $pkg_select_location_type = get_option('pkg_select_location_type');
                    $pkg_inbound_location = get_option('pkg_inbound_location');
                    $office_opening_time = get_option('pkg_outbound_location');

                    if (isset($_POST['pkg_select_location_type'])) {
                        update_option('pkg_select_location_type', $_POST['pkg_select_location_type'], 'yes');
                    }
                    if (isset($_POST['pkg_inbound_location'])) {
                        update_option('pkg_inbound_location', $_POST['pkg_inbound_location'], 'yes');
                    }
                    if (isset($_POST['office_opening_time'])) {
                        update_option('pkg_outbound_location', $_POST['pkg_outbound_location'], 'yes');
                    }
                }
                $pkg_select_location_type = get_option('pkg_select_location_type');
                $weekly_last_day = get_option('pkg_inbound_location');
                $pkg_outbound_location = get_option('pkg_outbound_location');

                if (!$pkg_select_location_type) {
                    $weekly_first_day = '';
                }
                if (!$pkg_inbound_location) {
                    $pkg_inbound_location = '';
                }
                if (!$pkg_outbound_location) {
                    $pkg_outbound_location = '';
                }
                ?>
                <?php
                break;
        }
        ?>
    </div>
    <?php
}
