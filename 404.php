<?php

/**
 * The template for displaying 404 Error Page
 * 
 */
?>

<?php get_header(); ?>

<main role="main">
    <section>
        <div class="container">
            <h3><?php _e('This is somewhat embarrassing, isn’t it?', 'masterportfolio'); ?></h3>
            <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'masterportfolio'); ?></p>
            <?php get_search_form(); ?>
            <hr>
            <br>
        </div>
        <!-- /.container -->
    </section>
</main>

<?php 
get_footer();
