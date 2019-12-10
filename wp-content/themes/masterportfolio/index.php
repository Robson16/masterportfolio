<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */
?>

<?php get_header(); ?>

<main role="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="row">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-12">
                                <?php get_template_part('template-parts/content/content'); ?>
                            </div>
                            <!-- /.col -->
                        <?php endwhile; ?>
                        <div class="col-12">
                            <?php bootstrap_pagination(); ?>
                        </div>
                        <!-- /.col -->
                    <?php else: ?>
                        <div class="col-12">
                            <?php get_template_part('template-parts/content/content', 'none'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-md-4">
                <?php get_sidebar(); ?>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</main>


<?php get_footer(); ?>