<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$portfolio_items = new WP_Query(array(
    'post_type' => 'portfolio',
    'post_status' => 'publish',
    'posts_per_page' => 6,
));
?>

<?php if ($portfolio_items->have_posts()): ?>
    <section id="portfolio" class="portfolio bg-color-four">
        <div class="container">
            <div class="row py-5">
                <div class="col-12">
                    <hgroup class="text-center mb-5">
                        <h3 class="title title-cursive text-white"><?php _e('Portfolio', 'masterportfolio'); ?></h3>
                        <hr class="sm-line">
                        <h4 class="sub-title text-white"><?php _e('My Latest Works', 'masterportfolio'); ?></h4>
                    </hgroup>
                </div>
                <!-- /.col -->
                <?php while ($portfolio_items->have_posts()): $portfolio_items->the_post() ?>
                    <div class="col-12 col-md-6 col-lg-4 my-3">
                        <?php if (has_post_thumbnail()): ?>
                            <figure title="<?php the_title_attribute(); ?>">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    the_post_thumbnail('medium_large', array(
                                        'class' => 'img-fluid',
                                        'alt' => get_the_title(),
                                    ));
                                    ?>
                                </a>
                                <figcaption class="text-white mt-3"><?php echo get_the_title(); ?></figcaption>
                            </figure>
                        <?php endif; ?>
                    </div>
                    <!-- /.col -->
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <div class="col-12">
                    <a class="d-table btn btn-outline-white mx-auto" href="<?php echo get_post_type_archive_link('portfolio'); ?>"><?php _e('See More', 'masterportfolio'); ?></a>
                </div>
                <!-- /.col -->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
<?php endif; ?>