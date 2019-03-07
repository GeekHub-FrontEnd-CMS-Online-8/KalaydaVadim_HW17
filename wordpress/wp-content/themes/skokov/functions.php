<?php
/**
 * Skokov functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Skokov
 */

if ( ! function_exists( 'skokov_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function skokov_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Skokov, use a find and replace
		 * to change 'skokov' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'skokov', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		
        register_nav_menus(array(
        'primary' => __('Primary Menu', 'skokov')
        ));
    
        add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2 );
        function add_my_class_to_nav_menu( $classes, $item ){
            /* $classes содержит
            Array(
                [1] => menu-item
                [2] => menu-item-type-post_type
                [3] => menu-item-object-page
                [4] => menu-item-284
            )
            */
            $classes[] = 'header__top__right__navmenu-list';

            return $classes;
        }

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'skokov_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'skokov_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function skokov_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'skokov_content_width', 640 );
}
add_action( 'after_setup_theme', 'skokov_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function skokov_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'skokov' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'skokov' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'skokov_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
    define('SK_THEME_ROOT', get_template_directory_uri());
    define('SK_CSS_DIR', SK_THEME_ROOT.'/css');
    define('SK_JS_DIR', SK_THEME_ROOT.'/js');
    define('SK_IMG_DIR', SK_THEME_ROOT.'/img');

    add_action( 'wp_enqueue_scripts', 'connectAllForHome');

    function connectAllForHome() {
        wp_enqueue_style( 'basic', SK_CSS_DIR.'/basic.css');
        wp_enqueue_style( 'theme', get_stylesheet_uri());
        
    }

/**
 * Implement the Custom Header feature.
 */

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function skokov_customize_register( $wp_customize ) {
    // site name
    
    $wp_customize->add_section( 'site_name_section' , array(
        'title'      => __( 'Site Name Section', 'skokov' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'site_name' , array(
        'default'   => 'SKOKOV',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'site_name', array(
        'label'      => __( 'Site Name', 'skokov' ),
        'section'    => 'site_name_section',
        'settings'   => 'site_name',
    ) ) );
    
    //
    $wp_customize->add_section( 'skokov_footer_contact_section' , array(
        'title'      => __( 'Footer Contact Section', 'skokov' ),
        'priority'   => 30,
    ) );
    //footer office location
    $wp_customize->add_setting( 'footer_contact_location' , array(
        'default'   => '43 GAGARINA STREET, KHARKOV, UKRAINE',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_contact_location', array(
        'label'      => __( 'Office Location', 'skokov' ),
        'section'    => 'skokov_footer_contact_section',
        'settings'   => 'footer_contact_location',
    ) ) );
    // footer phone number
    $wp_customize->add_setting( 'footer_contact_phone_number' , array(
        'default'   => '+38 (057) 777-05-05',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_contact_phone_number', array(
        'label'      => __( 'Phone Number', 'skokov' ),
        'section'    => 'skokov_footer_contact_section',
        'settings'   => 'footer_contact_phone_number',
    ) ) );
    //footer email
    $wp_customize->add_setting( 'footer_contact_email' , array(
        'default'   => 'MYNAMEISSKOKOV@GMAIL.COM',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_contact_email', array(
        'label'      => __( 'Email', 'skokov' ),
        'section'    => 'skokov_footer_contact_section',
        'settings'   => 'footer_contact_email',
    ) ) );
    
    //what we do text
    
    $wp_customize->add_section( 'what_we_do_section' , array(
        'title'      => __( 'What we do section', 'skokov' ),
        'priority'   => 30,
    ) );
    //footer office location
    $wp_customize->add_setting( 'what_we_do_text' , array(
        'default'   => '43 GAGARINA STREET, KHARKOV, UKRAINE',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'what_we_do_text', array(
        'label'      => __( 'Office Location', 'skokov' ),
        'section'    => 'what_we_do_section',
        'settings'   => 'what_we_do_text',
    ) ) );
}
add_action( 'customize_register', 'skokov_customize_register' );



function create_post_type_sk_our_team() {
    
          register_post_type( 'sk_our_team',
            array(
              'labels' => array(
                'name' => __( 'Person of team photo' ),
                'singular_name' => __( 'Person of team photo' ),
              ),
              'public' => true,
              'menu_icon'     => 'dashicons-universal-access',
              'has_archive' => true,
              'supports'           => array('title','thumbnail', 'editor', 'excerpt')
            )
          );
        }
    add_action( 'init', 'create_post_type_sk_our_team' );



function create_post_type_sk_our_clients_first() {
    
          register_post_type( 'sk_our_clients1',
            array(
              'labels' => array(
                'name' => __( 'Client photo(1 slide, max 6 photos)' ),
                'singular_name' => __( 'Client photo(1 slide, max 6 photos)' ),
              ),
              'public' => true,
              'menu_icon'     => 'dashicons-groups',
              'has_archive' => true,
              'supports'           => array('title','thumbnail')
            )
          );
        }
    add_action( 'init', 'create_post_type_sk_our_clients_first' );



function create_post_type_sk_our_clients_second() {
    
          register_post_type( 'sk_our_clients2',
            array(
              'labels' => array(
                'name' => __( 'Client photo(2 slide, max 6 photos)' ),
                'singular_name' => __( 'Client photo(2 slide, max 6 photos)' ),
              ),
              'public' => true,
              'menu_icon'     => 'dashicons-groups',
              'has_archive' => true,
              'supports'           => array('title','thumbnail')
            )
          );
        }
    add_action( 'init', 'create_post_type_sk_our_clients_second' );



function create_post_type_sk_our_clients_third() {
    
          register_post_type( 'sk_our_clients3',
            array(
              'labels' => array(
                'name' => __( 'Client photo(3 slide, max 6 photos)' ),
                'singular_name' => __( 'Client photo(3 slide, max 6 photos)' ),
              ),
              'public' => true,
              'menu_icon'     => 'dashicons-groups',
              'has_archive' => true,
              'supports'           => array('title','thumbnail')
            )
          );
        }
    add_action( 'init', 'create_post_type_sk_our_clients_third' );



function create_post_type_sk_right_posts() {
    
          register_post_type( 'rightposts',
            array(
              'labels' => array(
                'name' => __( 'Right Posts' ),
                'singular_name' => __( 'Right Posts') ),
                
              'public' => true,
              'menu_icon'     => 'dashicons-format-aside',
              'has_archive' => true,
              'supports'           => array('title','editor','thumbnail')
            )
          );
        }
    add_action( 'init', 'create_post_type_sk_right_posts' );