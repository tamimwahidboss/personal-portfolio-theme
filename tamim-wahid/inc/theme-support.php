<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function tamim_wahid_setup() {
	load_theme_textdomain( 'tamim-wahid', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'tamim-wahid' ),
		)
	);
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
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'tamim_wahid_setup' );