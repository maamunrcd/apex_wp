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
                        <li><a href="<?php echo esc_url(home_url('/')); echo get_post_type( get_the_ID())?>"><?php echo get_post_type( get_the_ID());?></a></li>
                        <li class="active"><?php the_title(); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section id="text-about">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php the_content(); ?>
                </div>
                <div class="col-md-4">
                    <div class="link-panel">
                        <ul>
                            <?php
                            $post_name=get_post_type( get_the_ID());
                            if($post_name=="post"){
                                ?>
                                    <div class="link-panel">
                                        <ul>
                                            <li>Recent Related News </li>
                                            <?php
                                            $post_list = array(
                                                'post_type' => 'post',
                                                'posts_per_page' => 2,
                                                'order' => 'DSC'
                                            );
                                            $post_list_loop = new WP_Query($post_list);
                                            while ($post_list_loop->have_posts()) : $post_list_loop->the_post();
                                                ?>
                                                <li>
                                                    <a href="<?php the_permalink();?>">
                                                        <?php echo get_the_title(); ?>
                                                    </a>
                                                </li>
                                                <?php
                                            endwhile;
                                            ?>
                                        </ul>
                                    </div>
                                <?php
                            }else{
                            ?>
                            <li>Industries Our <?=get_post_type( get_the_ID()) ?></li>
                            <?php
                            $post_list = array(
                                'post_type' => get_post_type( get_the_ID()),
                                'posts_per_page' => 8,
                                'order' => 'DSC'
                            );
                            $post_list_loop = new WP_Query($post_list);
                            while ($post_list_loop->have_posts()) : $post_list_loop->the_post();
                                ?>
                                <li>
                                    <a href="<?php the_permalink();?>">
                                        <?php echo get_the_title(); ?>
                                    </a>
                                </li>
                                <?php
                            endwhile;
                            ?>
                        </ul>
                    </div>
                    <div class="link-panel">
                        <ul>
                            <li>Recent Related News </li>
                                <?php
                                $post_list = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 2,
                                    'order' => 'DSC'
                                );
                                $post_list_loop = new WP_Query($post_list);
                                while ($post_list_loop->have_posts()) : $post_list_loop->the_post();
                                    ?>
                                    <li>
                                        <a href="<?php the_permalink();?>">
                                            <?php echo get_the_title(); ?>
                                        </a>
                                    </li>
                                    <?php
                                endwhile;
                                ?>
                        </ul>
                    </div>
                                <?php
                                }
                                ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile;
?>
<?php get_footer(); ?>