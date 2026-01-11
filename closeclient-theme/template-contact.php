<?php
/**
 * Template Name: Contact
 */

get_header();
?>

<main>
    <section class="container page-header">
        <div class="reveal">
            <h1><?php echo esc_html( get_theme_mod( 'contact_header_title', "Let's Talk About Your Business" ) ); ?></h1>
            <p class="sub-headline"><?php echo esc_html( get_theme_mod( 'contact_header_subheadline', "The next step is a free, no-obligation 15-minute Strategy Session. We'll discuss your goals, analyze your current website, and give you actionable advice you can use immediately, whether you choose to work with us or not." ) ); ?></p>

            <div class="form-placeholder">
                <h3><?php echo esc_html( get_theme_mod( 'contact_form_placeholder_title', 'Scheduling Tool Embed' ) ); ?></h3>
                <p><?php echo esc_html( get_theme_mod( 'contact_form_placeholder_text', 'In a real implementation, a tool like Calendly would be embedded here to allow for seamless, automated booking.' ) ); ?></p>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
