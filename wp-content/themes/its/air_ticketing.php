<?php
include './header.php';
?>         
<main class="our_clients">
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
    <div class="main_content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="page_heading sj" data-animate="fadeInUp" data-animation-delay="200"><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 sj" data-animate="fadeInUp" data-animation-delay="400">
                    <p>
                        Our dedicated staff is awaiting your call round the 24/7.We operate special tours upon request with Competitive fares. We arrange e-tickets by using most modern technology in the world.
                    </p>
                    <p>
                        We are working with various airlines; such as: Emirates Airways, Etihad Airways, Saudi Arabian Airlines, Qatar Airways, Gulf Air, Malaysia Airlines, Singapore Airlines, Thai Airways, Kuwait Airways, GMG Airlines, Air India Express, Biman Bangladesh Airlines, China Southern etc. Besides selling package, we also arrange tickets of all destinations of the world.
                        We have a strong relation with all the Airlines. As a reflection of that we can issue ticket at competitive price in regular basis.
                    </p>
                </div>
            </div>

            <!--Form for Trip booking Start-->
            <form class="hotel_reservation_form" method="post" action="<?php echo htmlentities($_SERVER['SCRIPT_URI']); ?>">
                <div class="reservation_others_field row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label for="nationality">From *</label>
                            <input type="text" name="nationality" placeholder="Nationality" class="form-control" id="nationality">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label for="nationality">To *</label>
                            <input type="text" name="nationality" placeholder="Nationality" class="form-control" id="nationality">
                        </div>
                    </div>
                    <div class = "col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class = "form-group">
                            <label class = "category_label">Category</label>
                            <input class="cusomt_chackbox select_category" value="return" id="return" type="checkbox" name="return">
                            <label for="return" class="dd">Return</label>
                            <input class="cusomt_chackbox select_category" value="return" id="return" type="checkbox" name="return">
                            <label for="return" class="dd">Return</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
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
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label for="res_adalt">Children *</label>
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
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label for="res_adalt">Infants *</label>
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
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="res_adalt">EVoucher</label>
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
                </div>

        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group text-center">
                    <button type="submit" name="book_now" class="btn btn-primary">Send</button>
                </div>

            </div>
        </div>
        </form> <!--Form for Trip booking End-->
        
        
        <div class="logo_items row">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="single_logo_item sj animated fadeInUp" data-animate="fadeInUp" data-animation-delay="200" style="animation-delay: 200ms;">
                    <a target="_blank" href="http://www.emirates.com/ae/english/">
                        <img class="img-responsive" src="assets/images/air_ticketing1.png" alt="air_ticketing">
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="single_logo_item sj animated fadeInUp" data-animate="fadeInUp" data-animation-delay="400" style="animation-delay: 400ms;">
                    <a target="_blank" href="https://www.biman-airlines.com/">
                        <img class="img-responsive" src="assets/images/air_ticketing.png" alt="air_ticketing2">
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="single_logo_item sj animated fadeInUp" data-animate="fadeInUp" data-animation-delay="600" style="animation-delay: 600ms;">
                    <a target="_blank" href="https://www.qatarairways.com ">
                        <img class="img-responsive" src="assets/images/air_ticketing3.jpg" alt="air_ticketing3">
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="single_logo_item sj animated fadeInUp" data-animate="fadeInUp" data-animation-delay="800" style="animation-delay: 800ms;">
                    <a target="_blank" href="http://www.emirates.com/ae/english/">
                        <img class="img-responsive" src="assets/images/air_ticketing1.png" alt="air_ticketing">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<?php
include './footer.php';
?>