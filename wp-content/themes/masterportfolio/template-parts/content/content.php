<?php
/**
 * Generic template part to display publication
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>" aria-label="<?php _e('Read more about:', 'masterportfolio'); ?> <?php the_title(); ?>">
            <?php
            the_post_thumbnail('medium', array(
                'class' => 'img-fluid mb-3',
                'title' => get_the_title(),
                'alt' => get_the_title(),
            ));
            ?>
        </a>
    <?php endif; ?>

    <a class="" href="<?php the_permalink(); ?>">
        <h3 class="text-uppercase font-weight-bold">
            <?php the_title(); ?>
        </h3>
    </a>

    <p class="font-italic"><?php the_category(', '); ?> - <?php echo get_the_date(); ?> - <?php the_author_posts_link(); ?></p>

    <?php the_excerpt(); ?>

    <a class="btn text-uppercase font-weight-bold rounded-0 py-3 px-4" href="<?php the_permalink(); ?>">
        <?php _e('Read more', 'masterportfolio'); ?>
    </a>

    <hr class="my-5">

</article><!-- #post-<?php the_ID(); ?> -->
