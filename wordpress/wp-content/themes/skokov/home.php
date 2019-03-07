<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <?php 
        
        add_action( 'wp_enqueue_scripts', 'connectCSSForHome');
        
        function connectCSSForHome() {
            wp_enqueue_style( 'header', SK_CSS_DIR.'/header.css');
            wp_enqueue_style( 'services', SK_CSS_DIR.'/services.css');
            wp_enqueue_style( 'contact-us', SK_CSS_DIR.'/contact-us.css');
            wp_enqueue_style( 'what-we-do', SK_CSS_DIR.'/what-we-do.css');
            wp_enqueue_style( 'slider', SK_CSS_DIR.'/slider.css');
            wp_enqueue_style( 'strategic', SK_CSS_DIR.'/strategic.css');
            wp_enqueue_style( 'home-news', SK_CSS_DIR.'/home-news.css');
            wp_enqueue_style( 'contact', SK_CSS_DIR.'/contact.css');
            wp_enqueue_style( 'footer-home', SK_CSS_DIR.'/footer-home.css');
        }
    
        add_filter("the_title", "plugin_myTitleFilterHome");

            function plugin_myTitleFilterHome($title)
            { 
                return mb_substr($title, 0, 90);
            }

            add_filter("the_content", "plugin_myContentFilterHome");

            function plugin_myContentFilterHome($content)
            { 
                return mb_substr($content, 0, 200);
            }
    
    ?>
    
    <?php
    wp_head();
    ?>
</head>
<body>
    <?php 
        get_header();
    ?>
   
   <main id="getstarted">
      
       <div class="services">
           <div class="services__container">
               <h2 class="services-headline">Our services</h2>
               <p class="services-text">
                   Our management consulting services focus on our clients' most critical issues and opportunities. We have proven a multiplier effect from optimizing the sum of the parts, not just the individual pieces.
               </p>
               <div class="services__content">
                   <div class="services__content__item">
                       <img src="<?php echo SK_IMG_DIR; ?>/service-img1.png" alt="Services Logo 1" class="services__content__item__img">
                       <h3 class="services__content__item-headline">Performance Improvement</h3>
                       <hr class="services__content__item-underline">
                       <p class="services__content__item-text">Enabling companies to grow revenue, improve margins and reposition quickly.</p>
                   </div>
                   <div class="services__content__item">
                       <img src="<?php echo SK_IMG_DIR; ?>/service-img2.png" alt="Services Logo 2" class="services__content__item__img">
                       <h3 class="services__content__item-headline">Customer Strategy & Marketing</h3>
                       <hr class="services__content__item-underline">
                       <p class="services__content__item-text">In-depth customer insights combined with economic and operational fundamentals</p>
                   </div>
                   <div class="services__content__item">
                       <img src="<?php echo SK_IMG_DIR; ?>/service-img3.png" alt="Services Logo 3" class="services__content__item__img">
                       <h3 class="services__content__item-headline">Information Technology</h3>
                       <hr class="services__content__item-underline">
                       <p class="services__content__item-text">Realizing the full potential of IT resources, investments and assets</p>
                   </div>
                   <div class="services__content__item">
                       <img src="<?php echo SK_IMG_DIR; ?>/service-img4.png" alt="Services Logo 4" class="services__content__item__img">
                       <h3 class="services__content__item-headline">Full Potential Transformation</h3>
                       <hr class="services__content__item-underline">
                       <p class="services__content__item-text">A cross-functional effort to alter the financial, operational and strategic trajectory of a business</p>
                   </div>
                   <div class="services__content__item">
                       <img src="<?php echo SK_IMG_DIR; ?>/service-img5.png" alt="Services Logo 5" class="services__content__item__img">
                       <h3 class="services__content__item-headline">Strategy</h3>
                       <hr class="services__content__item-underline">
                       <p class="services__content__item-text">Tailored solutions that deliver results and achieve sustained growth</p>
                   </div>
                   <div class="services__content__item">
                       <img src="<?php echo SK_IMG_DIR; ?>/service-img6.png" alt="Services Logo 6" class="services__content__item__img">
                       <h3 class="services__content__item-headline">Private Equity</h3>
                       <hr class="services__content__item-underline">
                       <p class="services__content__item-text">Advising investors across the entire investment life cycle</p>
                   </div>
                   <div class="services__content__item">
                       <img src="<?php echo SK_IMG_DIR; ?>/service-img7.png" alt="Services Logo 7" class="services__content__item__img">
                       <h3 class="services__content__item-headline">Digital</h3>
                       <hr class="services__content__item-underline">
                       <p class="services__content__item-text">Deliver on core strategy, delight customers and operate smarter and faster</p>
                   </div>
                   <div class="services__content__item">
                       <img src="<?php echo SK_IMG_DIR; ?>/service-img8.png" alt="Services Logo 8" class="services__content__item__img">
                       <h3 class="services__content__item-headline">Results Delivery</h3>
                       <hr class="services__content__item-underline">
                       <p class="services__content__item-text">Predicting, measuring and managing risk associated with change management</p>
                   </div>
               </div>
           </div>
       </div>
       
       <div class="contact-us">
           <div class="contact-us__container">
               <h3 class="contact-us-headline">Contact us for a FREE, NO OBLIGATION confidential exploration of your needs</h3>
               <a href="#" class="header__content__buttons-button header__content__buttons-button1">Get Started</a>
           </div>
       </div>
       
       <div class="what-we-do">
           <div class="what-we-do__container">
               <h2 class="what-we-do-headline">about us</h2>
               <p class="what-we-do-text">SKOKOV is one of the world's leading management consulting firms. We care for our clients' business as our own, they know we're in this together</p>
               <div class="what-we-do__middle">
                  
                   <div class="what-we-do__middle__left">
                       <h3 class="what-we-do__middle__left-headline">What we do</h3>
                       <div class="what-we-do__middle__left-underline"></div>
                       <p class="what-we-do__middle__left-text">
                           <?php echo get_theme_mod('what_we_do_text'); ?>
                       </p>
                   </div>
                   
                   <div class="what-we-do__middle__right">
                       <h3 class="what-we-do__middle__right-headline">Our clients</h3>
                       <div class="what-we-do__middle__right-underline"></div>

                        <div class="slider">
                            <input type="radio" name="switch" id="btn1" checked>
                            <input type="radio" name="switch" id="btn2">
                            <input type="radio" name="switch" id="btn3">

                            <div class="switch">
                              <label class="switch-btn1" for="btn1"></label>
                              <label class="switch-btn2" for="btn2"></label>
                              <label class="switch-btn3" for="btn3"></label>
                            </div>

                            <div class="slider-inner">
                              <div class="slides">
                                <div class="slide">
                                        <?php 
                                            $args = array(
                                                'post_type'      => 'sk_our_clients1',
                                                'posts_per_page' => '6',
                                            );

                                            $query = new WP_Query($args);
                                            if($query->have_posts()) {
                                                while($query->have_posts()) {
                                                    $query->the_post();
                                    
                                        ?>
                                      <?php if(has_post_thumbnail()) { 
                                        echo get_the_post_thumbnail(get_the_ID());
                                        }else {
                                        echo '<img class="blogs__post__top-image" src="'.SK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                                        }; ?>
                                      <?php
                                            }

                                        } else {}

                                        wp_reset_postdata();

                                    ?>
                                  </div>
                                  <div class="slide">
                                      <?php 
                                            $args = array(
                                                'post_type'      => 'sk_our_clients2',
                                                'posts_per_page' => '6',
                                            );

                                            $query = new WP_Query($args);
                                            if($query->have_posts()) {
                                                while($query->have_posts()) {
                                                    $query->the_post();
                                    
                                        ?>
                                      <?php if(has_post_thumbnail()) { 
                                        echo get_the_post_thumbnail(get_the_ID());
                                        }else {
                                        echo '<img class="blogs__post__top-image" src="'.SK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                                        }; ?>
                                      <?php
                                            }

                                        } else {}

                                        wp_reset_postdata();

                                    ?>
                                  </div>
                                  <div class="slide">
                                      <?php 
                                            $args = array(
                                                'post_type'      => 'sk_our_clients3',
                                                'posts_per_page' => '6',
                                            );

                                            $query = new WP_Query($args);
                                            if($query->have_posts()) {
                                                while($query->have_posts()) {
                                                    $query->the_post();
                                    
                                        ?>
                                      <?php if(has_post_thumbnail()) { 
                                        echo get_the_post_thumbnail(get_the_ID());
                                        }else {
                                        echo '<img class="blogs__post__top-image" src="'.SK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                                        }; ?>
                                      <?php
                                            }

                                        } else {}

                                        wp_reset_postdata();

                                    ?>
                                  </div>
                                </div>
                            </div>
                        </div>
                   </div>
               </div>
               
               <div class="what-we-do__bottom">
                  <div class="what-we-do__bottom__container">
                      <h3 class="what-we-do__bottom-headline">Our team</h3>
                       <div class="what-we-do__bottom-underline"></div>
                       <div class="what-we-do__bottom__team">
                            <?php 
                                $args = array(
                                    'post_type'      => 'sk_our_team',
                                    'posts_per_page' => '100',
                                );

                                $query = new WP_Query($args);
                                if($query->have_posts()) {
                                    while($query->have_posts()) {
                                        $query->the_post();
                                    
                            ?>
                           <div class="what-we-do__bottom__team-person">
                               <?php if(has_post_thumbnail()) { 
                                echo get_the_post_thumbnail(get_the_ID());
                                }else {
                                echo '<img class="blogs__post__top-image" src="'.SK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                                }; ?>
                               <div class="what-we-do__bottom__team-person__about">
                                   <div class="what-we-do__bottom__team-person__about__container">
                                       <h3 class="what-we-do__bottom__team-person__about-name"><?php 
                                        $title_team = the_title(); substr($title_team, 0, 20); ?></h3>
                                       <hr class="what-we-do__bottom__team-person__about-line">
                                       <div class="what-we-do__bottom__team-person__about-text"><?php
                                            $content_team = the_content(); substr($content_team, 0, 25);
                                           ?></div>
                                       <div class="what-we-do__bottom__team-person__about-job"><?php
                                        $excerpt_team = the_excerpt(); substr($excerpt_team, 0, 20); ?></div>
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
               </div>
           </div>
       </div>
       
       <div class="strategic">
           <div class="strategic__container">
               <a href="#" class="strategic-btn"><i class="fa fa-play fa-2x" aria-hidden="true"></i></a>
               <h2 class="strategic-headline">we blend the strategic with creative</h2>
               <p class="strategic-text">When someone asks what we do at SKOKOV, it’s tempting to point out our four-decade track record for helping to transform the world’s great companies into sharper, smarter, better versions of themselves. </p>
           </div>
       </div>
       
       <div class="home-news">
           <div class="home-news__container">
               <h2 class="home-news-headline">News</h2>
               <p class="home-news-text">Together, we find value across boundaries, develop insights to act on, and energize teams to sustain success. We're passionate about always doing the right thing for our clients, our people and our communities, even if it isn't easy.</p>
               <div class="home-news__content">
                   ?>
                   <div class="home-news__content__left">
                      <?php
                            $args = array(
                                'post_type'      => 'post',
                                'posts_per_page' => '2',
                                'paged'          => get_query_var('paged')?: 1
                            );

                            $query = new WP_Query($args);
                            if($query->have_posts()) {
                                while($query->have_posts()) {
                                    $query->the_post();
                                    if ($query->current_post % 2) :
                    ?>
                      <div class="home-news__content__left__post">
                            <div class="home-news__content__left__post__text">
                                <div class="home-news__content__left__post__text__container">
                                    <div class="home-news__content__left__post__text__top">
                                        <h3 class="home-news__content__left__post__text__top-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="home-news__content__left__post__text__top-underline"></div>
                                        <div class="home-news__content__left__post__text__top-paragraph"><?php the_content(); ?></div>
                                    </div>
                                    <div class="home-news__content__left__post__text__bottom"> 
                                        <p class="home-news__content__left__post__text__bottom-date"><?php the_time('m/d/Y'); ?></p>
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
                       <div class="home-news__content__left__post">
                            <?php if(has_post_thumbnail()) { 
                            echo get_the_post_thumbnail(get_the_ID());
                        }else {
                            echo '<img class="blogs__post__top-image" src="'.SK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                        }; ?>
                            <div class="home-news__content__left__post__text">
                                <div class="home-news__content__left__post__text__container">
                                    <div class="home-news__content__left__post__text__top">
                                        <h3 class="home-news__content__left__post__text__top-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="home-news__content__left__post__text__top-underline"></div>
                                        <div class="home-news__content__left__post__text__top-paragraph"><?php the_content(); ?></div>
                                    </div>
                                    <div class="home-news__content__left__post__text__bottom"> 
                                        <p class="home-news__content__left__post__text__bottom-date"><?php the_time('m/d/Y'); ?></p>
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
                                'posts_per_page' => '1',
                                'paged'          => get_query_var('paged')?: 1
                            );

                            $query = new WP_Query($args);
                            if($query->have_posts()) {
                                while($query->have_posts()) {
                                    $query->the_post(); ?>
                       <?php if(has_post_thumbnail()) { 
                            echo get_the_post_thumbnail(get_the_ID());
                        }else {
                            echo '<img class="home-news__content__right-image" src="'.SK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                        }; ?>
                       <div class="home-news__content__left__post__text">
                            <div class="home-news__content__left__post__text__container">
                                <div class="home-news__content__left__post__text__top">
                                    <h3 class="home-news__content__left__post__text__top-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="home-news__content__left__post__text__top-underline"></div>
                                    <div class="home-news__content__left__post__text__top-paragraph"><?php the_content(); ?></div>
                                </div>
                                <div class="home-news__content__left__post__text__bottom"> 
                                    <p class="home-news__content__left__post__text__bottom-date"><?php the_time('m/d/Y'); ?></p>
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
           </div>
       </div>
       
       <div class="contact">
           <div class="contact__container">
               <div class="contact__left">
                   <div class="contact__left__container">
                       <h1 class="contact__left-headline"><a href="<?php echo home_url(); ?>"><?php echo get_theme_mod('site_name'); ?></a></h1>
                       <p class="contact__left-text">
                           Thank you for your interest in SKOKOV. Please contact us using the information below. To locate contacts in the SKOKOV office closest to you, visit our office websites. To get the latest updates from SKOKOV, subscribe to a newsletter or connect with us on social media.
                       </p>
                       <div class="contact__left-underline"></div>
                       <div class="contact__left__info">
                           <div class="contact__left__info__box">
                               <i class="fa fa-map-marker" aria-hidden="true"></i>
                           </div>
                           <p class="contact__left__info-text"><?php echo get_theme_mod('footer_contact_location'); ?></p>
                       </div>
                       <div class="contact__left__info">
                           <div class="contact__left__info__box">
                               <i class="fa fa-phone" aria-hidden="true"></i>
                           </div>
                           <p class="contact__left__info-text"><?php echo get_theme_mod('footer_contact_phone_number'); ?></p>
                       </div>
                       <div class="contact__left__info">
                           <div class="contact__left__info__box">
                               <i class="fa fa-envelope" aria-hidden="true"></i>
                           </div>
                           <p class="contact__left__info-text"><?php echo get_theme_mod('footer_contact_email'); ?></p>
                       </div>
                   </div>
               </div>
               <div class="contact__right">
                   <div class="contact__right__container">
                        <div class="contact__right__top">
                            <h2 class="contact__right__top-headline">Contact</h2>
                            <div class="contact__right__top-underline"></div>
                            <p class="contact__right__top-paragraph">
                                Please contact us using contact form below.
                            </p>
                            <?php echo do_shortcode('[contact-form-7 id="15" title="Contact form"]'); ?>
                        </div>
                   </div>
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