<?php
/**
 * Generic template part to display publication
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (has_post_thumbnail()): ?>
        <figure class="border" title="<?php the_title_attribute(); ?>">
            <?php
            the_post_thumbnail('large_narrow', array(
                'class' => 'img-fluid',
                'alt' => get_the_title(),
            ));
            ?>
        </figure>
    <?php endif; ?>

    <p class="mb-1">
        <i class="fas fa-user"></i>
        <?php the_author_posts_link(); ?>
        
        &nbsp;
        
        <i class="fas fa-calendar-alt"></i>
        <?php echo get_the_date(); ?> 

        &nbsp;

        <i class="fas fa-folder-open fa-sm"></i>
        <?php the_category(', '); ?>

        &nbsp;

        <i class="fas fa-tag fa-sm"></i>
        <?php the_tags('', ', ', ''); ?>
        
        &nbsp;

        <i class="fas fa-comments"></i>
        <?php echo get_comments_number(); ?>
    </p>

    <hr class="my-3">

    <?php the_content(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
