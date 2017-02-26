<?php
$welcome_message_title = get_option('welcome_message_title');
$welcome_message = get_option('welcome_message');
$welcome_message_image = get_option('welcome_message_image');
$details_page_url = get_option('details_page_url');
$copyright_text = get_option('copyright_text');
$phone_no_1 = get_option('phone_no_1');
$phone_no_2 = get_option('phone_no_2');
$phone_no_3 = get_option('phone_no_3');
$email_1 = get_option('email_1');
$email_2 = get_option('email_2');
$email_3 = get_option('email_3');
$email_4 = get_option('email_4');
$address = get_option('address');
$address_2 = get_option('address_2');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Apex Engineering</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body <?php echo body_class(); ?>>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 header-top-contact">
                <ul class="top-margin list-unstyled list-inline">
                    <li><i class="fa fa-map-marker"></i> <?=$address;?></li>
                    <li><i class="fa fa-mobile"></i><?=$phone_no_1;?></li>
                    <li><i class="fa fa-envelope"></i> <a href="mailto:<?=$email_1?>"><?=$email_1?></a></li>
                </ul>
            </div>
            <div class="col-sm-3 header-top-social">
                <ul class="top-margin list-unstyled list-inline">
                    <li class="active"><a target="_blank" href="https://www.facebook.com/<?= $facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/<?= $twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/<?= $youtube; ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/<?= $instagram; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="https://plus.google.com/<?= $google_plus; ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/in/<?= $linked_in; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                </ul>

            </div>
        </div>
    </div>
</div><!-- End Header -->
<!-- End header -->

<!-- Navigation -->
<nav class="navbar navbar-default nav-color creb" data-animate="fadeInUp" data-animation-delay="300" data-spy="affix" data-offset-top="300">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php $logo_url = get_option('logo_url'); ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="img-responsive" src="<?php echo ($logo_url == '') ? esc_url(get_template_directory_uri()) . '/assets/images/logo.png' : $logo_url ?>" alt="" />
                </a>
                <a class="navbar-brand page-scroll" href="<?php echo ($logo_url == '') ? esc_url(get_template_directory_uri()) . '/assets/images/atomap-logo.png' : $logo_url ?><?php echo esc_url(home_url('/')); ?>"></a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
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
                  </ul>
            </div>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>