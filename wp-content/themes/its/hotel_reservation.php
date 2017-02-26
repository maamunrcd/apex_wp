<?php
/*

 * Template Name: Hotel-Reservation

 * 

 * The template for displaying Hotel-Reservation Form

 *

 */

get_header();
$email_address_sendemail = get_option('email_4');
if (have_posts()) : while (have_posts()) : the_post();
        ?> 

        <main class="hotel_reservation">

            <!--Breadcrumb Start-->

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

            </div><!--End Breadcrumb-->

            <?php
            /*             * *

             * Email template Sending Email Code Start

             * * */

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                if (isset($_REQUEST['book_now'])) {

                    $all_info = $_REQUEST;

                    $emplode = extract($all_info);



                    /* ----Input Field destination Validation---- */

                    if (is_string($destination) && !ctype_digit($destination) && !empty($destination)) {

                        $hotel_res_destination = stripslashes(str_replace(",", '', $destination));
                    }

                    /* ------Input Field Validation. Country----- */

                    if (is_string($reservation_country) && !ctype_digit($reservation_country) && !empty($reservation_country)) {

                        $hotel_res_country = stripslashes(str_replace(",", '', $reservation_country));
                    }

                    /* ------Input Field Validation. City----- */

                    if (is_string($reservation_city) && !ctype_digit($reservation_city) && !empty($reservation_city)) {

                        $hotel_res_city = stripslashes(str_replace(",", '', $reservation_city));
                    }

                    //input Field Validation. nationality

                    if (is_string($nationality) && !ctype_digit($nationality) && !empty($nationality)) {

                        $hotel_res_nationality = stripslashes(str_replace(",", '', $nationality));
                    }



                    //Email address Validation

                    if (!empty($hotel_reser_email) && !filter_var($hotel_reser_email, FILTER_VALIDATE_EMAIL) === false) {

                        $hotel_res_email = $hotel_reser_email;
                    }



                    //phone number validation

                    $hotel_res_phone_in = intval($hotel_reser_phone);

                    if (is_int($hotel_res_phone_in)) {

                        $hotel_res_phone = $hotel_res_phone_in;
                    }



                    /* Adult Validation */

                    $hotel_res_adult_num = intval($res_adalt);

                    if (is_int($hotel_res_adult_num)) {

                        $hotel_res_adult = trim(stripslashes($hotel_res_adult_num));
                    }

                    /* Adult Validation */

                    $hotel_res_child_in = intval($res_child);

                    if (is_int($hotel_res_child_in)) {

                        $hotel_res_child = trim(stripslashes($hotel_res_child_in));
                    }



                    /* ----Hotel Res Markup---- */

                    $hotel_res_markup_in = intval($markup);

                    if (is_int($hotel_res_markup_in)) {

                        $hotel_res_markup = trim(stripslashes($hotel_res_markup_in));
                    }

                    /* ----Hotel Res Total Night---- */

                    $hotel_res_night = intval($total_night);

                    if (is_int($hotel_res_night)) {

                        $hotel_res_total_night = trim(stripslashes($hotel_res_night));
                    }



                    /* -----Hotel Res Hotel Name----- */

                    if (is_string($search_hotel_name) && !ctype_digit($search_hotel_name) && !empty($search_hotel_name)) {

                        $hotel_res_hotelName = trim(stripslashes(str_replace(",", '', $search_hotel_name)));
                    }

                    //phone number validation

                    if (!empty($category_0)) {

                        $frist_star = trim(stripslashes(str_replace(",", '', $category_0)));
                    }

                    if (!empty($category_1)) {

                        $secendstar = trim(stripslashes(str_replace(",", '', $category_1)));
                    }

                    if (!empty($category_2)) {

                        $threestar = trim(stripslashes(str_replace(",", '', $category_2)));
                    }

                    if (!empty($category_3)) {

                        $fourstar = trim(stripslashes(str_replace(",", '', $category_3)));
                    }
                    if (!empty($category_4)) {

                        $fivestar = trim(stripslashes(str_replace(",", '', $category_4)));
                    }

                    $to = get_option('email_4');



                    $subject = 'Hotel Reservation Apartments';



                    $headers = "From: " . "$hotel_res_email" . "\r\n";

                    $headers .= "Reply-To: " . "$hotel_res_email" . "\r\n";

                    $headers .= "MIME-Version: 1.0\r\n";

                    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                    $message = '<html lang="en" style="margin: 0;padding: 0;overflow-y: scroll;"><head><style>.ii a[href]{color:white;}</style></head><body style="margin: auto;padding: 0 0 50px;width: 800px;">';

                    $message .= '<main style="margin: 0;padding: 0;">

                <header style="margin: 0;padding: 0;">

                    <div class="logo_section" style="margin: 0;padding: 0;">

                        <div class="container" style="margin: 0;padding: 0;width: 800px;background:#069fe4;">

                            <div class="row" style="margin: 0;padding: 0;">
                            
                                <div class="heading_title" style="margin: 0;padding: 0;">

                                    <div  class="container" style="margin: 0;padding: 0;width: 800px;background:#069fe4">

                                        <div class="row" style="margin: 0;padding: 0;">

                                            <div class="col-xs-12" style="margin: 0;padding: 0;">

                                                <h4 style="text-align: center;padding: 15px;margin: 0;font-size: 22px;color: #fff;font-weight: 200;line-height: 40px;">Hotel Reservation Apartments</h4>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div></div></div></header>

                <div class="container" style="margin: 0;padding: 0;width: 800px;background:#0091d2">

                    <div class="row" style="margin: 0;padding: 0;">

                        <div class="main_bg" style="margin: 0;padding: 0;padding-bottom: 35px;">

                            <div class="content_table" style="margin: 0;padding: 0;background:#0091d2">

                                <table class="container" width="650" cellpadding="0" cellspacing="0" border="0" style="margin: 0;padding: 0;width: 100%;">

                                    ';

                    $message .= "<tr style='margin: 0;padding: 0;'>";

                    $message .= "<td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Discripction</td>";

                    $message .= "<td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($hotel_res_destination) . "&nbsp;</td></tr>";



                    $message .= "<tr style='margin: 0;padding: 0;'>";

                    $message .= "<td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Country</td>";

                    $message .= "<td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($hotel_res_country) . "&nbsp;</td></tr>";



                    $message .= "<tr style='margin: 0;padding: 0;'>";

                    $message .= "<td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>City</td>";

                    $message .= "<td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($hotel_res_city) . "&nbsp;</td></tr>";



                    $message .= "<tr style='margin: 0;padding: 0;'>";

                    $message .= "<td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Nationality</td>";

                    $message .= "<td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($hotel_res_nationality) . "&nbsp;</td></tr>";

                    $message .= "<tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Email</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($hotel_res_email) . "&nbsp;</td>

    </tr>

    <tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Phone</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($hotel_res_phone) . "&nbsp;</td>

    </tr>

    <tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Adult</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($hotel_res_adult) . "&nbsp;</td>

    </tr>

    <tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Child</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($hotel_res_child) . "&nbsp;</td>

    </tr>

    <tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Mark Up</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($hotel_res_markup) . "&nbsp;</td>

    </tr>

    <tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Check-in Date</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($check_indate) . "&nbsp;</td>

    </tr>

    <tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Check-Out Date</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($check_outdate) . "&nbsp;</td>

    </tr>

    <tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Total Nights</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($hotel_res_total_night) . "&nbsp;</td>

    </tr>

    <tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Hotel Name</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($hotel_res_hotelName) . "&nbsp;</td>

    </tr>

    <tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Category</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($frist_star . "," . $secendstar . "," . $threestar . "," . $fourstar . "," . $fivestar) . "&nbsp;</td>

    </tr>";
                    ?>

                    <?php
                    $message .= '

                                </table>

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

                                            <strong>Hotel Reservation Successfull.</strong>

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



            /*             * *

             * Email template Sending Email Code End

             * * */
            ?>

            <div class="main_content">

                <div class="container">

                    <div class="row">

                        <div class="col-xs-12">

                            <h1 class="page_heading">Search Hotels and Apartments</h1> 

                        </div>
                        <div class="col-xs-12">
                            <div class="paragraph sj" data-animate="fadeInUp" data-animation-delay="400">
                                <?php
                                the_content();
                                ?>
                            </div>
                        </div>

                    </div>

                    <form class="hotel_reservation_form" method="post" action="<?php echo htmlentities($_SERVER['SCRIPT_URI']); ?>">

                        <div class="row hotel_book_form">

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                                <div class="row">

                                    <div class="col-xs-12">

                                        <label for="discripction">Discripction</label>

                                    </div>

                                    <div class="icon_left col-xs-2 hidden-xs hidden-sm col-md-1 col-lg-1">

                                        <label class="hotel_icon" for="discripction">

                                            <i class="fa fa-building-o" aria-hidden="true"></i>

                                        </label>

                                    </div>

                                    <div class="descripction_input col-xs-12 col-sm-12 col-md-8 col-lg-8">

                                        <div class="form-group">

                                            <input type="text" class="form-control" id="discripction" placeholder="Enter Destination" name="destination">

                                        </div>

                                    </div>

                                    <div class="col-xs-2 hidden-xs hidden-sm col-md-2 col-lg-2">   

                                        <span class="or">OR</span>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                                <div class="row">

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <div class="form-group">

                                            <label for="reservation_country">Country *</label>

                                            <select class="selectpicker form-control" data-live-search="true" name="reservation_country">

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

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <div class="form-group">

                                            <label for="reservation_city">City *</label>

                                            <input type="text" name="reservation_city" placeholder="City Name" class="form-control" id="reservation_city">

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="reservation_others_field row">

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">

                                <div class="form-group">

                                    <label for="nationality">Nationality of Residency *</label>

                                    <input type="text" name="nationality" placeholder="Nationality" class="form-control" id="nationality">

                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">

                                <div class="form-group">

                                    <label for="hotel_reser_email">Email *</label>

                                    <input type="text" name="hotel_reser_email" placeholder="Email" class="form-control" id="hotel_reser_email">

                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">

                                <div class="form-group">

                                    <label for="hotel_reser_phone">Phone *</label>

                                    <input type="text" name="hotel_reser_phone" class="form-control" id="hotel_reser_phone" placeholder="Phone">

                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">

                                <div class="form-group">

                                    <label for="res_adalt">Adult *</label>

                                    <select class="selectpicker form-control" id="res_adalt" name="res_adalt">

                                        <option>Select</option>

                                        <?php
                                        for ($ad = 1; $ad < 9; $ad++) {
                                            ?>

                                            <option value="<?= $ad; ?>"><?= $ad; ?></option>

                                            <?php
                                        }
                                        ?>

                                    </select>

                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">

                                <div class="form-group">

                                    <label for="res_child">Child *</label>

                                    <select class="selectpicker form-control" id="res_child" name="res_child">

                                        <option>Select</option>

                                        <?php
                                        for ($ad = 1; $ad < 9; $ad++) {
                                            ?>

                                            <option value="<?= $ad; ?>"><?= $ad; ?></option>

                                            <?php
                                        }
                                        ?>

                                    </select>

                                </div>

                            </div>

                            <div class = "col-xs-12 col-sm-6 col-md-4 col-lg-2">

                                <div class = "form-group">

                                    <label for = "markup">Mark Up <span class = "input_new">New</span><span class = "input_ques">?</span></label>

                                    <select class = "selectpicker form-control" id = "markup" name = "markup">

                                        <option>Select</option>

                                        <option>2</option>

                                        <option>3</option>

                                        <option>4</option>

                                        <option>5</option>

                                    </select>

                                </div>

                            </div>

                        </div>

                        <div class = "reservation_others_field row">

                            <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-4">

                                <div class = "row">

                                    <div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">

                                        <div class = "form-group">

                                            <label for = "check_in">Check-in Date *</label>

                                            <input type = "text" class = "span2 form-control" value = "" id = "check_in" placeholder = "MM-DD-YYYY" name = "check_indate">

                                        </div>

                                    </div>

                                    <div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">

                                        <div class = "form-group">

                                            <label for = "check_out">Check-out Date *</label>

                                            <input type = "text" class = "span2 form-control" value = "" id = "check_out" placeholder = "MM-DD-YYYY" name = "check_outdate">

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-2">

                                <div class = "form-group">

                                    <label for = "total_night">Total Nights *</label>

                                    <input type = "text" class = "form-control" id = "total_night" placeholder = "Total Nights" name = "total_night" name = "total_night">

                                </div>

                            </div>

                            <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-3">

                                <div class = "form-group">

                                    <label for = "search_hotel_name">Hotel Name<span class = "input_new">New</span><span class = "input_ques">?</span></label>

                                    <input type = "text" class = "form-control" id = "search_hotel_name" placeholder = "Hotel Name" name = "search_hotel_name">

                                </div>

                            </div>

                            <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-3">

                                <div class = "form-group">

                                    <label class = "category_label">Category</label>

                                    <?php
                                    $category_list = array("1 Star", "2 Star", "3 Star", "4 Star", "5 Star");

                                    $category_count = count($category_list);

                                    for ($i = 0; $i < $category_count; $i++) {
                                        ?>

                                        <input class="cusomt_chackbox select_category" value="<?php echo $category_list[$i]; ?>" id="category_<?= $i; ?>" type="checkbox" name="category_<?= $i ?>">

                                        <label for="category_<?php echo $i; ?>" class="dd"><?php echo $i + 1; ?></label>

                                        <?php
                                    }
                                    ?>

                                    <input class="cusomt_chackbox select_category" id="category_all" type="checkbox" name="category">

                                    <label for="category_all">All</label>

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-xs-12">

                                <div class="form-group text-center">

                                    <button type="submit" name="book_now" class="btn btn-primary">Book Now</button>

                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        </main>

        <script type="text/javascript">

            jQuery(document).ready(function($) {

                $('#category_all').click(function(event) {

                    if (this.checked) {

                        $('.select_category').each(function() {

                            this.checked = true;

                        });

                    } else {

                        $('.select_category').each(function() {

                            this.checked = false;

                        });

                    }

                });

            })

        </script>

        <?php
    endwhile;

endif;

get_footer();
?>