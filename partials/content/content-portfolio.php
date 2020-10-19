<?php
/**
 * Template part to display portfolio custom post-type thumbnail
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'portfolio-item' ); ?>>
    <?php if (has_post_thumbnail()): ?>
        <figure title="<?php the_title_attribute(); ?>">
            <a class="post-image-overlayer " href="<?php the_permalink(); ?>">
                <?php
                the_post_thumbnail( 'thumbnails_portfolio', array( 'alt' => get_the_title() ) );
                ?>
            </a>
            <figcaption><?php echo get_the_title(); ?></figcaption>            
        </figure>
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->