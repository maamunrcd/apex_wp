<?php
/*
 * Template Name: Career
 * 
 * The template for Career Page
 *
 */
get_header();

if (have_posts()) : while (have_posts()) : the_post();
        ?>    
        <main class="career">
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
                            <h1 class="page_heading"><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        </div>
                        <div class="col-xs-12">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <?php
                                $total_career = array(
                                    'post_type' => 'career',
                                    'posts_per_page' => -1,
                                    'order' => 'ASC'
                                );
                                $career_loop = new WP_Query($total_career);
                                $sr = 1;
                                while ($career_loop->have_posts()) : $career_loop->the_post();
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading<?=$sr?>">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$sr?>" aria-expanded="true" aria-controls="collapse<?=$sr?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse<?=$sr?>" class="panel-collapse collapse <?=($sr==1)?'in':''?>" role="tabpanel" aria-labelledby="heading<?=$sr?>">
                                            <div class="panel-body">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $sr++;
                                endwhile;
                                ?> 
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </main>
        <?php
    endwhile;
endif;
get_footer();
?>