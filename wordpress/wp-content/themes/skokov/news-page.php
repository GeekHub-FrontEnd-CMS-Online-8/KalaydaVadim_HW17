<?php
    /* Template Name: Page News */
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <?php 
        
        add_action( 'wp_enqueue_scripts', 'connectCSSForNews');
        
        function connectCSSForNews() {
            wp_enqueue_style( 'news-header', SK_CSS_DIR.'/news-header.css');
            wp_enqueue_style( 'news', SK_CSS_DIR.'/news.css');
            wp_enqueue_style( 'footer-news', SK_CSS_DIR.'/footer-news.css');
        }
    
        add_filter("the_title", "plugin_myTitleFilter");

            function plugin_myTitleFilter($title)
            { 
                return mb_substr($title, 0, 90);
            }

            add_filter("the_content", "plugin_myContentFilter");

            function plugin_myContentFilter($content)
            { 
                return mb_substr($content, 0, 200);
            }
    ?>
    <?php 
        wp_head();
    ?>
</head>
<body>

   <?php get_header('news'); ?>
   
   <main>
       <div class="news">
           <div class="news__container">
               <div class="news__content">
                   <div class="news__search-block">
                        <div class="news__search">
                            <form method="get" role="search" class="news__search__form" action="<?php echo home_url( '/' ) ?>">
                                <input type="text" name="s" alue="<?php echo get_search_query() ?>" class="news__search__form-input">
                                <button class="news__search__form-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <?php
                    ?>
                   <div class="news__content__left">
                      <?php
                            $args = array(
                                'post_type'      => 'post',
                                'posts_per_page' => '4',
                                'paged'          => get_query_var('paged')?: 1
                            );

                            $query = new WP_Query($args);
                            if($query->have_posts()) {
                                while($query->have_posts()) {
                                    $query->the_post();
                                    if ($query->current_post % 2) :
                    ?>
                      <div class="news__content__left__post">
                            <div class="news__content__left__post__text">
                                <div class="news__content__left__post__text__container">
                                    <div class="news__content__left__post__text__top">
                                        <h3 class="news__content__left__post__text__top-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="news__content__left__post__text__top-underline"></div>
                                        <div class="news__content__left__post__text__top-paragraph"><?php the_content(); ?></div>
                                    </div>
                                    <div class="news__content__left__post__text__bottom"> 
                                        <p class="news__content__left__post__text__bottom-date"><?php the_time('m/d/Y'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php if(has_post_thumbnail()) { 
                            echo get_the_post_thumbnail(get_the_ID());
                        }else {
                            echo '<img class="blogs__post__top-image" src="'.SK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                        }; ?>
                       </div>
                       <?php else: ?>
                       <div class="news__content__left__post">
                            <?php if(has_post_thumbnail()) { 
                            echo get_the_post_thumbnail(get_the_ID());
                        }else {
                            echo '<img class="blogs__post__top-image" src="'.SK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                        }; ?>
                            <div class="news__content__left__post__text">
                                <div class="news__content__left__post__text__container">
                                    <div class="news__content__left__post__text__top">
                                        <h3 class="news__content__left__post__text__top-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="news__content__left__post__text__top-underline"></div>
                                        <div class="news__content__left__post__text__top-paragraph"><?php the_content(); ?></div>
                                    </div>
                                    <div class="news__content__left__post__text__bottom"> 
                                        <p class="news__content__left__post__text__bottom-date"><?php the_time('m/d/Y'); ?></p>
                                    </div>
                                </div>
                            </div>
                       </div>
                       <?php endif; ?>
                       <?php
                                }

                            } else {}

                            wp_reset_postdata();

                        ?>
                   </div>
                   
                                    
                   <div class="news__content__right">
                      <?php $args = array(
                                'post_type'      => 'rightposts',
                                'posts_per_page' => '2',
                                'paged'          => get_query_var('paged')?: 1
                            );

                            $query = new WP_Query($args);
                            if($query->have_posts()) {
                                while($query->have_posts()) {
                                    $query->the_post(); ?>
                       <?php if(has_post_thumbnail()) { 
                            echo get_the_post_thumbnail(get_the_ID());
                        }else {
                            echo '<img class="news__content__right-image" src="'.SK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                        }; ?>
                       <div class="news__content__left__post__text">
                            <div class="news__content__left__post__text__container">
                                <div class="news__content__left__post__text__top">
                                    <h3 class="news__content__left__post__text__top-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="news__content__left__post__text__top-underline"></div>
                                    <div class="news__content__left__post__text__top-paragraph"><?php the_content(); ?></div>
                                </div>
                                <div class="news__content__left__post__text__bottom"> 
                                    <p class="news__content__left__post__text__bottom-date"><?php the_time('m/d/Y'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                                }

                            } else {}

                            wp_reset_postdata();

                        ?>
                   </div>
               </div>
               <div class="news__content__bottom">
                    <a href="<?php echo home_url( '/newsexpanded' ) ?>" class="news__content__bottom-btn">show more</a>
               </div>
           </div>
       </div>
   </main>
   
   <?php get_footer(); ?>
   <?php 
        wp_footer();
    ?>
    
</body>
</html>