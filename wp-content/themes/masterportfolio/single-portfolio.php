<?php
/*
 * 
 */
?>

<?php get_header(); ?>

<main role="main">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <?php if (has_post_thumbnail()): ?>
                            <figure title="<?php the_title_attribute(); ?>">
                                <?php
                                the_post_thumbnail('medium_large', array(
                                    'class' => 'img-fluid',
                                    'alt' => get_the_title(),
                                ));
                                ?>
                            </figure>
                        <?php endif; ?>
                    </div>
                    <!--/.col-->
                    <div class="col-12 col-lg-4">
                        <hr>
                        <ul class="list-unstyled">
                            <li><span class="font-weight-bold text-uppercase"><?php _e('Client:', 'masterportfolio'); ?></span> Lorem Ipsum </li>
                            <li><span class="font-weight-bold text-uppercase"><?php _e('Design by:', 'masterportfolio'); ?></span> Lorem Ipsum </li>
                            <li><span class="font-weight-bold text-uppercase"><?php _e('Date:', 'masterportfolio'); ?></span> 10/10/2019 </li>
                        </ul>
                        <hr>
                        <?php the_content(); ?>
                        <hr>
                        <a class="btn btn-outline" href="<?php ?>" target="_blank" rel="noopener"><?php _e('See Online', 'masterportfolio'); ?></a>
                    </div>
                    <!--/.col-->
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </article>
        <!--/.<?php echo 'post-' . get_the_ID(); ?>-->
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
