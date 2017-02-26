<?php
include './header.php';
?>         
<main class="photo_gallery">
    <div class="breadcrumb_cont">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Photo Gallery</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main_content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!--Masonry Header-->
                    <div class="masonry_filter">
                        <div class="button-group filters-button-group">
                            <button class="btn active btn-default button is-checked" data-filter="*">All</button>
                            <button class="btn btn-default button" data-filter=".asia">Asia</button>
                            <button class="btn btn-default button" data-filter=".america">America</button>
                            <button class="btn btn-default button" data-filter=".europe">Europe</button>
                            <button class="btn btn-default button" data-filter=".see_beatch">See Beatch</button> 
                        </div><!--End Masonry Header-->
                    </div>

                    <!-- Masonry Content -->
                    <div class="grid">
                        <!-- Item 1 -->
                        <div class="element-item" data-category="">
                            <img src="assets/images/gallery/thumb/hotel_1.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/hotel_1.jpg" class="magnific item" data-title="Main Building">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="element-item asia " data-category="room">
                            <img src="assets/images/gallery/thumb/hotel_2.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/hotel_2.jpg" class="magnific item" data-title="Room 1">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="element-item america" data-category="america">
                            <img src="assets/images/gallery/thumb/usa.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/usa.jpg" class="magnific item" data-title="Gym 2">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Item 4 -->
                        <div class="element-item europe" data-category="restaurant">
                            <img src="assets/images/gallery/thumb/france.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/france.jpg" class="magnific item" data-title="Restaurant 1">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Item 5 -->
                        <div class="element-item america" data-category="restaurant">
                            <img src="assets/images/gallery/thumb/cox_bazar.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/cox_bazar.jpeg" class="magnific item" data-title="Restaurant 2">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Item 6 -->
                        <div class="element-item europe" data-category="room">
                            <img src="assets/images/gallery/thumb/france_2.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/france_2.jpg" class="magnific item" data-title="Room 2">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Item 7 -->
                        <div class="element-item asia " data-category="gym">
                            <img src="assets/images/gallery/sea.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/thumb/sea.jpg" class="magnific item" data-title="Gym 1">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Item 8 -->
                        <div class="element-item see_beatch " data-category="beach">
                            <img src="assets/images/gallery/thumb/usa_2.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/usa_2.jpg" class="magnific item" data-title="Beach 1">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Item 1 -->
                        <div class="element-item" data-category="">
                            <img src="assets/images/gallery/thumb/hotel_1.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/hotel_1.jpg" class="magnific item" data-title="Main Building">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="element-item asia " data-category="room">
                            <img src="assets/images/gallery/thumb/hotel_2.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/hotel_2.jpg" class="magnific item" data-title="Room 1">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="element-item america" data-category="america">
                            <img src="assets/images/gallery/thumb/usa.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/usa.jpg" class="magnific item" data-title="Gym 2">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Item 4 -->
                        <div class="element-item europe" data-category="restaurant">
                            <img src="assets/images/gallery/thumb/france.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/france.jpg" class="magnific item" data-title="Restaurant 1">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Item 5 -->
                        <div class="element-item america" data-category="restaurant">
                            <img src="assets/images/gallery/thumb/cox_bazar.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/cox_bazar.jpeg" class="magnific item" data-title="Restaurant 2">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Item 6 -->
                        <div class="element-item europe" data-category="room">
                            <img src="assets/images/gallery/thumb/france_2.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/france_2.jpg" class="magnific item" data-title="Room 2">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Item 7 -->
                        <div class="element-item asia " data-category="gym">
                            <img src="assets/images/gallery/sea.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/thumb/sea.jpg" class="magnific item" data-title="Gym 1">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Item 8 -->
                        <div class="element-item see_beatch " data-category="beach">
                            <img src="assets/images/gallery/thumb/usa_2.jpg" alt="" />
                            <div class="image_overlay">
                                <a href="assets/images/gallery/usa_2.jpg" class="magnific item" data-title="Beach 1">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--End Masonry Content-->

                </div>
            </div>
        </div>
    </div>
</main>
<script>
    jQuery(document).ready(function () {

        /*=============Code for Masonry Gallery ==============*/
        var grid = document.querySelector('.grid');
        var jQuerygrid = jQuery('.grid').isotope({
            itemSelector: '.element-item'
        });
        var iso = jQuerygrid.data('isotope');
        jQuerygrid.isotope('reveal', iso.items);
        imagesLoaded(grid, function () {
            iso.layout();
        });
        /*bind filter button click*/
        jQuery('.filters-button-group').on('click', 'button', function () {
            var filterValue = jQuery(this).attr('data-filter');
            filterValue = filterValue;
            jQuerygrid.isotope({filter: filterValue});
        });
        /*change is-checked class on buttons*/
        jQuery('.button-group').each(function (i, buttonGroup) {
            var jQuerybuttonGroup = jQuery(buttonGroup);
            jQuerybuttonGroup.on('click', 'button', function () {
                jQuerybuttonGroup.find('.active').removeClass('active');
                jQuery(this).addClass('active');
            });
        });
    })
</script>
<?php
include './footer.php';
?>