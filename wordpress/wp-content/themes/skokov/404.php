<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <?php 
        
        add_action( 'wp_enqueue_scripts', 'connectCSSFor404');
        
        function connectCSSFor404() {
            wp_enqueue_style( 'header', SK_CSS_DIR.'/header.css');
            wp_enqueue_style( 'footer-home', SK_CSS_DIR.'/footer-home.css');
        }
    
    ?>
    
    <?php
    wp_head();
    ?>
</head>
<body>
    <div style="height: 87%;"><h1 style="text-align: center;">Oops! That page can't be found</h1></div>

    <?php
    get_footer();
    ?>
</body>
</html>
