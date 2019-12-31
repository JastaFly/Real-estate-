<?php
/**
 * WP Bootstrap 4 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_4
 */

if ( ! function_exists( 'wp_bootstrap_4_setup' ) ) :
	function wp_bootstrap_4_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'wp-bootstrap-4', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Enable Post formats
		add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'status', 'quote', 'link' ) );

		// Enable support for woocommerce.
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'wp-bootstrap-4' ),
		) );

		// Switch default core markup for search form, comment form, and comments
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_4_custom_background_args', array(
			'default-color' => 'f8f9fa',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for core custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_4_setup' );




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_4_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_4_content_width', 800 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_4_content_width', 0 );




/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_4_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-4' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget border-bottom %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'wp-bootstrap-4' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'wp-bootstrap-4' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'wp-bootstrap-4' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'wp-bootstrap-4' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'wp_bootstrap_4_widgets_init' );




/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_4_scripts() {
	wp_enqueue_style( 'open-iconic-bootstrap', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.css', array(), 'v4.0.0', 'all' );
	wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 'v4.0.0', 'all' );
	wp_enqueue_style( 'wp-bootstrap-4-style', get_stylesheet_uri(), array(), '1.0.2', 'all' );

	wp_enqueue_script( 'bootstrap-4-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), 'v4.0.0', true );
    wp_enqueue_script( 'animation', get_template_directory_uri() . '/js/animation.js', 'v1.0.0', true );
    wp_enqueue_script( 'ajax_send', get_template_directory_uri() . '/ajax-form/ajax-send.js', 'v1.0.0', true );
    wp_enqueue_script( 'jquery-max', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', 'v1.0.0', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_4_scripts' );


/**
 * Registers an editor stylesheet for the theme.
 */
function wp_bootstrap_4_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'wp_bootstrap_4_add_editor_styles' );


// Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

// Implement the Custom Comment feature.
require get_template_directory() . '/inc/custom-comment.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Custom Navbar
require get_template_directory() . '/inc/custom-navbar.php';

// Customizer additions.
require get_template_directory() . '/inc/tgmpa/tgmpa-init.php';

// Use Kirki for customizer API
require get_template_directory() . '/inc/theme-options/add-settings.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file.
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Load WooCommerce compatibility file.
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
function show_category() {
    $id_post = get_the_ID();
    $category = get_the_category($id_post);
    $category_1 = $category[0]->term_id;
    $category_2 = $category[1]->term_id;
    if ($category_1 > $category_2) {
        echo $category[1]->cat_name . ' ';
    }
    else {
        echo $category[0]->cat_name . ' ';
    }
    }
function discharges($a) {
    ob_start();
    the_field('price', $a); 
    $content = ob_get_contents();
    ob_get_clean();
    $content = number_format($content, 0, '', ' ');
    echo $content;
}
function get_fresh() {
    $get_posts = wp_get_recent_posts();
    for($i=0; $i < 10; $i++) {
        echo  '<a href="'. $get_posts[$i][guid] .'">';
        echo '<li class="slider-item" id="slider-item-' . $i . '">';
        echo 'Стоимость: <span class="big">';
        discharges($get_posts[$i][ID]);
        echo '</span> рублей <br/>';
        echo ' Площадь: <span class="big">';
        the_field('space', $get_posts[$i][ID]);
        echo '</span> м<sup>2</sup><br/>';
        echo ' Адрес: <span class="little-big">';
        the_field('adress', $get_posts[$i][ID]);
        echo '</span> <br/>';
        echo 'Жилая площадь: <span class="big">';
        the_field('live_space',$get_posts[$i][ID]);
        echo '</span> м<sup>2</sup><br/>';
        echo 'Этаж: <span class="big">';
        the_field('floor',$get_posts[$i][ID]);
        echo '</span> <br/>';
        echo '<div class="image-wrap" >';
        $image = get_field('foto', $get_posts[$i][ID]);
        echo '<img class="main-icon" src="' . esc_url($image['url']) . '" alt="" />' ;
        echo '</div>';
        echo '</li>';
        echo  '</a>';
    }
}
function get_city($cat_name) {
    $get_posts = get_posts(array(
        'numberposts' => 10,
        'category_name' => $cat_name 
    ));
    for($i=0; $i < 10; $i++) {
        echo  '<a href="'. $get_posts[$i]->guid .'">';
        echo '<li class="slider-item" >';
        echo 'Стоимость: <span class="big">';
        discharges($get_posts[$i]->ID);
        echo '</span> рублей <br/>';
        echo ' Площадь: <span class="big">';
        the_field('space', $get_posts[$i]->ID);
        echo '</span> м<sup>2</sup><br/>';
        echo ' Адрес: <span class="little-big">';
        the_field('adress', $get_posts[$i]->ID);
        echo '</span> <br/>';
        echo 'Жилая площадь: <span class="big">';
        the_field('live_space',$get_posts[$i]->ID);
        echo '</span> м<sup>2</sup><br/>';
        echo 'Этаж: <span class="big">';
        the_field('floor',$get_posts[$i]->ID);
        echo '</span> <br/>';
        echo '<div class="image-wrap" >';
        $image = get_field('foto', $get_posts[$i]->ID);
        echo '<img class="main-icon" src="' . esc_url($image['url']) . '" alt="" />' ;
        echo '</div>';
        echo '</li>';
        echo  '</a>';
    }
}
function get_category_link_by_slug($slug) {
    $category_id = get_category_by_slug($slug)->cat_ID;;
    echo get_category_link($category_id);
}
add_filter( 'get_the_archive_title', function( $title ){
    return preg_replace('~^[^:]+: ~', '', $title );
});

add_action('admin_head', 'my_custom_styles');
function my_custom_styles() {
    echo '<style>
   #select2-acf-field_5e00cbad09606-results li:first-child {
    display: none;
}
#select2-acf-field_5e00cbad09606-results li:nth-child(2) {
    display: none;
}
#select2-acf-field_5e00cbad09606-results li:nth-child(3) {
    display: none;
}
#select2-acf-field_5e00cbad09606-results li:nth-child(4) {
    display: none;
}
#select2-acf-field_5e00cbad09606-results li:nth-child(5) {
    display: none;
}
#select2-acf-field_5e00cbad09606-results li:nth-child(6) {
    display: none;
}
#select2-acf-field_5e04c55723050-results li:nth-child(1) {
    display: none;
}
#select2-acf-field_5e04c55723050-results li:nth-child(2) {
    display: none;
}
#select2-acf-field_5e04c55723050-results li:nth-child(5) {
    display: none;
}
#select2-acf-field_5e04c55723050-results li:nth-child(6) {
    display: none;
}
#select2-acf-field_5e04c55723050-results li:nth-child(7) {
    display: none;
}
#select2-acf-field_5e04c55723050-results li:nth-child(8) {
    display: none;
}
#select2-acf-field_5e04c55723050-results li:nth-child(9) {
    display: none;
}
  </style>';
}