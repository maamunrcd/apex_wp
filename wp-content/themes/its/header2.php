<!DOCTYPE html>
<html lang="en">
    <head>
        <?php wp_head(); ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(); ?></title>
        <!-- Stylesheet for Bootstrap Core CSS v3.3.6 -->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet">
        <!-- Stylesheet for Bootstrap Datepicker v4.17.37-->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/datepicker.css" rel="stylesheet">
        <!-- Stylesheet for Bootstrap Dropdown -->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap-select-master/dist/css/bootstrap-select.min.css" rel="stylesheet">

        <!-- Stylesheet for Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,700,200' rel='stylesheet' type='text/css'>

        <!-- Stylesheet for Fontawesome-->
        <link href='<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

        <!-- jcarousel Css -->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/jcarousel.responsive.css" rel="stylesheet">

        <!-- Stylesheet for slider core css -->
        <link rel='stylesheet' id='rs-plugin-settings-css'  href='<?php echo get_template_directory_uri(); ?>/assets/rs-plugin/css/settings.css' type='text/css' media='all' />

        <!-- Animate Css-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" />

        <!--Stylesheet for Magnific Popup -->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific_popup.css" rel="stylesheet"> 

        <!-- Custom Css -->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">

        <!-- responsive Css -->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">

        <!-- jQuery v1.12.2 -->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    </head>
    <body <?php echo body_class(); ?>>
        <?php
        //Quick contact
        $phone_no_1 = get_option('phone_no_1');
        $email_1 = get_option('email_1');

        $google_plus = get_option('google_plus');
        $facebook = get_option('facebook');
        $instagram = get_option('instagram');
        $twitter = get_option('twitter');
        $linked_in = get_option('linked_in');
        $youtube = get_option('youtube');

        //office shedule
        $weekly_first_day = get_option('weekly_first_day');
        $weekly_last_day = get_option('weekly_last_day');
        $office_opening_time = get_option('office_opening_time');
        $office_closing_time = get_option('office_closing_time');
        ?>
        <header>
            <!--Top Bar Start Here-->
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <!--Contact Info-->
                        <div class="quick_contact col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <ul>
                                <li><a href="mailto:<?= $email_1; ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i><?= $email_1; ?></a></li>
                                <li><a href="tel:<?= $phone_no_1; ?>"><i class="fa fa-phone" aria-hidden="true"></i><?= $phone_no_1; ?></a></li>
                            </ul>
                        </div><!--End Contact Info-->

                        <!--Weather Widget Start Here-->
                        <div class="hidden-xs col-xs-12 col-sm-3 col-md-2 col-lg-2 col-lg-offset-3">
                            <div class="weather">
                                <?php
                                $xml = simplexml_load_file("http://api.openweathermap.org/data/2.5/weather?q=Dhaka&mode=xml&appid=1bc6553a459dcd63e395709cdc976c87&units=metric") or die("Error: Cannot create object");
                                ?>
                                <img class="weather_icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/weather.png" alt="" />
                                <sup class="degree">
                                    <?= ceil($xml->temperature['value']); ?>&#176;
                                </sup>
                                <span class="city">Dhaka</span>
                            </div>
                        </div><!--End Weather-->

                        <!--Social Icons Start Here-->
                        <div class="social_links hidden-xs col-xs-12 col-sm-3 col-md-3 pull-right">
                            <ul>
                                <li class="active"><a target="_blank" href="https://www.facebook.com/<?= $facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/<?= $twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://www.youtube.com/<?= $youtube; ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/<?= $instagram; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://plus.google.com/<?= $google_plus; ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/in/<?= $linked_in; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div><!--End Social Icons-->
                    </div>
                </div>
            </div><!--End Top Bar-->        
            <div class="banner">
                <div class="container">
                    <div class="row">
                        <div class="logo_section col-xs-12 col-sm-3 col-md-3">
                            <?php $logo_url = get_option('logo_url'); ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>"> 
                                <img src="<?php echo ($logo_url == '') ? esc_url(get_template_directory_uri()) . '/assets/images/logo.png' : $logo_url ?>" alt="" />
                            </a>
                        </div>
                        <div class="opening_day_section col-xs-12 col-sm-9 col-md-6 col-lg-5 col-lg-offset-1">
                            <ul class="opening_day">
                                <li><a href="#">Opening Day</a></li>
                                <li><a href="#"><?= $weekly_first_day; ?> to <?= $weekly_last_day; ?>  <span><?= $office_opening_time; ?> - <?= $office_closing_time; ?></span></a></li>
                            </ul>
                        </div>
                        <div class="search_section col-xs-12 col-sm-3 col-md-3 visible-md visible-lg">
                            <form role="search" method="get" class="custom_form form-inline search-form" action="<?php echo esc_url(home_url('/')); ?>">
                                <div class="form-group input_search">
                                    <input type="text" name="s" class="form-control" id="search" placeholder="Search....">
                                </div>
                                <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main_memu navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="search_button_phone visible-sm visible-xs" href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
                    <form class="search_form">
                        <div class="form-group input_search">
                            <input type="text" class="form-control" id="search" placeholder="Search....">
                        </div>
                        <a class="search_disable" href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cross.png"></a>
                    </form>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php
                        wp_nav_menu(array(
                            'them_location' => 'main-menu',
                            'menu_class' => 'nav navbar-nav',
                            'container_class' => 'majkhanarclass',
                            'container_id' => 'majkhanarid',
                            'container' => '',
                            'fallback_cb' => 'default_main_menu',
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                        ?>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header><!--End Header-->