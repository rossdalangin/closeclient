<?php
/**
 * Generates dynamic CSS from the Customizer.
 *
 * @package CloseClient
 */

function closeclient_dynamic_css() {
    $css = '
        :root {
            --primary-color: ' . get_theme_mod('primary_color', '#0A2342') . ';
            --accent-color: ' . get_theme_mod('accent_color', '#D4AF37') . ';
        }
        body {
            color: ' . get_theme_mod('body_text_color', '#2E2E2E') . ';
        }
        .header {
            background-color: ' . get_theme_mod('header_bg_color', '#FFFFFF') . ';
        }
        .header .logo a, .header .nav a {
            color: ' . get_theme_mod('header_text_color', '#0A2342') . ';
        }
        .footer {
            background-color: ' . get_theme_mod('footer_bg_color', '#0A2342') . ';
            color: ' . get_theme_mod('footer_text_color', '#FFFFFF') . ';
        }
        .btn-primary {
            background-color: ' . get_theme_mod('button_bg_color', '#D4AF37') . ';
            color: ' . get_theme_mod('button_text_color', '#FFFFFF') . ';
            border-radius: ' . get_theme_mod('button_border_radius', '5') . 'px;
        }
    ';

    $sections = ['hero', 'problem', 'solution', 'benefits', 'cta', 'about_header', 'services_header', 'case_studies_header', 'contact_header'];
    foreach ($sections as $section) {
        $bg_color = get_theme_mod($section . '_bg_color');
        $bg_image = get_theme_mod($section . '_bg_image');
        if ($bg_color || $bg_image) {
            $selector = '#' . str_replace('_', '-', $section);
            if (strpos($section, '_header') !== false) {
                $selector = '.' . str_replace('_', '-', $section);
            }
            $css .= $selector . ' {';
            if ($bg_color) {
                $css .= 'background-color: ' . $bg_color . ';';
            }
            if ($bg_image) {
                $css .= 'background-image: url(' . esc_url($bg_image) . ');';
                $css .= 'background-size: cover;';
                $css .= 'background-position: center;';
            }
            $css .= '}';
        }
    }

    wp_add_inline_style( 'main-styles', $css );
}
add_action( 'wp_enqueue_scripts', 'closeclient_dynamic_css', 20 );
