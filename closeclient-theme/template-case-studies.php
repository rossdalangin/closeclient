<?php
/**
 * Template Name: Case Studies
 */

get_header();
?>

<main>
    <section class="section-bg page-header case-studies-header">
        <div class="container reveal">
            <h1><?php echo esc_html( get_theme_mod( 'case_studies_header_title', 'The Proof is in the Results' ) ); ?></h1>
            <p class="sub-headline"><?php echo esc_html( get_theme_mod( 'case_studies_header_subheadline', "We're not just designers; we're growth partners. Here's how we've helped businesses like yours." ) ); ?></p>
        </div>
    </section>

    <section class="container">
        <div class="reveal case-studies-grid">
            <div class="card" style="text-align: left;">
                <h3><?php echo esc_html( get_theme_mod( 'case_study_1_title', 'Case Study: [Consulting Firm Name]' ) ); ?></h3>
                <p><strong>The Problem:</strong> <span class="case-study-problem"><?php echo esc_html( get_theme_mod( 'case_study_1_problem', 'A highly-respected consulting firm had a website that looked like it was from 2005. It didn\'t reflect their level of expertise and, more importantly, it wasn\'t generating any leads.' ) ); ?></span></p>
                <p><strong>Our Solution:</strong> <span class="case-study-solution"><?php echo esc_html( get_theme_mod( 'case_study_1_solution', 'We conducted a full brand messaging and strategy session, then designed a modern, authority-building website with clear calls-to-action and conversion-focused copy. We positioned them as the premier experts in their niche.' ) ); ?></span></p>
                <p>The Result: <span class="case-study-result"><?php echo esc_html( get_theme_mod( 'case_study_1_result', 'A 300% Increase in Qualified Leads in the First 90 Days.' ) ); ?></span></p>
            </div>
            <div class="card" style="text-align: left;">
                <h3><?php echo esc_html( get_theme_mod( 'case_study_2_title', 'Case Study: [Law Firm Name]' ) ); ?></h3>
                <p><strong>The Problem:</strong> <span class="case-study-problem"><?php echo esc_html( get_theme_mod( 'case_study_2_problem', 'A successful law firm was relying entirely on referrals. They wanted to generate their own leads but their website was generic and didn\'t differentiate them from the competition.' ) ); ?></span></p>
                <p><strong>Our Solution:</strong> <span class="case-study-solution"><?php echo esc_html( get_theme_mod( 'case_study_2_solution', 'We developed a new website with a strong focus on building trust and credibility. We created targeted content for their key practice areas and implemented a clear path for visitors to book a consultation.' ) ); ?></span></p>
                <p>The Result: <span class="case-study-result"><?php echo esc_html( get_theme_mod( 'case_study_2_result', 'A Consistent Flow of 10-15 High-Value Case Inquiries Per Month.' ) ); ?></span></p>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php
get_footer();
