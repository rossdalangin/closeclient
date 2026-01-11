<?php
/**
 * Template Name: About
 */

get_header();
?>

<main>
    <section class="section-bg page-header">
        <div class="container reveal">
            <h1><?php echo esc_html( get_theme_mod( 'about_header_title', "We're Business Growth Experts Who Happen to Build Websites" ) ); ?></h1>
        </div>
    </section>

    <section class="container">
        <div class="reveal about-grid">
            <img src="<?php echo esc_url( get_theme_mod( 'about_main_image', 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' ) ); ?>" alt="Founder of CloseClient.com">
            <div>
                <h2><?php echo esc_html( get_theme_mod( 'about_main_title', "Hi, I'm [Founder's Name]. I'm a Business Owner, Just Like You." ) ); ?></h2>
                <p><?php echo wp_kses_post( get_theme_mod( 'about_main_text', "I started CloseClient.com for one simple reason: I was tired of seeing talented coaches, consultants, and lawyers with incredible services being held back by websites that just didn't work.\n\nBefore I was a web developer, I was in the trenches of B2B sales. I learned that pretty designs and flashy features don't close deals. A clear message, a compelling offer, and a direct path to a conversation do.\n\nThat's the philosophy we bring to every project. We're not \"coders\" or \"designers\" in the typical sense. We're strategic partners who use technology as a tool to achieve your most important business objective: getting more clients." ) ); ?></p>
            </div>
        </div>
        <div class="reveal text-center about-mission">
            <h3><?php echo esc_html( get_theme_mod( 'about_mission_title', 'Our Mission is Simple' ) ); ?></h3>
            <p><?php echo esc_html( get_theme_mod( 'about_mission_text', 'To free our clients from the "feast or famine" cycle by building them powerful, predictable client acquisition systems that work for them 24/7.' ) ); ?></p>
        </div>
    </section>

    <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php
get_footer();
