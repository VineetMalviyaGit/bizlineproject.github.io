<?php
/**
 * Bizlinedemo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bizlinedemo
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bizlinedemo_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Bizlinedemo, use a find and replace
		* to change 'bizlinedemo' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'bizlinedemo', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'bizlinedemo' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'bizlinedemo_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'bizlinedemo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bizlinedemo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bizlinedemo_content_width', 640 );
}
add_action( 'after_setup_theme', 'bizlinedemo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bizlinedemo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bizlinedemo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bizlinedemo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'footer', 'itfarm' ),
			'id'            => 'footer',
			'description'   => esc_html__( 'Add widgets here.', 'itfarm' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'header top', 'itfarm' ),
			'id'            => 'header_top',
			'description'   => esc_html__( 'Add widgets here.', 'itfarm' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bizlinedemo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bizlinedemo_scripts() {
	wp_enqueue_style( 'bizlinedemo-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'bizlinedemo-style', 'rtl', 'replace' );

	wp_enqueue_script( 'bizlinedemo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bizlinedemo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




/** <<<<<<<<<----------- THIS FUNCTION ADDED FOR COMMON BREADCRUMB FOR EVERY PAGE ----->>>>>>>>>
 * 
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if ('') {
        echo "&nbsp;&nbsp; / &nbsp;&nbsp;";
        
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp; / &nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp; / &nbsp;&nbsp;";
        the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp; / &nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }else{
        echo "&nbsp;&nbsp; / &nbsp;&nbsp;";
        echo get_the_title(get_queried_object_id());
    }
}






// ACF Section 
add_action('acf/init', 'banner_section');
function banner_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'banner_section',
            'title'             => ('Banner Section'),
            'description'       => ('A Custom Banner Section.'),
            'render_template'   => 'template-parts/block/banner_section/banner.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/banner_section/style.css',  
        ));
    }
}


add_action('acf/init', 'ourclint_section');
function ourclint_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'ourclint_section',
            'title'             => ('Our Clint Section'),
            'description'       => ('A Custom Our Clint Section.'),
            'render_template'   => 'template-parts/block/ourclint_section/ourclint.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/ourclint_section/style.css',  
        ));
    }
}

add_action('acf/init', 'breadcrumb_section');
function breadcrumb_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'breadcrumb_section',
            'title'             => ('Breadcrumb Section'),
            'description'       => ('A Custom Breadcrumb Section.'),
            'render_template'   => 'template-parts/block/breadcrumb_section/breadcrumb.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/breadcrumb_section/style.css',  
        ));
    }
}

add_action('acf/init', 'about_section');
function about_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'about_section',
            'title'             => ('About Section'),
            'description'       => ('A Custom About Section.'),
            'render_template'   => 'template-parts/block/about_section/about.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/about_section/style.css',  
        ));
    }
}

add_action('acf/init', 'ourteam_section');
function ourteam_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'ourteam_section',
            'title'             => ('Our Team Section'),
            'description'       => ('A Custom Our Team Section.'),
            'render_template'   => 'template-parts/block/ourteam_section/ourteam.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/ourteam_section/style.css',  
        ));
    }
}


add_action('acf/init', 'services_section');
function services_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'services_section',
            'title'             => ('Services Section'),
            'description'       => ('A Custom Services Section.'),
            'render_template'   => 'template-parts/block/services_section/services.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/services_section/style.css',  
        ));
    }
}

add_action('acf/init', 'services2_section');
function services2_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'services2_section',
            'title'             => ('Services2 Section'),
            'description'       => ('A Custom Services2 Section.'),
            'render_template'   => 'template-parts/block/services2_section/services2.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/services2_section/style.css',  
        ));
    }
}

add_action('acf/init', 'testimonial_section');
function testimonial_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'testimonial_section',
            'title'             => ('Testimonial Section'),
            'description'       => ('A Custom Testimonial Section.'),
            'render_template'   => 'template-parts/block/testimonial_section/testimonial.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/testimonial_section/style.css',  
        ));
    }
}


add_action('acf/init', 'counter_section');
function counter_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'counter_section',
            'title'             => ('Counter Section'),
            'description'       => ('A Custom Counter Section.'),
            'render_template'   => 'template-parts/block/counter_section/counter.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/counter_section/style.css',  
        ));
    }
}

add_action('acf/init', 'faq_section');
function faq_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'faq_section',
            'title'             => ('Faq Section'),
            'description'       => ('A Custom Faq Section.'),
            'render_template'   => 'template-parts/block/faq_section/faq.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/faq_section/style.css',  
        ));
    }
}

add_action('acf/init', 'gallery_section');
function gallery_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'gallery_section',
            'title'             => ('Gallery Section'),
            'description'       => ('A Custom Gallery Section.'),
            'render_template'   => 'template-parts/block/gallery_section/gallery.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/gallery_section/style.css',  
        ));
    }
}

add_action('acf/init', 'contact_section');
function contact_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'contact_section',
            'title'             => ('Contact Section'),
            'description'       => ('A Custom Contact Section.'),
            'render_template'   => 'template-parts/block/contact_section/contact.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/contact_section/style.css',  
        ));
    }
}

add_action('acf/init', 'latestblog_section');
function latestblog_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'latestblog_section',
            'title'             => ('Latest Blog Section'),
            'description'       => ('A Custom Latest Blog Section.'),
            'render_template'   => 'template-parts/block/latestblog_section/latestblog.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/latestblog_section/style.css',  
        ));
    }
}

add_action('acf/init', 'footer_section');
function footer_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'footer_section',
            'title'             => ('Footer Section'),
            'description'       => ('A Custom Footer Section.'),
            'render_template'   => 'template-parts/block/footer_section/footer.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/footer_section/style.css',  
        ));
    }
}

add_action('acf/init', 'privacy_policy_section');
function privacy_policy_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'privacy_policy_section',
            'title'             => ('Privacy Policy Section'),
            'description'       => ('A Custom Privacy Section.'),
            'render_template'   => 'template-parts/block/privacy_policy_section/privacy.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/privacy_policy_section/style.css',  
        ));
    }
}

add_action('acf/init', 'term_condition_section');
function term_condition_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'term_condition_section',
            'title'             => ('Term Condition Section'),
            'description'       => ('A Custom Term Condition Section.'),
            'render_template'   => 'template-parts/block/term_condition_section/term.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/term_condition_section/style.css',  
        ));
    }
}

add_action('acf/init', 'about2_section');
function about2_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'about2_section',
            'title'             => ('About2 Section'),
            'description'       => ('A Custom About2 Section.'),
            'render_template'   => 'template-parts/block/about2_section/about2.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/about2_section/style.css',  
        ));
    }
}
add_action('acf/init', 'header_top_section');
function header_top_section() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'header_top_section',
            'title'             => ('Header Top Section'),
            'description'       => ('A Custom Header Top Section.'),
            'render_template'   => 'template-parts/block/header_top_section/header_top.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'enqueue_style' => get_template_directory_uri() . '/template-parts/block/header_top_section/style.css',  
        ));
    }
}