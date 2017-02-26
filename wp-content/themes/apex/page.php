<?php
get_header();
while (have_posts()) : the_post();
    ?>
    <section id="company-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h3 class="brat_cumb"><?php echo get_the_title(); ?></h3>
                </div>
                <div class="col-sm-6 col-md-6">
                    <ol class="breadcrumb brat_cumb pull-right">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li class="active"><?php the_title(); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div id="text-about">
        <div class="container">
        <?php the_content(); ?>
        </div>
    </div>
    <?php
endwhile;
get_footer();
?>

