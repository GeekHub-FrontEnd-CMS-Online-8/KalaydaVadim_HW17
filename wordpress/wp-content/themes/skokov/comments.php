<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Skokov
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
?>
<div class="post__comments__comment">
    <?php
            $size = 50;
            echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?>
    <div class="post__comments__comment__text">
        <div class="post__comments__comment__text__top">
            <p class="post__comments__comment__text__top-text"><?php echo get_comment_author( $comment_ID ) ?>   /   <?php echo get_comment_date(); ?>   /   replay</p>
        </div>
        <p class="post__comments__comment__text-bottom"><?php echo $comment->comment_content; ?></p>
    </div>
</div>

