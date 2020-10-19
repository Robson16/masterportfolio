<?php
/**
 * Archive template to display custom post-type of portfolio items
 *
 */

get_header(); 
?>

<main role="main">
    <div class="container">
        <div class='portfolio-grid'>
            <?php
            if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'partials/content/content', 'portfolio' );
                    }
                } else {
                    get_template_part( 'partials/content/content', 'none' );
                }
            ?>
            </div>
        <!-- /.portfolio-grid -->

        <?php the_posts_pagination(); ?>

    </div>
    <!-- /.container -->
</main>

<?php 
get_footer();