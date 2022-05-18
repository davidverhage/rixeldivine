<?php

// Register style sheet.
add_action( 'wp_enqueue_scripts', 'register_custom_plugin_styles' );

/**
 * Register style sheet.
 */
function register_custom_plugin_styles() {

	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, false, true);
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js', array(), '1.0.0', true );
	wp_enqueue_script( 'aos-script', get_template_directory_uri() . '/assets/js-libs/aos.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js-libs/bootstrap/bootstrap.bundle.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'isotope-script', get_template_directory_uri() . '/assets/js-libs/isotope.pkgd.js', array(), '1.0.0', true );
	wp_enqueue_script( 'main-app', get_template_directory_uri() . '/assets/js-libs/all.js', array(), '1.0.0', true );

	wp_enqueue_style('main-font-trademarked','https://use.typekit.net/rrx3utl.css');
	wp_enqueue_style('font-awesome-4','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('main-style',get_template_directory_uri().'/assets/css-libs/main.css');
}