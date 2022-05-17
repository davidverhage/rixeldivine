<?php
$timestamp = time();
setlocale(LC_ALL, 'nl_NL');

add_filter('the_time', 'modify_date_format');
function modify_date_format(){
	$month_names = array(1=>'januari','februari','maart','april','mei','juni','juli','augustus','september','oktober','november','december');
	return get_the_time('j').'. '.$month_names[get_the_time('n')].' '.get_the_time('Y');
}

add_theme_support( 'wp-block-styles' );

function custom_theme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	$defaults = array(
		'default-image'          => '',
		'random-default'         => false,
		'width'                  => 0,
		'height'                 => 0,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => '',
		'header-text'            => true,
		'uploads'                => true,
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
		'video'                  => true,
		'video-active-callback'  => 'is_front_page',
	);

	add_theme_support( 'custom-header', $defaults );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	$post_formats = array('aside','image','gallery','video','audio','link','quote','status');
	add_theme_support( 'post-formats', $post_formats);

}
add_action( 'after_setup_theme', 'custom_theme_setup' );

/* for Contact-Form-7 */
add_filter( 'wpcf7_autop_or_not', '__return_false' );

register_nav_menus( array(
	'topnav' => __( 'Primary Menu', 'px2070' ),
	'footer' => __( 'Secondary Menu', 'px2070' ),
) );

/**
 * Register style sheet.
 */
function register_custom_plugin_styles() {

	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/dist/main.app.css' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, false, true );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js', array(), '1.0.0', true );
	wp_enqueue_script( 'aos-app', get_template_directory_uri() . '/assets/js/aos.js', array(), '1.0.0', true );
	wp_enqueue_script( 'isotope-app', get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstrap-app', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array(), '1.0.0', true );
	wp_enqueue_script( 'main-app', get_template_directory_uri() . '/dist/all.js', array(), '1.0.0', true );
}
// Register style sheet.
add_action( 'wp_enqueue_scripts', 'register_custom_plugin_styles' );
