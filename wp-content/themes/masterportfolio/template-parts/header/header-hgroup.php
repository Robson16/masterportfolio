<hgroup>
    <?php if (is_single()): ?>

        <h1 class="title title-cursive"><?php echo get_the_title(); ?></h1>

    <?php elseif (is_blog()): ?>

        <h1 class="title title-cursive"><?php _e('Blog', 'masterportfolio'); ?></h1>

    <?php elseif (is_tax()): ?>

        <h1 class="title title-cursive"><?php _e('Taxonomia', 'masterportfolio'); ?></h1>
        <h2 class=""><?php single_term_title(); ?></h2>

    <?php elseif (is_archive()): ?>

        <h1 class="title title-cursive"><?php echo post_type_archive_title('', false); ?></h1>
        <?php if (is_tag() || is_category() || is_author()): ?>

            <hr>
            <h1 class=""><?php the_archive_title(); ?></h1>

        <?php endif; ?>

    <?php else: ?>  

        <h1 class="title title-cursive"><?php echo get_the_title(); ?></h1>

    <?php endif; ?>

    <hr>

    <?php if (rwmb_meta('subtitle')): ?>

        <h2><?php echo rwmb_meta('subtitle'); ?></h2>

    <?php endif; ?>
</hgroup>