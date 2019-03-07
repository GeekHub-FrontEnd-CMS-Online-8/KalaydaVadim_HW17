
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
            
            <div class="header__content">
                <h2 class="header__content-headline">News(expanded)</h2>
            </div>
        </div>
   </header>
