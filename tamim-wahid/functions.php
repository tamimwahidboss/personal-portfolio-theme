<?php
/**
 * Tamim Wahid Portfolio functions and definitions
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Implement the theme support
 */
require get_template_directory() . '/inc/theme-support.php';

/**
 * Implement the wp enqueue script.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Implement the codestar framework.
 */
require get_template_directory() . '/inc/csf-customize.php';

/**
 * Implement the codestar framework.
 */
require get_template_directory() . '/inc/csf-meta.php';


// Add custom class in wp_nav_menu list item
function tw_custom_menu_item_class($classes, $item, $args) {
    if($args->theme_location == 'primary') {
        $classes[] = 'icon-box';
    }
    return $classes;
}
add_filter('nav_menu_css_class','tw_custom_menu_item_class', 10, 3);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tamim_wahid_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tamim-wahid' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tamim-wahid' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tamim_wahid_widgets_init' );

// Custom body classes based on theme pages

function tw_custom_body_classes( $classes ) {
    // Get the current post's template if it's a page
    if ( is_page() ) {
        $template_path = get_post_meta( get_the_ID(), '_wp_page_template', true );
        $templates = wp_get_theme()->get_page_templates();
        $get_name = isset($templates[$template_path]) ? $templates[$template_path] : '';

        // Add classes based on specific page templates
        switch ( $get_name ) {
            case 'Home Page':
                $classes[] = 'home';
                break;
            case 'About Page':
                $classes[] = 'about';
                break;
            case 'Portfolio Page':
                $classes[] = 'portfolio';
                break;
            case 'Contact Page':
                $classes[] = 'contact';
                break;
        }
    }

    // Add class for single portfolio post
    if ( 'portfolio' == get_post_type() ) {
        $classes[] = 'blog-post';
    }

    // Add class for the main blog page
    if ( is_home() ) {
        $classes[] = 'blog';
    }

    // Add class for single blog posts
    if ( is_single() && 'post' == get_post_type() ) {
        $classes[] = 'blog-post';
    }

    return $classes;
}
add_filter( 'body_class', 'tw_custom_body_classes' );


// Register custom post type
function tw_custom_portfolio_post_type() {
    $labels = array(
        'name'                  => __( 'Portfolios', 'tamim-wahid' ),
        'singular_name'         => __( 'Portfolio', 'tamim-wahid' ),
        'menu_name'             => __( 'Portfolio', 'tamim-wahid' ),
        'name_admin_bar'        => __( 'Portfolio', 'tamim-wahid' ),
        'add_new'               => __( 'Add New', 'tamim-wahid' ),
        'add_new_item'          => __( 'Add New Portfolio', 'tamim-wahid' ),
        'new_item'              => __( 'New portfolio', 'tamim-wahid' ),
        'edit_item'             => __( 'Edit portfolio', 'tamim-wahid' ),
        'view_item'             => __( 'View portfolio', 'tamim-wahid' ),
        'all_items'             => __( 'All portfolios', 'tamim-wahid' ),
        'search_items'          => __( 'Search portfolios', 'tamim-wahid' ),
        'parent_item_colon'     => __( 'Parent portfolios:', 'tamim-wahid' ),
        'not_found'             => __( 'No portfolios found.', 'tamim-wahid' ),
        'not_found_in_trash'    => __( 'No portfolios found in Trash.', 'tamim-wahid' ),
        'featured_image'        => __( 'Portfolio Cover Image', 'tamim-wahid' ),
        'set_featured_image'    => __( 'Set cover image', 'tamim-wahid' ),
        'remove_featured_image' => __( 'Remove cover image', 'tamim-wahid' ),
        'use_featured_image'    => __( 'Use as cover image', 'tamim-wahid' ),
        'archives'              => __( 'Portfolio archives', 'tamim-wahid' ),
        'insert_into_item'      => __( 'Insert into Portfolio', 'tamim-wahid' ),
        'uploaded_to_this_item' => __( 'Uploaded to this portfolio', 'tamim-wahid' ),
        'filter_items_list'     => __( 'Filter portfolios list', 'tamim-wahid' ),
        'items_list_navigation' => __( 'Portfolios list navigation', 'tamim-wahid' ),
        'items_list'            => __( 'Portfolios list', 'tamim-wahid' ),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => 'Portfolio custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array( 'title', 'thumbnail', 'editor'),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
     
    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'tw_custom_portfolio_post_type' );


// Add form handling hook
add_action( 'admin_post_nopriv_handle_contact_form', 'handle_contact_form' );
add_action( 'admin_post_handle_contact_form', 'handle_contact_form' );

function handle_contact_form() {
    // Sanitize form data
    $name = sanitize_text_field( $_POST['name'] );
    $email = sanitize_email( $_POST['email'] );
    $subject = sanitize_text_field( $_POST['subject'] );
    $message = sanitize_textarea_field( $_POST['message'] );

    // Process the form (e.g., send an email or store data in the database)
    $to = get_option( 'admin_email' ); // Send to site admin
    $headers = array( 'Content-Type: text/html; charset=UTF-8', "From: $name <$email>" );
    $mail_sent = wp_mail( $to, $subject, $message, $headers );

    // Redirect after form submission
    if ( $mail_sent ) {
        wp_redirect( home_url( '/thank-you/' ) ); // Redirect to a Thank You page
        exit;
    } else {
        wp_redirect( home_url( '/error/' ) ); // Redirect to an error page
        exit;
    }
}
