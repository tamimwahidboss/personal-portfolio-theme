<?php
/**
 * Enqueue scripts and styles.
 */

 function tamim_wahid_scripts() {
	// Template CSS Files
	wp_enqueue_style('main-stylesheet', get_stylesheet_uri());
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.4.1', 'all' );
	wp_enqueue_style('preloader', get_template_directory_uri() . '/css/preloader.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style('circle', get_template_directory_uri() . '/css/circle.css', array(), _S_VERSION, 'all' );
	// Enqueue Font Awesome Free CDN in WordPress
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '6.5.2', 'all' );
	wp_enqueue_style('revealator', get_template_directory_uri() . '/css/fm.revealator.jquery.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all' );
	// Template Google Fonts
	wp_enqueue_style('fonts-google', 'https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
	wp_enqueue_style('', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700');
	// CSS Skin File
	// wp_enqueue_style('skins-color', get_template_directory_uri() . '/css/skins/yellow.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style('skins-color', get_template_directory_uri() . '/css/skins/green.css', array(), _S_VERSION, 'all' );
	// Modernizr JS File
	wp_enqueue_script('modernizer', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '2.7.1', false );
	// Template JS Files
	wp_enqueue_script('jquery-cus', get_template_directory_uri() . '/js/jquery-3.5.0.min.js', array(), '3.5.0', true);
	wp_enqueue_script('preloader', get_template_directory_uri() . '/js/preloader.min.js', array(), _S_VERSION, true );
	wp_enqueue_script('revealator', get_template_directory_uri() . '/js/fm.revealator.jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '5.0.0', true );
	wp_enqueue_script('masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '4.2.2', true );
	wp_enqueue_script('classie', get_template_directory_uri() . '/js/classie.js', array(), _S_VERSION, true );
	wp_enqueue_script('cbpGridGallery', get_template_directory_uri() . '/js/cbpGridGallery.js', array(), '1.0.0', true );
	wp_enqueue_script('hoverdir', get_template_directory_uri() . '/js/jquery.hoverdir.js', array(), '1.1.0', true );
	wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '4.4.1', true );
	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'tamim_wahid_scripts' );

