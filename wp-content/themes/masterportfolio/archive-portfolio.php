<?php
/**
 * Archive template to display custom post-type of portfolio items
 *
 */
?>

<?php get_header(); ?>

<main role="main">
    <div class="container">
        <div class="row">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <?php get_template_part('template-parts/content/content', 'portfolio'); ?>
                    </div>
                    <!-- /.col -->
                <?php endwhile; ?>
                <div class="col-12 mt-5">
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


<?php get_footer(); ?>