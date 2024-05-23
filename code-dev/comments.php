<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Code Dev
 * @since 0.1
 */

// If the post is password protected and the visitor has not yet entered the password, return early without loading the comments.
if (post_password_required()) {
    return;
}
?>


<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ($comments_number === '1') {
                printf(_x('One comment on &ldquo;%s&rdquo;', 'comments title', 'code-dev'), get_the_title());
            } else {
                printf(
                    _nx(
                        '%1$s comment on &ldquo;%2$s&rdquo;',
                        '%1$s comments on &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'code-dev'
                    ),
                    number_format_i18n($comments_number),
                    get_the_title()
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 42,
            ));
            ?>
        </ol>

        <?php the_comments_navigation(); ?>

        <?php if (!comments_open()) : ?>
            <p class="no-comments"><?php _e('Comments are closed.', 'code-dev'); ?></p>
        <?php endif; ?>
    <?php endif; // Check for have_comments(). ?>

    <?php
    comment_form(array(
        'title_reply'          => __('Leave a Reply', 'code-dev'),
        'title_reply_to'       => __('Leave a Reply to %s', 'code-dev'),
        'cancel_reply_link'    => __('Cancel Reply', 'code-dev'),
        'label_submit'         => __('Post Comment', 'code-dev'),
        'comment_notes_before' => '',
        'comment_notes_after'  => '',
    ));
    ?>

</div><!-- #comments -->
