<?php
/**
 * Template Name: Services
 */

get_header();
?>

<main>
    <section class="section-bg page-header services-header">
        <div class="container reveal">
            <h1><?php echo esc_html( get_theme_mod( 'services_header_title', 'Our Service: The Client Acquisition Website' ) ); ?></h1>
            <p class="sub-headline"><?php echo esc_html( get_theme_mod( 'services_header_subheadline', 'We have one service with one goal: to build you a website that predictably generates high-value clients.' ) ); ?></p>
        </div>
    </section>

    <section class="container">
        <div class="text-center benefits-title">
            <h2 class="reveal"><?php echo esc_html( get_theme_mod( 'services_main_title', "What's Included in Your Client Acquisition Website" ) ); ?></h2>
        </div>
        <div class="services-grid">
            <div class="card reveal">
                <h3><?php echo esc_html( get_theme_mod( 'services_card_1_title', '1. Conversion Strategy & Messaging' ) ); ?></h3>
                <p><?php echo esc_html( get_theme_mod( 'services_card_1_text', "This is the foundation. Before we design anything, we work with you to dial in your messaging, define your ideal client, and map out a clear strategy to turn visitors into leads. We don't build websites; we build sales funnels." ) ); ?></p>
            </div>
            <div class="card reveal">
                <h3><?php echo esc_html( get_theme_mod( 'services_card_2_title', '2. Direct-Response Copywriting' ) ); ?></h3>
                <p><?php echo esc_html( get_theme_mod( 'services_card_2_text', "Great copy sells. Our team writes clear, persuasive, and sales-focused copy for every page of your site. We speak directly to your ideal client's pain points and position you as the only logical solution." ) ); ?></p>
            </div>
            <div class="card reveal">
                <h3><?php echo esc_html( get_theme_mod( 'services_card_3_title', '3. Authority-Building Design' ) ); ?></h3>
                <p><?php echo esc_html( get_theme_mod( 'services_card_3_text', "Your website's design must instantly communicate credibility and trust. We create professional, modern, and clean designs that make you look like the high-end expert you are. This isn't about being \"flashy\"; it's about inspiring confidence." ) ); ?></p>
            </div>
            <div class="card reveal">
                <h3><?php echo esc_html( get_theme_mod( 'services_card_4_title', '4. Technical Development & Optimization' ) ); ?></h3>
                <p><?php echo esc_html( get_theme_mod( 'services_card_4_text', 'We handle all the technical details, building a fast, mobile-responsive, and SEO-friendly website. Your site will be easy to manage and built on a rock-solid foundation for future growth.' ) ); ?></p>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php
get_footer();
