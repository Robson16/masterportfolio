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
            <div class="col">
                <h3 class="title">
                    <?php _e('Education', 'masterportfolio'); ?>
                </h3>
                <?php while ($education->have_posts()): $education->the_post() ?>
                    <div class="border border-top-0 border-right-0 border-left-0 pt-3">
                        <?php the_title('<h5 class="font-weight-bold">', '</h5>'); ?>
                        <p class="font-italic mb-1"><?php echo rwmb_meta('_masterportfolio_degree_institution'); ?></p>
                        <p class="small font-italic text-uppercase mb-3">
                            <?php echo date_i18n('F Y', rwmb_meta('_masterportfolio_degree_start')) . ' - ' . date_i18n('F Y', rwmb_meta('_masterportfolio_degree_end')); ?>
                        </p>
                        <?php the_excerpt(); ?>
                    </div>
                    <!--/.border-->
                <?php endwhile; ?>
            </div>
            <!-- /.col -->

            <div class="col border border-top-0 border-right-0 border-bottom-0">
                <h3 class="title">
                    <?php _e('Work Experience', 'masterportfolio'); ?>
                </h3>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</section>