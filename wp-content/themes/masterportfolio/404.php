<?php

/**
 * The template for displaying 404 Error Page
 * 
 */
?>

<?php get_header(); ?>

<main role="main">
    <section>
        <div class="container pb-5 pt-3">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <h3 class="text-center"><?php _e('This is somewhat embarrassing, isn’t it?', 'masterportfolio'); ?></h3>
                    <p class="text-center"><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'masterportfolio'); ?></p>
                    <?php get_search_form(); ?>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
</main>

<?php get_footer(); ?>