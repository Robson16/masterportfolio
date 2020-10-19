<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div class="comments">
    <?php
    if ( have_comments() ) :
    ?>
        <h4 class="comments-title">
            <?php _e( 'Comments', 'masterportfolio' ); ?>
        </h4>

        <?php the_comments_navigation(); ?>

        <ul class="comment-list">
            <?php
            wp_list_comments( array(
                'style' => 'ul',
                'short_ping' => true,
                'avatar_size' => 46,
            ) );
            ?>
        </ul>
        <!-- .comment-list -->
    <?php 
        the_comments_navigation();
    endif; 
    
    // If the comments are closed, but there are some, we leave a small warning.
    if ( !comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
        <p class="no-comments"><?php _e( 'Comments closed.', 'masterportfolio' ); ?></p>
    <?php
    endif;

    comment_form( array(
        'title_reply_before' => '<h4 id="reply-title" class="comment-reply-title">',
        'title_reply' => __( 'Leave a comment.', 'masterportfolio' ),
        'title_reply_after' => '</h4>',
    ) );
    ?>
</div>
<!-- /.comments -->
