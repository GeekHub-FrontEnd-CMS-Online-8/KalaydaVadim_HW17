
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
                <h1 class="header__content-headline">
                    Global management consulting agency
                </h1>
                <p class="header__content-text">Growth doesn't always go the way you expect. Our strategy consultants can help you climb.</p>
                <div class="header__content__buttons">
                    <a href="#getstarted" class="header__content__buttons-button header__content__buttons-button1">Get Started</a>
                    <a href="#" class="header__content__buttons-button header__content__buttons-button2">Learn More</a>
                </div>
            </div>
        </div>
   </header>
