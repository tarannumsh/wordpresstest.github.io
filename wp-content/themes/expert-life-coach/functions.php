<?php
if ( ! function_exists( 'expert_life_coach_setup' ) ) :
function expert_life_coach_setup() {

// Root path/URI.
define( 'EXPERT_LIFE_COACH_PARENT_DIR', get_template_directory() );
define( 'EXPERT_LIFE_COACH_PARENT_URI', get_template_directory_uri() );

// Root path/URI.
define( 'EXPERT_LIFE_COACH_PARENT_INC_DIR', EXPERT_LIFE_COACH_PARENT_DIR . '/inc');
define( 'EXPERT_LIFE_COACH_PARENT_INC_URI', EXPERT_LIFE_COACH_PARENT_URI . '/inc');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-slider' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'custom-header' );

	add_theme_support( 'responsive-embeds' );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'expert-life-coach' );
		
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'  => esc_html__( 'Primary Menu', 'expert-life-coach' ),
	) );

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
		
	add_theme_support('custom-logo');

	/*
	 * WooCommerce Plugin Support
	 */
	add_theme_support( 'woocommerce' );
	
	// Gutenberg wide images.
	add_theme_support( 'align-wide' );
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/css/editor-style.css', expert_life_coach_google_font() ) );
	
	//Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'expert_life_coach_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'expert_life_coach_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function expert_life_coach_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'expert_life_coach_content_width', 1170 );
}
add_action( 'after_setup_theme', 'expert_life_coach_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function expert_life_coach_widgets_init() {
	
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'expert-life-coach' ),
		'id' => 'expert-life-coach-sidebar-primary',
		'description' => __( 'The Primary Widget Area', 'expert-life-coach' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'expert-life-coach' ),
		'id' => 'expert-life-coach-footer-widget-area',
		'description' => __( 'The Footer Widget Area', 'expert-life-coach' ),
		'before_widget' => '<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s"><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h5 class="widget-title w-title">',
		'after_title' => '</h5><span class="shap"></span>',
	) );
}
add_action( 'widgets_init', 'expert_life_coach_widgets_init' );

/**
 * All Styles & Scripts.
 */

require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Nav Walker fo Bootstrap Dropdown Menu.
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require_once get_template_directory() . '/inc/customizer.php';

require_once get_template_directory() . '/wptt-webfont-loader.php';

/**
 * Load Theme About Page
 */
require get_parent_theme_file_path( '/inc/aboutthemes/about-theme.php' );

/*
 * Enable support for Post Formats.
 *
 * See: https://codex.wordpress.org/Post_Formats
*/
add_theme_support( 'post-formats', array('image','video','gallery','audio',) );


/* Excerpt Limit Begin */
function expert_life_coach_string_limit_words($string, $word_limit) {
    $words = explode(' ', $string, ($word_limit + 1));
    if(count($words) > $word_limit)
    array_pop($words);
    return implode(' ', $words);
}

function expert_life_coach_sanitize_select( $input, $setting ) {
	$input = sanitize_key( $input );
	$choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

add_filter( 'nav_menu_link_attributes', 'expert_life_coach_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function expert_life_coach_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

function expert_life_coach_remove_theme_customizer_setting($wp_customize) {
    // Remove the setting
    $wp_customize->remove_setting('display_header_text');
    // Remove the control
    $wp_customize->remove_control('display_header_text');
}
add_action('customize_register', 'expert_life_coach_remove_theme_customizer_setting', 20); 
// Use a priority greater than the one used for adding the setting


// Set the number of products per row to 3 on the shop page
add_filter('loop_shop_columns', 'expert_life_coach_custom_shop_loop_columns');

if (!function_exists('expert_life_coach_custom_shop_loop_columns')) {
    function expert_life_coach_custom_shop_loop_columns() {
        // Retrieve the number of columns from theme customizer setting (default: 3)
        $expert_life_coach_columns = get_theme_mod('expert_life_coach_custom_shop_per_columns', 3);
        return $expert_life_coach_columns;
    }
}

// Set the number of products per page on the shop page
add_filter('loop_shop_per_page', 'expert_life_coach_custom_shop_per_page', 20);

if (!function_exists('expert_life_coach_custom_shop_per_page')) {
    function expert_life_coach_custom_shop_per_page($expert_life_coach_products_per_page) {
        // Retrieve the number of products per page from theme customizer setting (default: 9)
        $expert_life_coach_products_per_page = get_theme_mod('expert_life_coach_custom_shop_product_per_page', 9);
        return $expert_life_coach_products_per_page;
    }
}
