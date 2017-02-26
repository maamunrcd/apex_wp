<?php
/**
 * Template Name: Online Trip Booking
 * 
 * The template for displaying Online Trip Booking
 *
 */
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

        <?php
        /*         * *

         * Email template Sending Email Code Start

         * * */
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_REQUEST['send_now'])) {

                $all_info = $_REQUEST;

                $emplode = extract($all_info);



                /* ----Input Field Form Validation---- */

                if (is_string($form_name) && !empty($form_name)) {

                    $form_name_vali = stripslashes(str_replace(",", '', $form_name));
                }

                /* ----Input Field to Validation---- */

                if (is_string($to) && !empty($to)) {

                    $form_to_vali = stripslashes(str_replace(",", '', $to));
                }

                /* Adult Validation */
                $send_child_vali = intval($send_child);

                /* Adult Validation */
                $send_adalt_vali = intval($send_adalt);

                /* Adult Validation */
                $send_infants_vali = intval($send_infants);

                /* Adult Validation */
                $send_evoucher_vali = intval($send_evoucher);


                //Email address Validation
                if (!empty($form_email) && !filter_var($form_email, FILTER_VALIDATE_EMAIL) === false) {
                    $form_email_val = $form_email;
                }

                //phone number validation
                $form_phone_val = intval($form_phone);
                if (is_int($form_phone_val)) {
                    $form_phone_val_final = $form_phone_val;
                }
                //Fax number validation
                $form_fax_val = intval($form_fax);
                if (is_int($form_fax_val)) {
                    $form_fax_val_final = $form_fax_val;
                }

                $to = get_option('email_4');



                $subject = 'Online Trip Booking';



                $headers = "From: " . "$form_email_val" . "\r\n";

                $headers .= "Reply-To: " . "$form_email_val" . "\r\n";

                $headers .= "MIME-Version: 1.0\r\n";

                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                $message = '<html lang="en" style="margin: 0;padding: 0;overflow-y: scroll;"><head><style>.ii a[href]{color:white;}</style></head><body style="margin: auto;padding: 0 0 50px;width: 800px;">';

                $message .= '<main style="margin: 0;padding: 0;">

                <header style="margin: 0;padding: 0;">

                    <div class="logo_section" style="margin: 0;padding: 0;">

                        <div class="container" style="margin: 0;padding: 0;width: 800px;background:#069fe4;">

                            <div class="row" style="margin: 0;padding: 0;">

                                <div class="heading_title" style="margin: 0;padding: 0;">

                                    <div class="container" style="margin: 0;padding: 0;width: 800px;background:#069fe4">

                                        <div class="row" style="margin: 0;padding: 0;">

                                            <div class="col-xs-12" style="margin: 0;padding: 0;">

                                                <h4 style="text-align: center;padding: 15px;margin: 0;font-size: 22px;color: #fff;font-weight: 200;line-height: 40px;">Online Trip Booking</h4>

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

                $message .= "<td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>From</td>";

                $message .= "<td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($form_name_vali) . "&nbsp;</td></tr>";



                $message .= "<tr style='margin: 0;padding: 0;'>";

                $message .= "<td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>To</td>";

                $message .= "<td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($form_to_vali) . "&nbsp;</td></tr>";
                if (empty($onw_leaving)) {
                    $message .= "<tr style='margin: 0;padding: 0;'>";

                    $message .= "<td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Leaving</td>";

                    $message .= "<td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($returning_leaving) . "&nbsp;</td></tr>";

                    $message .= "<tr style='margin: 0;padding: 0;'>";

                    $message .= "<td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Returning</td>";

                    $message .= "<td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($returning_returning) . "&nbsp;</td></tr>";
                } else {
                    $message .= "<tr style='margin: 0;padding: 0;'>";

                    $message .= "<td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Leaving</td>";

                    $message .= "<td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($onw_leaving) . "&nbsp;</td></tr>";
                }

                $message .= "<tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Email</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($form_email_val) . "&nbsp;</td>

    </tr>
    
    <tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Phone</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($form_phone_val_final) . "&nbsp;</td>

    </tr>
    
    <tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Fax</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($form_fax_val_final) . "&nbsp;</td>

    </tr>
    
    <tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Adalt</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($send_adalt) . "&nbsp;</td>

    </tr>

    <tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Child</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($send_child) . "&nbsp;</td>

    </tr>
    
    <tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Infants</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($send_infants) . "&nbsp;</td>

    </tr>

    <tr style='margin: 0;padding: 0;'>

        <td style='width: 30%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>Evoucher</td>

        <td style='width: 59.5%;margin: 0;padding: 13px 20px;font-weight: 500;font-size: 15px;color: #fff;border-top: 1px solid #0097da;border-bottom: 1px solid  #0672a2;float: left;border-left: 1px solid #0097da;border-right: 1px solid  #0672a2;'>" . strip_tags($send_evoucher) . "&nbsp;</td>

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

                                        <strong>Online Trip Booking Successfull.</strong>

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



        <div class="main_content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="page_heading sj" data-animate="fadeInUp" data-animation-delay="200"><?php the_title(); ?></h1>
                    </div>
                    <div class="col-xs-12">
                        <div class="paragraph sj" data-animate="fadeInUp" data-animation-delay="400">
                            <?php
                            the_content();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="logo_items row">
                    <!--Form for Trip booking Start-->
                    <div class="hotel_reservation">
                        <div class="col-xs-12">
                            <form class="hotel_reservation_form" name="novalidate" method="post" action="">
                                <div class="reservation_others_field row">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="form_name">From *</label>
                                            <input type="text" name="form_name" placeholder="Form" class="form-control" id="form_name" >
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="to">To *</label>
                                            <input type="text" name="to" placeholder="To" class="form-control" id="to" >
                                        </div>
                                    </div>
                                    <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <div class = "form-group">
                                            <label class = "category_label">Check Returning Or One Way</label>
                                            <input class="cusomt_chackbox select_category" value="leaving" id="leaving" type="radio" name="leaving_return">
                                            <label for="leaving" class="on_wey">One way</label>
                                            <input class="cusomt_chackbox select_category" value="return" id="return" type="radio" name="leaving_return" checked>
                                            <label for="return" class="return_class">Return</label>
                                        </div>
                                    </div>
                                </div>
                                <div class = "reservation_others_field row">

                                    <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                        <div class = "row">
                                            <div class="returning_section">
                                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                                                    <div class = "form-group">

                                                        <label>Leaving *</label>

                                                        <input type = "text" class = "span2 form-control" value = "" id = "check_in" placeholder = "MM-DD-YYYY" name = "returning_leaving" >

                                                    </div>

                                                </div>

                                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                                                    <div class = "form-group">

                                                        <label>Returning *</label>

                                                        <input type = "text" class = "span2 form-control" value = "" id = "check_out" placeholder = "MM-DD-YYYY" name = "returning_returning" >

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="onweay_section" style="display: none;">
                                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                                                    <div class = "form-group">
                                                        <label>Leaving *</label>

                                                        <input type = "text" class = "span2 date_datepicker form-control" value = "" id = "onw_leaving" placeholder = "MM-DD-YYYY" name="onw_leaving" >

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <label for="send_adalt">Adult *</label>
                                                    <select class="selectpicker form-control" id="send_adalt" name="send_adalt">
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

                                        </div>

                                    </div>
                                </div>
                                <div class="row reservation_others_field">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="form_email">Email *</label>
                                            <input type="text" name="form_email" placeholder="Email" class="form-control" id="form_email" >
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="form_phone">Phone *</label>
                                            <input type="text" name="form_phone" placeholder="Phone" class="form-control" id="form_phone" >
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="form_fax">Fax *</label>
                                            <input type="text" name="form_fax" placeholder="Fax" class="form-control" id="form_fax" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row reservation_others_field">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="send_child">Children *</label>
                                            <select class="selectpicker form-control" id="send_child" name="send_child">
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
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="send_infants">Infants *</label>
                                            <select class="selectpicker form-control" id="send_infants" name="send_infants" ="">
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
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="send_evoucher">EVoucher</label>
                                            <select class="selectpicker form-control" id="send_evoucher" name="send_evoucher" >
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
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group text-center">
                                            <button type="submit" name="send_now" class="btn btn-primary">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                <!--Form for Trip booking End-->

            </div>
        </div>
    </div>
    </main>
<?php endwhile;
?>
<?php get_footer(); ?>