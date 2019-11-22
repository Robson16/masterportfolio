<?php
$education = new WP_Query(array(
    'post_type' => 'education',
    'post_status' => 'publish',
    'post_per_page' => 2,
        ));
?>

<section id="resume" class="resume">
    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                <hgroup class="text-center mb-5">
                    <h3 class="title title-cursive"><?php _e('Resume', 'masterportfolio'); ?></h3>
                    <hr class="sm-line">
                    <h4 class="sub-title"><?php _e('My most recent experiences', 'masterportfolio'); ?></h4>
                </hgroup>
            </div>
            <!-- /.col -->
            <div class="col-12 col-lg-6">
                <a class="btn btn-outline mb-3" href="">
                    <h5 class="m-0">
                        <?php _e('Education', 'masterportfolio'); ?>
                    </h5>
                </a>

                <?php while ($education->have_posts()): $education->the_post() ?>
                    <div class="border border-top-0 border-right-0 border-left-0 pt-3">
                        <p class="font-italic mb-0"><?php echo rwmb_meta('_masterportfolio_degree_institution'); ?></p>
                        <?php the_title('<h5 class="font-weight-bold text-uppercase mb-0">', '</h5>'); ?>
                        <p class="font-weight-light text-uppercase mb-3">
                            <?php echo date_i18n('F Y', rwmb_meta('_masterportfolio_degree_start')) . ' - ' . date_i18n('F Y', rwmb_meta('_masterportfolio_degree_end')); ?>
                        </p>
                        <?php the_excerpt(); ?>
                    </div>
                    <!--/.border-->
                <?php endwhile; ?>
            </div>
            <!-- /.col -->

            <div class="col-12 col-lg-6">
                <a class="btn btn-outline mb-3" href="">
                    <h5 class="m-0">
                        <?php _e('Work Experience', 'masterportfolio'); ?>
                    </h5>
                </a>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</section>