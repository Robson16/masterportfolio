<?php
/**
 * Template part to display portfolio custom post-type 
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-4'); ?>>
    <?php if (has_post_thumbnail()): ?>
        <figure class="" title="<?php the_title_attribute(); ?>">
            <a class="thumbnail " href="<?php the_permalink(); ?>">
                <?php
                the_post_thumbnail('thumbnails_portfolio', array(
                    'class' => 'img-fluid border',
                    'alt' => get_the_title(),
                ));
                ?>
            </a>
            <a href="<?php the_permalink(); ?>">
                <figcaption class="h5 text-center mt-3"><?php echo get_the_title(); ?></figcaption>
            </a>
        </figure>
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->