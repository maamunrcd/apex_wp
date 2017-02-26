<?php
/*
 * Template Name:Video Gallery
 * 
 * The template for Video Gallery
 *
 * This is the template that displays Video Gallery.
 *
 */
get_header();
?>        
<main class="photo_gallery video_galleary">
    <div class="breadcrumb_cont">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                            <li class="active"><?php the_title(); ?></li>
                        </ol>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main_content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Masonry Content -->
                    <div class="grid">
                        <?php
                        $video_gallerys = array(
                            'post_type' => 'video_gallery',
                            'posts_per_page' => -1,
                            'order' => 'ASC'
                        );
                        $video_gallery_loop = new WP_Query($video_gallerys);
                        while ($video_gallery_loop->have_posts()) : $video_gallery_loop->the_post();
                            ?>
                            <div class="element-item">
                                <img src="<?="http://img.youtube.com/vi/".get_the_excerpt()."/0.jpg"?>" alt="" />
                                <div class="video_play">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                                <div class="image_overlay">
                                    <a href="https://www.youtube.com/watch?v=<?=get_the_excerpt() ?>" class="magnific item magnific-youtube" data-title="Main Building">
                                    </a>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        ?>
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
get_footer();
?>