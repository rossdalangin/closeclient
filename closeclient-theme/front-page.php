<?php
/**
 * The template for displaying the front page.
 *
 * @package CloseClient
 */

get_header(); ?>

<main id="main" class="site-main">

    <?php
    $sections = get_theme_mod( 'homepage_sections_order', ['hero', 'problem', 'solution', 'benefits', 'cta'] );

    foreach ( $sections as $section ) {
        $enabled = get_theme_mod( $section . '_section_enable', true );
        if ( $enabled ) {
            get_template_part( 'template-parts/homepage/' . $section );
        }
    }
    ?>

</main>

<?php
get_footer();
