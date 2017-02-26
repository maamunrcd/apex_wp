<?php
get_header();
while (have_posts()) : the_post();
    ?>      
    <main class="vision">
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
                    <div class="col-xs-12">
                        <div class="paragraph sj" data-animate="fadeInUp" data-animation-delay="400">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php endwhile;
?>
<?php get_footer(); ?>