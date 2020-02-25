<?php

/** 
 * Template Name: Portfolio's Works
 * Template Post Type: page
 * 
 * Global template for use in front-page,
 * you can make this template as the model of a page,
 * this will use the content and below will make 
 * more things with the custom post-types of the theme
 * 
 */

get_header();
?>

<main role="main">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <?php the_content(); ?>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <?php
        $portfolio_items = new WP_Query( array(
            'post_type' => 'portfolio',
            'post_status' => 'publish',
        ) );

        if ( $portfolio_items->have_posts() ) :
        ?>
            <div class="row">

                <?php while ( $portfolio_items->have_posts() ) : $portfolio_items->the_post() ?>
                    <div class="col-12 col-md-6 col-lg-4 my-3">

                        <?php if ( has_post_thumbnail() ) : ?>
                            <figure title="<?php the_title_attribute(); ?>">
                                <a class="thumbnail" href="<?php the_permalink(); ?>">
                                    <?php
                                    the_post_thumbnail( 'thumbnails_portfolio', array(
                                        'class' => 'img-fluid',
                                        'alt' => get_the_title(),
                                    ) );
                                    ?>
                                </a>
                                <figcaption class="text-center mt-3"><?php echo get_the_title(); ?></figcaption>
                            </figure>
                        <?php endif; ?>

                    </div>
                    <!-- /.col -->
                <?php endwhile; ?>

                <div class="col-12 py-5">
                    <?php echo bootstrap_pagination( $portfolio_items ); ?>
                </div>
                <!-- /.col -->

                <?php wp_reset_postdata(); ?>
            </div>
            <!--/.row-->
        <?php endif; ?>

    </div>
    <!--/.container-->
</main>

<?php
get_footer();
