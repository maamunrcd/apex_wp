<?php
include './header.php';
?>         
<main class="our_packages_list">
    <div class="breadcrumb_cont">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">Holiday  Packages</a></li>
                        <li class="active">Spring Package</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="contain_section">
        <div class="main_content our_packages">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="page_heading">Spring Package</h1>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $speed = 2;
                    for ($i = 0; $i < 3; $i++) {
                        ?>
                        <div class="packages_item col-xs-12 col-sm-6 col-md-4 sj" data-animate="fadeInUp" data-animation-delay="<?php echo $speed; ?>00">
                            <div class="item">
                                <img class="img-responsive" alt="pkg_img" src="assets/images/pkg.jpg">
                                <div class="row packages_info">
                                    <div class="col-xs-12">
                                        <span class="tag">30 % Off</span>
                                        <div class="col-xs-4 pkg_item pkg_day"><a href="#">12 Days</a></div>
                                        <div class="col-xs-4 pkg_item pkg_group"><a href="#">Group Tour</a></div>
                                        <div class="col-xs-4 pkg_item pag_price"><a href="#">52,900৳</a></div>
                                    </div>
                                </div>
                                <div class="packages_details">
                                    <h3><a href="#">Thailand holyday package</a></h3>
                                    <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's sta</p>
                                    <a class="btn btn-primary" href="packages_details.php">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        $speed+=1;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include './footer.php';
?>