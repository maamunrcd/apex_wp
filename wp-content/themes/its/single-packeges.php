<?php
get_header();
while (have_posts()) : the_post();
    ?>
    <main class="our_package_details">
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
        <?php
        /*         * *
         * Email template Sending Email Code Start
         * * */
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_REQUEST['book_package'])) {
                $all_data = $_REQUEST;
                extract($all_data);
                //input Field Validation.
                if (is_string($user_mr_mrs) && !ctype_digit($user_mr_mrs) && !empty($user_mr_mrs)) {
                    $pkg_book_user_mr_mrs = stripslashes(str_replace(",", '', $user_mr_mrs));
                }
                if (is_string($user_first_name) && !ctype_digit($user_first_name) && !empty($user_first_name)) {
                    $pkg_book_first_name = stripslashes(str_replace(",", '', $user_first_name));
                }
                //input Field Validation. Last name
                if (is_string($user_last_name) && !ctype_digit($user_last_name) && !empty($user_last_name)) {
                    $pkg_book_last_name = stripslashes(str_replace(",", '', $user_last_name));
                }
                //input Field Validation. Country
                if (is_string($user_country) && !ctype_digit($user_country) && !empty($user_country)) {
                    $pkg_book_user_country = stripslashes(str_replace(",", '', $user_country));
                }
                //input Field Validation. nationality
                if (is_string($user_nationality) && !ctype_digit($user_nationality) && !empty($user_nationality)) {
                    $pkg_book_user_nationality = stripslashes(str_replace(",", '', $user_nationality));
                }

                //Email address Validation
                if (!empty($user_email) && !filter_var($user_email, FILTER_VALIDATE_EMAIL) === false) {
                    $pkg_book_user_email = $user_email;
                }

                //phone number validation
                $user_phone_num = intval($user_phone);
                if (is_int($user_phone_num)) {
                    $pkg_book_phone_num = $user_phone_num;
                }
                //Fax number validation
                $user_fax_num = intval($user_fax);
                if (is_int($user_fax_num)) {
                    $pkg_book_fax_num = $user_fax;
                }

                //package Name validation.
                if (is_string($package_name) && !ctype_digit($package_name) && !empty($package_name)) {
                    $pkg_book_package_name = trim(stripslashes(str_replace(",", '', $package_name)));
                }

                /* -----Package validation Find Us----- */
                if (is_string($user_find_us) && !ctype_digit($user_find_us) && !empty($user_find_us)) {
                    $pkg_book_find_us = trim(stripslashes(str_replace(",", '', $user_find_us)));
                }

                /* -----Package validation Airport pickup----- */
                if (is_string($airport_pickup) && !ctype_digit($airport_pickup) && !empty($airport_pickup)) {
                    $pkg_book_airport_pickup = trim(stripslashes(str_replace(",", '', $airport_pickup)));
                }
                /* Adult Validation */
                $user_adult_num = intval($user_adult);
                if (is_int($user_adult_num)) {
                    $pkg_book_adult = trim(stripslashes($user_adult_num));
                }
                /* Adult Validation */
                $user_child_num = intval($user_child);
                if (is_int($user_child_num)) {
                    $pkg_book_child = trim(stripslashes($user_child_num));
                }

                //package malling validation.
                if (is_string($user_mailling_address) && !ctype_digit($user_mailling_address) && !empty($user_mailling_address)) {
                    $pkg_book_user_mailling_address = stripslashes(str_replace(",", '', $user_mailling_address));
                }
                //package Message validation.
                if (is_string($user_message) && !ctype_digit($user_message) && !empty($user_message)) {
                    $pkg_book_user_message = stripslashes(str_replace(",", '', $user_message));
                }
                $to = get_option('email_4');

                $subject = 'Package Booking User Info';

                $headers = "From: " . "$pkg_book_user_email" . "\r\n";
                $headers .= "Reply-To: " . "$pkg_book_user_email" . "\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                $message = '<html lang="en" style="margin: 0;padding: 0;overflow-y: scroll;"><head><style>.ii a[href]{color:white;}</style></head><body style="margin: auto;padding: 0 0 50px;width: 800px;">';
                $message .= '<main style="margin: 0;padding: 0;">
                <header style="margin: 0;padding: 0;">
                    <div class="logo_section" style="margin: 0;padding: 0;">
                        <div class="container" style="margin: 0;padding: 0;width: 800px;background: #231b17;background-size: cover;">
                            <div class="row" style="margin: 0;padding: 0;">
                                <div class="heading_title" style="margin: 0;padding: 0;">
                                    <div class="container" style="margin: 0;padding: 0;width: 800px;background:#069fe4">
                                        <div class="row" style="margin: 0;padding: 0;">
                                            <div class="col-xs-12" style="margin: 0;padding: 0;">
                                                <h4 style="text-align: center;padding: 15px;margin: 0;font-size: 22px;color: #fff;font-weight: 200;line-height: 40px;">Package Booking User Info</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div></div></div></header>
                <div class="container" style="margin: 0;padding: 0;width: 800px;background:#0091d2">
                    <div class="row" style="margin: 0;padding: 0;">
                        <div class="main_bg" style="margin: 0;padding: 0;padding-bottom: 35px;">
                            <div class="content_table" style="margin: 0;padding: 0;background:#0091d2">
                                <table class="container" width="650 !important" cellpadding="0" cellspacing="0" border="0" style="margin: 0;padding: 0;width: 100%;">
                                    ';
                $message .= "<tr style='margin: 0;padding: 0;'>";
                $message .= "<td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>Full name</td>";
                $message .= "<td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>" . strip_tags($pkg_book_user_mr_mrs) . " " . strip_tags($pkg_book_first_name) . " " . strip_tags($pkg_book_last_name) . "&nbsp;</td></tr>";

                $message .= "<tr style='margin: 0;padding: 0;'>";
                $message .= "<td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>Country</td>";
                $message .= "<td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>" . strip_tags($pkg_book_user_country) . "&nbsp;</td></tr>";

                $message .= "<tr style='margin: 0;padding: 0;'>";
                $message .= "<td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>Nationality</td>";
                $message .= "<td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>" . strip_tags($pkg_book_user_nationality) . "&nbsp;</td></tr>";

                $message .= "<tr style='margin: 0;padding: 0;'>
        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>Email</td>
        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>" . strip_tags($pkg_book_user_email) . "&nbsp;</td>
    </tr>
    <tr style='margin: 0;padding: 0;'>
        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>Phone</td>
        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>" . strip_tags($pkg_book_phone_num) . "&nbsp;</td>
    </tr>
    <tr style='margin: 0;padding: 0;'>
        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>Fax</td>
        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>" . strip_tags($pkg_book_fax_num) . "&nbsp;</td>
    </tr>
    <tr style='margin: 0;padding: 0;'>
        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>Package Name</td>
        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>" . strip_tags($pkg_book_package_name) . "&nbsp;</td>
    </tr>
    <tr style='margin: 0;padding: 0;'>
        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>Find</td>
        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>" . strip_tags($pkg_book_find_us) . "&nbsp;</td>
    </tr>
    <tr style='margin: 0;padding: 0;'>
        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>Airport pickup</td>
        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>" . strip_tags($pkg_book_airport_pickup) . "&nbsp;</td>
    </tr>
    <tr style='margin: 0;padding: 0;'>
        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>Adult</td>
        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>" . strip_tags($pkg_book_adult) . "&nbsp;</td>
    </tr>
    <tr style='margin: 0;padding: 0;'>
        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>Child</td>
        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>" . strip_tags($pkg_book_child) . "&nbsp;</td>
    </tr>
    <tr style='margin: 0;padding: 0;'>
        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>Check-in Date</td>
        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>" . strip_tags($check_indate) . "&nbsp;</td>
    </tr>
    <tr style='margin: 0;padding: 0;'>
        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>Check-Out Date</td>
        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>" . strip_tags($check_outdate) . "&nbsp;</td>
    </tr>
    <tr style='margin: 0;padding: 0;'>
        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>Mailing Address</td>
        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>" . strip_tags($pkg_book_user_mailling_address) . "&nbsp;</td>
    </tr>
    <tr style='margin: 0;padding: 0;'>
        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>Your Message</td>
        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid #0672a2;'>" . strip_tags($pkg_book_user_message) . "&nbsp;</td>
    </tr>";
                ?>
                <?php
                $message .= '</table>
        </div>
    </div>
    </div>
    </div>
    </main>
    </body>
    </html>';
                if (mail($to, $subject, $message, $headers)) {
                ?>
                <div class="sucess_message">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="alert alert-success">
                                    <strong>Package Booking Successful</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                } else {
                echo 'There was a problem sending the email.';
                }
                }
                }

                /*         * *
                * Email template Sending Email Code End
                * * */
                ?>
                <div class="contain_section">
                    <div class="main_content our_packages_items">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-md-9 col-lg-9">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <!-- Nav tabs -->
                                            <ul class="packages_nav nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#details" aria-controls="home" role="tab" data-toggle="tab">Details</a></li>
                                                <li role="presentation"><a href="#itinerary" aria-controls="itinerary" role="tab" data-toggle="tab">Itinerary</a></li>
                                                <li role="presentation"><a href="#location" aria-controls="location" role="tab" data-toggle="tab">Location</a></li>
                                                <li role="presentation"><a href="#photos" aria-controls="photos" role="tab" data-toggle="tab">Photos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12">
                                            <!-- Tab panes -->
                                            <div class="packages_content tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="details">
                                                    <div class="services_info_tab">
                                                        <ul class="package_services">
                                                            <li>
                                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                <span class="details">
                                                                    <span class="amount"><?php echo get_post_meta($post->ID, 'pkg_duration', true); ?></span>
                                                                <span class="label">Duration</span>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                                            <span class="details">
                                                                <span class="amount"><?php echo get_post_meta($post->ID, 'pkg_departure_location', true); ?></span>
                                                                <span class="label">Location</span>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            <span class="details">
                                                                <span class="amount"><?php echo get_post_meta($post->ID, 'pkg_departure_date', true); ?></span>
                                                                <span class="label">Date</span>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                                            <span class="details">
                                                                <span class="amount"><?php echo get_post_meta($post->ID, 'pkg_type', true); ?></span>
                                                                <span class="label">Package Type</span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <div class="packages_others_details">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="paragraph">
                                                                    <?php the_content(); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <table class="table table-bordered table-hover table-condensed">
                                                                    <tr>
                                                                        <th>Departure Location</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'pkg_departure_location', true); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Departure Date</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'pkg_departure_date', true); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Departure Time</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'pkg_departure_time', true); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Return Location</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'pkg_return_location', true); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Return Date</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'pkg_return_date', true); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Return Time</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'pkg_return_time', true); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Adult Cost</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'pkg_adart_price', true); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Child Cost</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'pkg_child_price', true); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Discount</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'pkg_offer', true); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Services</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'services', true); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Transportation</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'pkg_vehicle', true); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Included</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'pkg_included', true); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Not Included</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'pkg_not_included', true); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Trams & Condition</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'terms_conditions', true); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Payment Mode</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'payment_mode', true); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Remark</th>
                                                                        <td><?php echo get_post_meta($post->ID, 'remark', true); ?></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="itinerary">
                                                <div class="itinerary">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="package_day_details">
                                                                <?php the_excerpt(); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="location">
                                                <div class="place_location">
                                                    <?php echo get_post_meta($post->ID, 'pkg_location_map', true); ?>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="photos">
                                                <div id="main_area">
                                                    <!-- Slider -->
                                                    <div class="row">
                                                        <div class="col-xs-12" id="gallary_pkg">
                                                            <!-- Top part of the slider -->
                                                            <div class="row">
                                                                <div class="col-sm-12" id="carousel-bounding-box">
                                                                    <div class="carousel slide" id="location_photos">
                                                                        <!-- Carousel items -->
                                                                        <div class="carousel-inner">
                                                                            <div class="active item" data-slide-number="0">
                                                                                <?php the_post_thumbnail(); ?>;
                                                                            </div>
                                                                            <?php
                                                                            if (class_exists('MultiPostThumbnails')) {
                                                                            $i = 2;
                                                                            while ($i <= 5) {
                                                                            $image_name = 'feature-image-' . $i;  // sets image name as feature-image-1, feature-image-2 etc.
                                                                            if (MultiPostThumbnails::has_post_thumbnail('packeges', $image_name)) {
                                                                            $image_id = MultiPostThumbnails::get_post_thumbnail_id('packeges', $image_name, $post->ID);  // use the MultiPostThumbnails to get the image ID
                                                                            $image_thumb_url = wp_get_attachment_image_src($image_id, 'small-thumb');  // define thumb src based on image ID
                                                                            $image_feature_url = wp_get_attachment_image_src($image_id, 'feature-image'); // define full size src based on image ID
                                                                            $attr = array(
                                                                            'rel' => $image_thumb_url[0], // sets the url for the image thumbnails size
                                                                            'src' => $image_feature_url[0], // sets the url for the full image size 
                                                                            );
                                                                            $image = wp_get_attachment_image($image_id, 'feature-image', false, $attr);
                                                                            ?>
                                                                            <div class="item" data-slide-number="<?= $i - 1; ?>">
                                                                                <?php echo $image; ?>
                                                                            </div>
                                                                            <?php
                                                                            }
                                                                            $i++;
                                                                            }
                                                                            }; // end if MultiPostThumbnails 
                                                                            ?>
                                                                        </div>
                                                                        <!-- Carousel nav -->
                                                                        <a class="left carousel-control" href="#location_photos" role="button" data-slide="prev">
                                                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a class="right carousel-control" href="#location_photos" role="button" data-slide="next">
                                                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div id="slider-thumbs" class="slider_thumbs">
                                                                        <div class="thumb_item">
                                                                            <a class="thumbnail" id="carousel-selector-0">
                                                                                <?php the_post_thumbnail(); ?>
                                                                            </a>
                                                                        </div>
                                                                        <?php
                                                                        if (class_exists('MultiPostThumbnails')) {
                                                                        $i = 2;
                                                                        while ($i <= 5) {
                                                                        $image_name = 'feature-image-' . $i;  // sets image name as feature-image-1, feature-image-2 etc.
                                                                        if (MultiPostThumbnails::has_post_thumbnail('packeges', $image_name)) {
                                                                        $image_id = MultiPostThumbnails::get_post_thumbnail_id('packeges', $image_name, $post->ID);  // use the MultiPostThumbnails to get the image ID
                                                                        $image_thumb_url = wp_get_attachment_image_src($image_id, 'small-thumb');  // define thumb src based on image ID
                                                                        $image_feature_url = wp_get_attachment_image_src($image_id, 'feature-image'); // define full size src based on image ID
                                                                        $attr = array(
                                                                        'class' => "folio-sample", // set custom class
                                                                        'rel' => $image_thumb_url[0], // sets the url for the image thumbnails size
                                                                        'src' => $image_feature_url[0], // sets the url for the full image size 
                                                                        );
                                                                        $image = wp_get_attachment_image($image_id, 'feature-image', false, $attr);
                                                                        ?>
                                                                        <div class="thumb_item">
                                                                            <a class="thumbnail" id="carousel-selector-<?php echo $i - 1; ?>">
                                                                                <?php
                                                                                echo $image;
                                                                                ?>
                                                                            </a>
                                                                        </div>
                                                                        <?php
                                                                        }
                                                                        $i++;
                                                                        }
                                                                        }; // end if MultiPostThumbnails 
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <br />
                                <div class="row">
                                    <div class="col-xs-12"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".book_pkg_model">Book Now</button></div>
                                </div>
                                <div class="row package_social_shareing">
                                    <div class="col-xs-12">
                                        <h3>Share Your Friend</h3>
                                        <ul class="package_social_share">
                                            <?php $current_url = get_the_permalink(); ?>
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($current_url); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="https://twitter.com/intent/tweet?text=<?php echo the_title(); ?>&url=<?php echo urlencode($current_url); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="https://plus.google.com/share?url=<?php echo urlencode($current_url); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($current_url); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Book Package Model -->
                            <div class="package_booking_model">
                                <div class="modal fade book_pkg_model" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title text-left" id="gridSystemModalLabel">Online Package Booking</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form class="hotel_reservation_form text-left" method="post" action="<?php echo htmlentities($_SERVER['SCRIPT_URI']); ?>">
                                                    <div class="row hotel_book_form">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="user_mr_mrs">You Are *</label>
                                                                        <select class="form-control" id="user_mr_mrs" data-live-search="true" name="user_mr_mrs" required>
                                                                            <option value="Mr">Mr.</option>
                                                                            <option value="Mrs">Mrs.</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="user_first_name">Frist Name</label>
                                                                        <input type="text" name="user_first_name" placeholder="Frist Name" class="form-control" id="user_first_name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="user_last_name">Last Name</label>
                                                                        <input type="text" name="user_last_name" placeholder="Last Name" class="form-control" id="user_last_name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="user_country">Country *</label>
                                                                        <select class="selectpicker form-control" id="user_country" data-live-search="true" name="user_country" required>
                                                                            <option data-hidden="true">Country</option>
                                                                            <?php
                                                                            $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                                                                            foreach ($countries as $country) {
                                                                            ?>
                                                                            <option value="<?= $country; ?>"><?= $country; ?></option>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row hotel_book_form">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="user_nationality">Nationality *</label>
                                                                        <input type="text" name="user_nationality" placeholder="Nationality" class="form-control" id="user_nationality" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="user_email">Email *</label>
                                                                        <input type="text" name="user_email" placeholder="Email" class="form-control" id="user_email" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="user_phone">Phone *</label>
                                                                        <input type="text" name="user_phone" placeholder="Phone" class="form-control" id="user_phone" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="user_fax">Fax</label>
                                                                        <input type="text" name="user_fax" placeholder="Fax" class="form-control" id="user_fax">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row hotel_book_form">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="package_name">Package Name</label>
                                                                        <input readonly="readonly" type="text" name="package_name" value="<?php the_title(); ?>" class="form-control" id="package_name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="user_find_us">How do you find us?</label>
                                                                                <select class="selectpicker form-control" id="user_find_us" data-live-search="true" name="user_find_us">
                                                                                    <option data-hidden="true">Find Us</option>
                                                                                    <?php
                                                                                    $find_us = array("Facebook", "Twitter", "GooglePlus", "LinkedIn", "By Web Search");
                                                                                    foreach ($find_us as $find) {
                                                                                    ?>
                                                                                    <option value="<?= $find; ?>"><?= $find; ?></option>
                                                                                    <?php
                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                            <div class = "form-group">
                                                                                <label style="display:block; width:100%;">Airport pickup</label>
                                                                                <?php
                                                                                $permison = array("Yes", "No");
                                                                                foreach ($permison as $permit) {
                                                                                ?>
                                                                                <input class="cusomt_chackbox select_category" value="<?= $permit; ?>" id="category_<?= $permit; ?>" type="radio" name="airport_pickup">
                                                                                <label for="category_<?= $permit; ?>" class="dd"><?= $permit; ?></label>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row hotel_book_form">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="user_adult">Adult *</label>
                                                                        <select class="selectpicker form-control" id="user_adult" name="user_adult" required>
                                                                            <option data-hidden="true">Select</option>
                                                                            <?php
                                                                            for ($ad = 1;
                                                                            $ad < 10;
                                                                            $ad++) {
                                                                            ?>
                                                                            <option value="<?= $ad; ?>"><?= $ad; ?></option>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="user_child">Child *</label>
                                                                        <select class="selectpicker form-control" id="user_child" name="user_child" required>
                                                                            <option data-hidden="true">Select</option>
                                                                            <?php
                                                                            for ($ad = 1;
                                                                            $ad < 10;
                                                                            $ad++) {
                                                                            ?>
                                                                            <option value="<?= $ad; ?>"><?= $ad; ?></option>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                                    <div class = "form-group">
                                                                        <label for = "check_in">Check-in Date *</label>
                                                                        <input readonly="readonly" type = "text" class = "form-control" value = "<?php echo get_post_meta($post->ID, 'pkg_departure_date', true); ?>"placeholder = "MM-DD-YYYY" name = "check_indate" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                                    <div class = "form-group">
                                                                        <label for = "check_out">Check-out Date *</label>
                                                                        <input readonly="readonly" type = "text" class = "form-control" value = "<?php echo get_post_meta($post->ID, 'pkg_return_date', true); ?>" placeholder = "MM-DD-YYYY" name = "check_outdate" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row hotel_book_form">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="user_mailling_address">Mailing Address *</label>
                                                                        <textarea cols="6" id="user_mailling_address" class="form-control" name="user_mailling_address" required></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="user_message">Your Message</label>
                                                                        <textarea cols="6" id="user_message" class="form-control" name="user_message"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="form-group text-center">
                                                                <button type="submit" name="book_package" class="btn btn-primary">Book Now</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile;
                            ?>
                            <div class="col-xs-12 col-md-3  packges_sidebar">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h1 class="page_heading text-uppercase sj" data-animate="fadeInUp" data-animation-delay="200">Others Packges</h1>

                                        <ul class="sj" data-animate="fadeInUp" data-animation-delay="300">
                                            <?php
                                            $packges_item_details = array(
                                                'post_type' => 'packeges',
                                                'posts_per_page' => 10,
                                                'order' => 'ASC'
                                            );
                                            $packges_item_loop = new WP_Query($packges_item_details);
                                            while ($packges_item_loop->have_posts()) : $packges_item_loop->the_post();
                                                ?>
                                                <li>
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </li>
                                                <?php
                                            endwhile;
                                            ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php
        get_footer();
        ?>