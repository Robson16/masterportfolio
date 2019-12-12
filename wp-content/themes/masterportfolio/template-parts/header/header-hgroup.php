<hgroup>
    <?php if (is_single()): ?>

        <h1 class="title title-cursive"><?php echo get_the_title(); ?></h1>

    <?php elseif (is_search()): ?>

        <h1 class="d-inline-block title title-cursive"><?php _e('Search results for:', 'masterportfolio'); ?></h1>
        <span class="h3 title"><?php echo get_search_query(); ?></span>

    <?php elseif (is_post_type_archive('portfolio')): ?>

        <h1 class="title title-cursive"><?php echo post_type_archive_title('', false); ?></h1>

    <?php elseif (is_archive()): ?>

        <h1 class="title title-cursive"><?php the_archive_title(); ?></h1>

    <?php elseif (is_blog()): ?>

        <h1 class="title title-cursive"><?php _e('Blog', 'masterportfolio'); ?></h1>

    <?php else: ?>  

        <h1 class="title title-cursive"><?php echo get_the_title(); ?></h1>

    <?php endif; ?>

    <?php if (rwmb_meta('subtitle')): ?>

        <h2><?php echo rwmb_meta('subtitle'); ?></h2>

    <?php endif; ?>
</hgroup>

<hr class="mt-0">