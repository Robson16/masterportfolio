<?php
/**
 * Generic template part to display publication
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <a href="<?php the_permalink(); ?>">
            <?php echo the_title("<h2 class='entry-title'>", "</h2>"); ?>
        </a>

        <?php if (has_post_thumbnail()): ?>
            <a class="post-image-overlayer" href="<?php the_permalink(); ?>">
                <?php
                the_post_thumbnail( 'narrow_large', array( 'alt' => get_the_title() ) );
                ?>
            </a>
        <?php endif; ?>

        <?php masterportfolio_post_meta(); ?>
    </header>
    <!-- /.entry-header -->

    <div class="entry-content">
        <?php the_excerpt(); ?>
	</div>
    <!-- /.entry-content -->
    
    <div class="entry-footer">
        <a class="read-more" href="<?php the_permalink(); ?>">
            <?php _e( 'Read more', 'masterportfolio' ); ?>
        </a>
        <hr>
    </div>
    <!-- ./entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->