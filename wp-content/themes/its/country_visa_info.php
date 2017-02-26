<?php
include './header.php';
?>         
<main class="contry_visa_info">
    <div class="breadcrumb_cont">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Our Psa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main_content">
        <div class="container">
            <div class="row">
                <div class="country_information">
                    <div class="select_country col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="dropdown text-center">
                            <button class="btn btn-primary form-control dropdown-toggle" type="button" data-toggle="dropdown">>> Choose the Country You will Visit
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <?php
                                $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                                foreach ($countries as $country) {
                                    ?>
                                    <li><a href="country_visa_info.php"><?php echo $country; ?></a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2967.68380509185!2d-71.28433968510865!3d41.94264536935242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e460b2180cd7cd%3A0x18ffae270ee75aa0!2sGermani+%26+Germani+PC!5e0!3m2!1sen!2sbd!4v1469468557330" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <div class="country_details_section">
                            <p class="country_details text-center">
                                Country Details
                            </p>
                            <div class="country_details_info">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p class="details_title">Country Name<span>:</span></p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="details_content">Germany</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p class="details_title">Capital City<span>:</span></p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="details_content">Berlin</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p class="details_title">Currency<span>:</span></p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="details_content">Euro(EUR)</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p class="details_title">Local Time<span>:</span></p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="details_content">GMT + 1</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p class="details_title">Telephone Code <span>:</span></p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="details_content">+ 49</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p class="details_title">Bank<span>:</span></p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="details_content">Closed on Saturday and Sunday.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p class="details_title">Exchange Rate<span>:</span></p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="details_content">1.00 EUR is equivalent to 87.91 BDT</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="application_section">
                            <figure class="thumbnail_image">
                                <img class="img-responsive" src="assets/images/country_image.jpg" alt="" />
                            </figure>
                            <div class="country_name_and_details">
                                <h3 class="country_title">Germany </h3>
                                <p class="continents_name">
                                    <a href="#">Europe</a>
                                    <span class="line">|</span>
                                    <a href="#">Schengen Visa Countries</a>
                                </p>
                                <p class="pudate_date">
                                    <span>Last Update</span>
                                    <span class="line">:</span>
                                    <span>Apr 4, 2016 @ 2:42 pm</span>
                                </p>
                            </div>
                            <div class="visiting_facilitys">
                                <p class="main_title">VISAThing! Facilitates you with Germany visa from Bangladesh.</p>
                                <div class="visiting_facilitys_info">
                                    <p class="visiting_facilitys_title">Embassy of the Federal Republic of Germany</p>
                                    <p class="address">Gulshan North Avenue<br>
                                        Dhaka – 1212, Bangladesh<br>
                                        Phone: (+88) 02 985 3521-24<br>
                                        Fax: (+88) 02 985 3260<br>
                                        Website: <a href="http://www.dhaka.diplo.de/" target="_blank">http://www.dhaka.diplo.de/<br>
                                        </a>Email: <a href="mailto:visa@dhak.diplo.de" target="_blank">visa@dhak.diplo.de</a>
                                    </p>
                                    <p class="paragraph">The Visa Counter is closed on Sundays. The Visa Section will accept applications from Monday to Thursday from 9.00 am to 11.30 am. For applications, you are kindly requested to make an appointment at the German Embassy in Dhaka. To know the online appointment system of the Embassy of Germany, Dhaka, </p>
                                </div>
                                <div class="visiting_facilitys_info">
                                    <p class="visiting_facilitys_title">Appointments for Visa:</p>
                                    <ol>
                                        <li>Appointments can be done through telephone during office hours.</li>
                                        <li>Tel.: (+88) 02 9853521, ext. 153</li>
                                        <li>Please note that no appointment can be done through Email or Fax.</li>
                                        <li>Telephone calls regarding Visa queries will be replied from 08:15 hrs until 09:00 hrs and again from 15:30 hrs until 16:00 hrs only.</li>
                                    </ol>
                                </div>
                                <div class="visiting_facilitys_info">
                                    <p class="visiting_facilitys_title">Appointment procedure for students seeking visa is different than the others.</p>
                                    <p class="visiting_facilitys_title">Schengen visa (Short-term visa for business trips, visits of family or friends and tourist purposes)</p>
                                    <p class="paragraph">If you are a national of Bangladesh and want to travel
                                        to Germany for business trips, visits of family or friends and tourist
                                        purposes, you need a short term Schengen visa. For applications, you are 
                                        kindly requested to make an appointment at the German Embassy in Dhaka. 
                                        If all your documents are correct and complete, a decision on your visa
                                        application can usually be made within seven days after the appointment.
                                        For further information, see the <a href="#">requirements for Schengen visa and the application process.</a>
                                    </p>
                                    <p class="paragraph">
                                        For more detail information &nbsp;:&nbsp;<a href="http://www.dhaka.diplo.de/Vertretung/dhaka/en/02/0Einreise__Hauptbereich.html" target="_blank">Click here</a></p>
                                </div>
                                <div class="visiting_facilitys_info">
                                    <p>** VISAThing! provides&nbsp;<strong>personalized visa consultancy service</strong>&nbsp;for Germany (Consultancy fee applicable).</p>
                                    <p class="visiting_facilitys_title">Our consultancy services include</p>
                                    <ol>
                                        <li>Your Background & Travel History study,</li>
                                        <li>Identifying loop hole in the application documentation,</li>
                                        <li>Preparing best approach for visa application.</li>
                                    </ol>
                                </div>
                                <div class="visiting_facilitys_info">
                                    <p class="visiting_facilitys_title">Call for Your Appointment: </p>
                                    <p>0175-551-3804, 0175-551-3805 or E-mail us: <a href="mailto:cr@visathing.com">cr@visathing.com</a></p>
                                </div>
                            </div>
                            <div class="make_with_appoinment">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                    Make an appointment with us for consultancy service 
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="visiting_facilitys_info">
                                                    <p class="visiting_facilitys_title">Call for Your Appointment: </p>
                                                    <form method="post" action="">
                                                        <div class="row hotel_book_form">
                                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                                <div class="row">
                                                                    <div class="col-xs-12 descripction_input">
                                                                        <div class="form-group">

                                                                            <label for="your_name">Your Name *</label>

                                                                            <input type="text" class="form-control" id="your_name" placeholder="Your Name" name="your_name">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                                <div class="row">
                                                                    <div class="col-xs-12 descripction_input">
                                                                        <div class="form-group">

                                                                            <label for="your_email">Your Email *</label>

                                                                            <input type="text" class="form-control" id="your_email" placeholder="Your Email" name="your_name">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                                <div class="row">
                                                                    <div class="col-xs-12 descripction_input">
                                                                        <div class="form-group">

                                                                            <label for="your_occupation">Your Occupation *</label>

                                                                            <input type="text" class="form-control" id="your_occupation" placeholder="Your Occupation" name="your_occupation">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                                <div class="row">
                                                                    <div class="col-xs-12 descripction_input">
                                                                        <div class="form-group">

                                                                            <label for="your_cell_number">Your Cell Number *</label>
                                                                            <input type="text" class="form-control" id="your_cell_number" placeholder="Your Cell Number" name="your_cell_number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                                <div class="row">
                                                                    <div class="col-xs-12 descripction_input">
                                                                        <div class="form-group">

                                                                            <label for="your_wish_visit">Country you wish to visit *</label>

                                                                            <input type="text" class="form-control" id="your_wish_visit" placeholder="Country you wish to visit" name="your_wish_visit">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                                <div class="row">
                                                                    <div class="col-xs-12 descripction_input">
                                                                        <div class="form-group">
                                                                            <label class="visa_info">Purpose of the visit</label>
                                                                            <input  class="cusomt_chackbox select_category" id="purpose_visit" type="radio" name="purpose_visit">
                                                                            <label for="purpose_visit" class="dd">Business</label>
                                                                            <input class="cusomt_chackbox select_category" id="purpose_visit_2" type="radio" name="purpose_visit">
                                                                            <label for="purpose_visit_2" class="dd">Tourist</label>
                                                                            <input class="cusomt_chackbox select_category" id="purpose_visit_3" type="radio" name="purpose_visit">
                                                                            <label for="purpose_visit_3" class="dd">Others</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                    <label for="prospective_travel_date">Prospective Travel Date</label>
                                                                    <input type="text" class="datepicker form-control" value="" id="prospective_travel_date" placeholder="MM-DD-YYYY" name="check_indate">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                <div class="row">
                                                                    <div class="col-xs-12 descripction_input">
                                                                        <div class="form-group">

                                                                            <label for="travel_history">Travel History (Countries previously visited)</label>

                                                                            <textarea rows="5" type="text" class="form-control" id="travel_history" placeholder="Travel History" name="travel_history"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                <div class="row">
                                                                    <div class="col-xs-12 descripction_input">
                                                                        <div class="form-group">
                                                                            <label for="already_apply_visa">List of Documents you already have to apply for the visa</label>
                                                                            <textarea rows="5" type="text" class="form-control" id="already_apply_visa" placeholder="List of Documents you already have to apply for the visa" name="already_apply_visa"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group text-center">
                                                                    <button type="submit" class="btn btn-primary">Confirm Appointment</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contry_social_info">
                                <ul>
                                    <li><a class="fb_bg" href=""><i class="fa fa-facebook" aria-hidden="true"></i><span>Share</span></a></li>
                                    <li><a class="twit_bg" href=""><i class="fa fa-twitter" aria-hidden="true"></i><span>Share</span></a></li>
                                    <li><a class="g_plus_bg" href=""><i class="fa fa-google-plus" aria-hidden="true"></i><span>Share</span></a></li>
                                    <li><a class="link_bg" href=""><i class="fa fa-linkedin" aria-hidden="true"></i><span>Share</span></a></li>
                                    <li><a class="pint_bg" href=""><i class="fa fa-pinterest" aria-hidden="true"></i>Share</span></a></li>
                                </ul>
                            </div>
                            <div class="some_more_popular">
                                <p class="visiting_facilitys_title">Some more popular destinations</p>
                                <p>Please click on the flags for detailed checklist.</p>
                                <div class="row">
                                    <div class="county_flat_item col-sm-3 col-md-2 col-lg-2">
                                        <div class="thumbnail text-center">
                                            <img src="assets/images/country_flag.jpg" alt="country_flag">
                                            <div class="caption">
                                                <p>Angola</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="county_flat_item col-sm-3 col-md-2 col-lg-2">
                                        <div class="thumbnail text-center">
                                            <img src="assets/images/country_flag2.jpg" alt="country_flag2">
                                            <div class="caption">
                                                <p>Namibia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="county_flat_item col-sm-3 col-md-2 col-lg-2">
                                        <div class="thumbnail text-center">
                                            <img src="assets/images/country_flag3.jpg" alt="country_flag3">
                                            <div class="caption">
                                                <p>Venezuela</p>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="county_flat_item col-sm-3 col-md-2 col-lg-2">
                                        <div class="thumbnail text-center">
                                            <img src="assets/images/country_flag4.jpg" alt="country_flag4">
                                            <div class="caption">
                                                <p>Angola</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="county_flat_item col-sm-3 col-md-2 col-lg-2">
                                        <div class="thumbnail text-center">
                                            <img src="assets/images/country_flag5.jpg" alt="country_flag5">
                                            <div class="caption">
                                                <p>Namibia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="county_flat_item col-sm-3 col-md-2 col-lg-2">
                                        <div class="thumbnail text-center">
                                            <img src="assets/images/country_flag7.jpg" alt="country_flag7">
                                            <div class="caption">
                                                <p>Malawi</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="county_flat_item col-sm-3 col-md-2 col-lg-2">
                                        <div class="thumbnail text-center">
                                            <img src="assets/images/country_flag2.jpg" alt="country_flag2">
                                            <div class="caption">
                                                <p>Namibia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="county_flat_item col-sm-3 col-md-2 col-lg-2">
                                        <div class="thumbnail text-center">
                                            <img src="assets/images/country_flag5.jpg" alt="country_flag5">
                                            <div class="caption">
                                                <p>Namibia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="county_flat_item col-sm-3 col-md-2 col-lg-2">
                                        <div class="thumbnail text-center">
                                            <img src="assets/images/country_flag.jpg" alt="country_flag">
                                            <div class="caption">
                                                <p>Angola</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="county_flat_item col-sm-3 col-md-2 col-lg-2">
                                        <div class="thumbnail text-center">
                                            <img src="assets/images/country_flag7.jpg" alt="country_flag7">
                                            <div class="caption">
                                                <p>Malawi</p>
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
</main>
<?php
include './footer.php';
?>