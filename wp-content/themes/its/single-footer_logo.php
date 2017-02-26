<?php
get_header();
while (have_posts()) : the_post();
    ?>
    <main class="contry_visa_info">
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
    endwhile;
    ?>
    <div class="main_content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 pull-right">
                    <h1 class="page_heading sj" data-animate="fadeInUp" data-animation-delay="200"><?php the_title(); ?></h1>
                </div>
                <div class="col-xs-12 col-md-4">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="paragraph sj" data-animate="fadeInUp" data-animation-delay="400">
                        <?php echo get_the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>