<?php
/**
 * Generates dynamic CSS from the Customizer.
 *
 * @package CloseClient
 */

function closeclient_dynamic_css() {
    $css = '';

    // Body Typography
    $body_typography = get_theme_mod( 'body_typography' );
    if ( $body_typography ) {
        $css .= 'body {';
        $css .= 'font-family: ' . $body_typography['font-family'] . ';';
        $css .= 'font-weight: ' . $body_typography['variant'] . ';';
        $css .= 'font-size: ' . $body_typography['font-size'] . ';';
        $css .= 'line-height: ' . $body_typography['line-height'] . ';';
        $css .= 'letter-spacing: ' . $body_typography['letter-spacing'] . ';';
        $css .= 'color: ' . $body_typography['color'] . ';';
        $css .= 'text-transform: ' . $body_typography['text-transform'] . ';';
        $css .= '}';
    }

    // Headings Typography
    for ( $i = 1; $i <= 6; $i++ ) {
        $heading_typography = get_theme_mod( 'h' . $i . '_typography' );
        if ( $heading_typography ) {
            $css .= 'h' . $i . ' {';
            $css .= 'font-family: ' . $heading_typography['font-family'] . ';';
            $css .= 'font-weight: ' . $heading_typography['variant'] . ';';
            $css .= 'color: ' . $heading_typography['color'] . ';';
            $css .= '}';
        }
    }

    // Button Styles
    $button_bg_color = get_theme_mod( 'button_background_color' );
    if ( $button_bg_color ) {
        $css .= '.btn-primary { background-color: ' . $button_bg_color . '; }';
    }
    $button_text_color = get_theme_mod( 'button_text_color' );
    if ( $button_text_color ) {
        $css .= '.btn-primary { color: ' . $button_text_color . '; }';
    }
    $button_hover_bg_color = get_theme_mod( 'button_hover_background_color' );
    if ( $button_hover_bg_color ) {
        $css .= '.btn-primary:hover { background-color: ' . $button_hover_bg_color . ' !important; }';
    }
    $button_padding = get_theme_mod( 'button_padding' );
    if ( $button_padding ) {
        $css .= '.btn { padding-top: ' . $button_padding['top'] . '; padding-right: ' . $button_padding['right'] . '; padding-bottom: ' . $button_padding['bottom'] . '; padding-left: ' . $button_padding['left'] . '; }';
    }
    $button_border_radius = get_theme_mod( 'button_border_radius' );
    if ( $button_border_radius ) {
        $css .= '.btn { border-radius: ' . $button_border_radius . '; }';
    }

    // Form Styles
    $form_input_bg_color = get_theme_mod( 'form_input_background_color' );
    if ( $form_input_bg_color ) {
        $css .= 'input, textarea { background-color: ' . $form_input_bg_color . '; }';
    }
    $form_input_text_color = get_theme_mod( 'form_input_text_color' );
    if ( $form_input_text_color ) {
        $css .= 'input, textarea { color: ' . $form_input_text_color . '; }';
    }
    $form_input_border_color = get_theme_mod( 'form_input_border_color' );
    if ( $form_input_border_color ) {
        $css .= 'input, textarea { border-color: ' . $form_input_border_color . '; }';
    }

    // Header Styles
    $header_background = get_theme_mod( 'header_background' );
    if ( $header_background ) {
        $css .= '.header {';
        $css .= 'background-color: ' . $header_background['background-color'] . ';';
        $css .= 'background-image: ' . $header_background['background-image'] . ';';
        $css .= 'background-repeat: ' . $header_background['background-repeat'] . ';';
        $css .= 'background-position: ' . $header_background['background-position'] . ';';
        $css .= 'background-size: ' . $header_background['background-size'] . ';';
        $css .= 'background-attachment: ' . $header_background['background-attachment'] . ';';
        $css .= '}';
    }
    $header_padding = get_theme_mod( 'header_padding' );
    if ( $header_padding ) {
        $css .= '.header { padding-top: ' . $header_padding['top'] . '; padding-bottom: ' . $header_padding['bottom'] . '; }';
    }
    $header_link_color = get_theme_mod( 'header_link_color' );
    if ( $header_link_color ) {
        $css .= '.header .nav a { color: ' . $header_link_color . '; }';
    }

    // Footer Styles
    $footer_background = get_theme_mod( 'footer_background' );
    if ( $footer_background ) {
        $css .= '.footer {';
        $css .= 'background-color: ' . $footer_background['background-color'] . ';';
        $css .= 'background-image: ' . $footer_background['background-image'] . ';';
        $css .= 'background-repeat: ' . $footer_background['background-repeat'] . ';';
        $css .= 'background-position: ' . $footer_background['background-position'] . ';';
        $css .= 'background-size: ' . $footer_background['background-size'] . ';';
        $css .= 'background-attachment: ' . $footer_background['background-attachment'] . ';';
        $css .= '}';
    }
    $footer_text_color = get_theme_mod( 'footer_text_color' );
    if ( $footer_text_color ) {
        $css .= '.footer { color: ' . $footer_text_color . '; }';
    }

    wp_add_inline_style( 'main-styles', $css );
}
add_action( 'wp_enqueue_scripts', 'closeclient_dynamic_css' );
