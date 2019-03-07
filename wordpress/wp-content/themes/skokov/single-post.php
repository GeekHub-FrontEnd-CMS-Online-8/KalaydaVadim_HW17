<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Post</title>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <?php 
        
        add_action( 'wp_enqueue_scripts', 'connectCSSForNews');
        
        function connectCSSForNews() {
            wp_enqueue_style( 'header-single', SK_CSS_DIR.'/header-single.css');
            wp_enqueue_style( 'post-single', SK_CSS_DIR.'/post-single.css');
            wp_enqueue_style( 'footer-single', SK_CSS_DIR.'/footer-single.css');
        }
        set_post_thumbnail_size(1200, 500, true);
    
     function wph_human_comment_date($hdate = '') {
                                    if (!is_admin()) {
                                        $hdate = human_time_diff(get_comment_time('U'), 
                                        current_time('timestamp')) . ' ago';
                                    }
                                    return $hdate;
                                }
                                add_filter('get_comment_date', 'wph_human_comment_date');
    ?>
    <?php 
        wp_head();
    ?>
</head>
<body>

    <?php get_header('single'); ?>
  
   
   <main>
      <?php while ( have_posts() ){ the_post(); ?>
       <div class="post">
           <div class="post__container">
               <p class="post-paragraph">
                   <?php the_content(); ?>
               </p>
               <div class="post__comments">
                   <h3 class="post__comments-much"><?php echo get_comments_number($post_id); ?> comments</h3>
                   <hr class="post__comments-line">
                   <?php
                                $comments_args = array(
                                    // изменим название кнопки
                                    'label_submit' => 'Send',
                                    // заголовок секции ответа
                                    'title_reply'=>'Write a Reply or Comment',
                                    // удалим текст, который будет показано после того как коммент отправлен
                                    'comment_notes_after' => '',
                                    // переопределим textarea (тело формы)
                                    'comment_field' => '<p class="comment-form-comment"> <textarea id="comment" name="comment" cols="45" rows="8"  aria-required="true" required="required" placeholder="Comment"></textarea></p>',
                            );
                                    
                                comment_form($comments_args);
                            ?>
                            <?php
                                // The Query
                                $comments_query = new WP_Comment_Query;
                                $comments = $comments_query->query($args);

                                // Comment Loop
                                if ( $comments ) {
                                    foreach ( $comments as $comment ) {
                            ?>
                    <?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
                    <?php
                            }
                        }
                    ?>
               </div>
           </div>
       </div>
       <?php } ?>
   </main>
   
    <?php get_footer();?>
    <?php 
        wp_footer();
    ?>
    
</body>
</html>