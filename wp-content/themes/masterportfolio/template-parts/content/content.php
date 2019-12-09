<?php
/**
 * Generic template part to display publication
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (has_post_thumbnail()): ?>
        <figure class="border" title="<?php the_title_attribute(); ?>">
            <a class="thumbnail" href="<?php the_permalink(); ?>">
                <?php
                the_post_thumbnail('medium_large', array(
                    'class' => 'img-fluid',
                    'alt' => get_the_title(),
                ));
                ?>
            </a>
        </figure>
    <?php endif; ?>

    <a class="" href="<?php the_permalink(); ?>">
        <h3 class="text-uppercase font-weight-bold">
            <?php the_title(); ?>
        </h3>
    </a>

    <p class="font-italic"><?php the_category(', '); ?> - <?php echo get_the_date(); ?> - <?php the_author_posts_link(); ?></p>
    <p><?php the_tags('<i class="fas fa-tag fa-sm"></i> <span class="small">', ', ', '</span>'); ?></p>

    <?php the_excerpt(); ?>

    <a class="btn text-uppercase font-weight-bold rounded-0 py-3 px-4" href="<?php the_permalink(); ?>">
        <?php _e('Read more', 'masterportfolio'); ?>
    </a>

    <hr class="my-5">

</article><!-- #post-<?php the_ID(); ?> -->
