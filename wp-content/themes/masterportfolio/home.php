<?php
/**
 * The template for displaying blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
get_header();
?>

<main role="main">
    <div class="container pb-5 pt-3">
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
                        <!--/.col-->
                    <?php else: ?>
                        <div class="col-12">
                            <?php get_template_part('template-parts/content/content', 'none'); ?>
                        </div>
                        <!--/.col-->
                    <?php endif; ?>
                </div>
                <!--/.row-->

            </div>
            <!--/.col-->
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
