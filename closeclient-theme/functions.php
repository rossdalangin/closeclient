<?php
/**
 * Theme functions and definitions
 */

function closeclient_setup() {
    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'closeclient' ),
    ) );
}
add_action( 'after_setup_theme', 'closeclient_setup' );

function closeclient_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato:wght@400;700&display=swap', array(), null );

    // Theme stylesheet
    wp_enqueue_style( 'closeclient-style', get_stylesheet_uri() );

    // Custom CSS from original project
    wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/assets/css/style.css' );

    // JavaScript
    wp_enqueue_script( 'closeclient-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'closeclient_enqueue_assets' );

/**
 * Implement the Customizer.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/dynamic-css.php';
