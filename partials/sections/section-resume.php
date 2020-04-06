<?php
$education = new WP_Query(array(
    'post_type' => 'education',
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'meta_query' => array(
        'relation' => 'AND',
        'degree_end' => array(
            'key' => 'degree_end',
        ),
        'degree_ongoing' => array(
            'key' => 'degree_ongoing',
        ),
    ),
    'orderby' => array(
        'degree_ongoing' => 'DESC',
        'degree_end' => 'DESC',
    ),
));

$experience = new WP_Query(array(
    'post_type' => 'experience',
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'meta_query' => array(
        'relation' => 'AND',
        'experience_end' => array(
            'key' => 'experience_end',
        ),
        'experience_current' => array(
            'key' => 'experience_current',
        ),
    ),
    'orderby' => array(
        'experience_current' => 'DESC',
        'experience_end' => 'DESC',
    ),
));
?>

<?php if ($education->have_posts() || $experience->have_posts()): ?>
    <section id="resume" class="resume">
        <div class="container">
            <div class="row py-5">
                <div class="col-12">
                    <hgroup class="text-center mb-5">
                        <h3 class="title text-cursive"><?php _e('Resume', 'masterportfolio'); ?></h3>
                        <hr class="sm-line">
                        <h4 class="sub-title"><?php _e('Latest in my career', 'masterportfolio'); ?></h4>
                    </hgroup>
                </div>
                <!-- /.col -->

                <!--EDUCATION DEGREE-->
                <?php // If the other column has no post, we create this one with a larger column.    ?>
                <div class="<?php echo ($experience->have_posts()) ? 'col-12 col-md-6' : 'col-12'; ?>">
                    <?php if ($education->have_posts()): ?>
                        <a class="btn btn-outline mb-3" href="">
                            <h5 class="text-uppercase m-0">
                                <?php _e('Education', 'masterportfolio'); ?>
                            </h5>
                        </a>
                    <?php endif; ?>
                    <?php while ($education->have_posts()): $education->the_post() ?>
                        <div class="border border-top-0 border-right-0 border-left-0 my-3">
                            <p class="font-italic mb-0"><?php echo rwmb_meta('degree_institution'); ?></p>
                            <?php the_title('<h5 class="font-weight-bold text-uppercase mb-0">', '</h5>'); ?>
                            <p class="font-weight-light text-uppercase mb-3">
                                <?php
                                echo wp_date('F Y', rwmb_meta('degree_start'));
                                echo ' - ';
                                echo (rwmb_meta('degree_ongoing')) ? _e('Ongoing', 'masterportfolio') : wp_date('F Y', rwmb_meta('degree_end'));
                                ?>
                            </p>
                            <?php the_excerpt(); ?>
                        </div>
                        <!--/.border-->
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
                <!-- /.col -->
                <!--END EDUCATION DEGREE-->

                <!--WORK EXPERIENCES-->
                <?php // If the other column has no post, we create this one with a larger column.    ?>
                <div class="<?php echo ($education->have_posts()) ? 'col-12 col-md-6' : 'col-12'; ?>">
                    <?php if ($experience->have_posts()): ?>
                        <a class="btn btn-outline mb-3" href="">
                            <h5 class="text-uppercase m-0">
                                <?php _e('Work Experience', 'masterportfolio'); ?>
                            </h5>
                        </a>
                    <?php endif; ?>
                    <?php while ($experience->have_posts()): $experience->the_post() ?>
                        <div class="border border-top-0 border-right-0 border-left-0 my-3">
                            <p class="font-italic mb-0"><?php echo rwmb_meta('experience_company'); ?></p>
                            <?php the_title('<h5 class="font-weight-bold text-uppercase mb-0">', '</h5>'); ?>
                            <p class="font-weight-light text-uppercase mb-3">
                                <?php
                                echo wp_date('F Y', rwmb_meta('experience_start'));
                                echo ' - ';
                                echo (rwmb_meta('experience_current')) ? _e('Currently', 'masterportfolio') : wp_date('F Y', rwmb_meta('experience_end'));
                                ?>
                            </p>
                            <?php the_excerpt(); ?>
                        </div>
                        <!--/.border-->
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
                <!-- /.col -->
                <!--END WORK EXPERIENCES-->

            </div>
            <!-- /.row -->
        </div>
    </section>
<?php endif; ?>