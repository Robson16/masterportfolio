<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header();
?>

<main role="main">
    <div class="container pb-5 pt-3">
        <div class="row">
            <div class="col-12 col-md-8">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php
                    get_template_part( 'partials/content/content' );
                    if ( comments_open() || get_comments_number() ) comments_template();
                    ?>
                <?php endwhile; ?>
            </div>
            <!-- /.col -->
            <div class="col-12 col-md-4">
                <?php get_sidebar(); ?>
            </div>
            <!--/.col-->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</main>

<?php
get_footer();
