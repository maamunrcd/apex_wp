<?php
/*
 * Template Name:Image Gallery
 * 
 * The template for All Image Gallery
 *
 * This is the template that displays all Image Gallery.
 *
 */
get_header();
?>        
<main class="photo_gallery">
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
                        <?php
                        $photo_gallery = array(
                            'post_type' => 'photo_gallery',
                            'posts_per_page' => -1,
                            'order' => 'ASC'
                        );
                        $photo_gallery_loop = new WP_Query($photo_gallery);
                        while ($photo_gallery_loop->have_posts()) : $photo_gallery_loop->the_post();
                            ?>
                            <!-- Item 2 -->
                            <div class="element-item <?php echo get_post_meta($post->ID, 'photo_tag', true); ?>">
                                <?php echo the_post_thumbnail('thumbnail'); ?>
                                <div class="image_overlay">
                                    <a href="<?php echo the_post_thumbnail_url( 'full' ); ?>" class="magnific item">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
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
</main>
<?php
get_footer();
?>