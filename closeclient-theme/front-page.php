<?php
/**
 * Template Name: Front Page
 */

get_header();
?>

<main>
    <section class="hero">
        <div class="container">
            <h1 class="reveal"><?php echo esc_html( get_theme_mod( 'hero_headline', 'Your Website Should Make You Money. Ours Do.' ) ); ?></h1>
            <p class="sub-headline reveal"><?php echo esc_html( get_theme_mod( 'hero_subheadline', 'Stop wasting money on beautiful brochures. We build strategic, sales-driven websites for coaches, consultants, and lawyers that turn visitors into high-value clients.' ) ); ?></p>
            <a href="<?php echo esc_url( get_theme_mod( 'hero_button_url', home_url( '/contact' ) ) ); ?>" class="btn btn-primary reveal"><?php echo esc_html( get_theme_mod( 'hero_button_text', 'Book Your Free Strategy Session' ) ); ?></a>
            <p class="reveal hero-small-text"><?php echo esc_html( get_theme_mod( 'hero_small_text', '100% Free, No Obligation.' ) ); ?></p>
        </div>
    </section>

    <section id="problem" class="container reveal">
        <div class="text-center">
            <h2><?php echo esc_html( get_theme_mod( 'problem_title', 'Is Your Website a Glorified Brochure?' ) ); ?></h2>
            <p><?php echo esc_html( get_theme_mod( 'problem_paragraph', "If you're frustrated with a website that looks good but fails to generate leads, you're not alone. Most web developers focus on aesthetics, not results. They don't understand business, and it's costing you." ) ); ?></p>
            <ul class="problem-list">
                <li><?php echo esc_html( get_theme_mod( 'problem_list_item_1', '❌ Website gets compliments, but no clients.' ) ); ?></li>
                <li><?php echo esc_html( get_theme_mod( 'problem_list_item_2', '❌ Visitors leave without taking action.' ) ); ?></li>
                <li><?php echo esc_html( get_theme_mod( 'problem_list_item_3', "❌ Your message isn't connecting with your ideal clients." ) ); ?></li>
                <li><?php echo esc_html( get_theme_mod( 'problem_list_item_4', "❌ You're losing money on a digital asset that should be your #1 salesperson." ) ); ?></li>
            </ul>
        </div>
    </section>

    <section id="solution" class="section-bg">
        <div class="container reveal text-center">
            <h2><?php echo esc_html( get_theme_mod( 'solution_title', "We Don't Build Websites. We Build Client-Closing Machines." ) ); ?></h2>
            <p><?php echo esc_html( get_theme_mod( 'solution_paragraph', 'A CloseClient.com website is different. We combine conversion-focused design, direct-response copywriting, and a sales-driven strategy to create a predictable system for attracting and closing your ideal clients.' ) ); ?></p>
        </div>
    </section>

    <section id="benefits" class="container">
        <div class="text-center benefits-title">
            <h2><?php echo esc_html( get_theme_mod( 'benefits_title', 'The Difference is in the Results' ) ); ?></h2>
        </div>
        <div class="benefits-grid">
            <div class="card reveal">
                <h3><?php echo esc_html( get_theme_mod( 'benefits_card_1_title', 'Generate Predictable Leads' ) ); ?></h3>
                <p><?php echo esc_html( get_theme_mod( 'benefits_card_1_text', 'Stop relying on referrals. Our websites are built with a clear strategy to attract your ideal clients and guide them to take action.' ) ); ?></p>
            </div>
            <div class="card reveal">
                <h3><?php echo esc_html( get_theme_mod( 'benefits_card_2_title', 'Increase Your Conversion Rate' ) ); ?></h3>
                <p><?php echo esc_html( get_theme_mod( 'benefits_card_2_text', 'Through strategic messaging and trust-building design, we turn more of your visitors into scheduled calls and qualified inquiries.' ) ); ?></p>
            </div>
            <div class="card reveal">
                <h3><?php echo esc_html( get_theme_mod( 'benefits_card_3_title', 'Establish Unshakable Authority' ) ); ?></h3>
                <p><?php echo esc_html( get_theme_mod( 'benefits_card_3_text', 'We position you as the go-to expert in your field, allowing you to command premium fees and attract high-value clients.' ) ); ?></p>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php
get_footer();
