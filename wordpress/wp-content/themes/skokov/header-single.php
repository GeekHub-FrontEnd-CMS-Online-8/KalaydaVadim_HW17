    <header class="header">
        <div class="header__container">
           
            <div class="header__top">
                <div class="header__top__left">
                    <a href="<?php echo home_url(); ?>" class="header__top__left-skokov"><?php echo get_theme_mod('site_name'); ?></a>
                </div>
                
                <div class="header__top__right">
                    <?php if(has_nav_menu('primary')): ?>
                    <?php
                        wp_nav_menu(array(
                            'menu_class'    => 'header__top__right__navmenu',
                            'menu_id'       => 'navmenu',
                            'theme_location'=> 'primary',
                        ));
                    ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php while ( have_posts() ){ the_post(); 
            add_filter("single_post_title", "plugin_myContentFilter");

            function plugin_myContentFilter($title)
            { 
                return mb_substr($title, 0, 90);
            }
            ?>
            <div class="header__content">
                <div class="header__post-image">
                    <?php 
                    set_post_thumbnail_size(1200, 500, true);                     
                    if(has_post_thumbnail()) {
                    echo the_post_thumbnail(get_the_ID(), array('class' => 'header__post-image'));
                    } else {
                        echo '<img src="'.SQ_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                    }
                    ?>
                    <div class="header__post-image__about">
                        <h2 class="header__post-image__about-headline"><?php the_title(); ?></h2>
                        <div class="header__post-image-underline"></div>
                    </div>
                </div>
            </div>
        </div>
   </header>
   <?php } ?>