<?php
/**
 * Template part to display portfolio custom post-type 
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-4'); ?>>

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
        <?php the_title('<h5 class="text-center my-3">', '</h5>'); ?>
    </a>

</article><!-- #post-<?php the_ID(); ?> -->


