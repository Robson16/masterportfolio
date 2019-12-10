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
        <h3 class="text-uppercase font-weight-bold mb-1">
            <?php the_title(); ?>
        </h3>
    </a>

    <p class="mb-1">
        <i class="far fa-calendar-alt"></i>
        <?php echo get_the_date(); ?> 
        &nbsp;
        <i class="fas fa-user"></i>
        <?php the_author_posts_link(); ?>
        &nbsp;
        <i class="fas fa-folder-open fa-sm"></i>
        <?php the_category(', '); ?>
        &nbsp;
        <i class="fas fa-tag fa-sm"></i>
        <?php the_tags('', ', ', ''); ?>
    </p>

    <?php the_excerpt(); ?>

    <a class="btn btn-outline text-uppercase font-weight-bold py-3 px-4" href="<?php the_permalink(); ?>">
        <?php _e('Read more', 'masterportfolio'); ?>
    </a>

    <hr class="my-5">

</article><!-- #post-<?php the_ID(); ?> 
