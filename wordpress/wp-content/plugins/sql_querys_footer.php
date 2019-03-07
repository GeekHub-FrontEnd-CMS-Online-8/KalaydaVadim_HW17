<?php
    /*
        Plugin name: Количество SQL запросов в подвале
    */

    add_filter( 'admin_footer_text', 'wp_usage' );
    function wp_usage(){
        echo sprintf(
            __( 'SQL: %d за %s сек. %s MB', 'km' ),
            get_num_queries(),
            timer_stop( 0, 3 ),
            round( memory_get_peak_usage()/1024/1024, 2 )
        );
    }