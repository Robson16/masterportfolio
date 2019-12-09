<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
get_header();
?>

<main role="main">
    <div class="container pb-5 pt-3">
        <div class="row">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <?php get_template_part('template-parts/content/content'); ?>
                    </div>
                    <!-- /.col -->
                <?php endwhile; ?>
                <div class="col-12">
                    <?php bootstrap_pagination(); ?>
                </div>
                <!-- /.col -->
            <?php else: ?>
                <?php get_template_part('template-parts/content/content', 'none'); ?>
            <?php endif; ?>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</main>

<?php
get_footer();
