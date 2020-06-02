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
        <?php while( have_posts() ): the_post() ?>
            <div class="row">
                <div class="col-12">
                    <?php the_content(); ?>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        <?php endwhile; ?>

        <?php 
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        $portfolio_items = new WP_Query( array(
            'post_type'     => 'portfolio',
            'post_status'   => 'publish',
            'paged'         => $paged
        ) );
        
        if ( $portfolio_items->have_posts() ) : 
        ?>
            <div class="row">            
                <?php while ( $portfolio_items->have_posts() ) : $portfolio_items->the_post() ?>
                    <div class="col-12 col-md-6 col-lg-4 my-3">
                        <?php get_template_part('partials/content/content', 'portfolio'); ?>
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
