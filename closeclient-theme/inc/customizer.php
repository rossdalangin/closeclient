<?php
/**
 * CloseClient Theme Customizer
 *
 * @package CloseClient
 */

function closeclient_customize_register( $wp_customize ) {
    // Site Identity Panel (for logo)
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

    // Front Page Settings Panel
    $wp_customize->add_panel( 'front_page_settings', array(
        'title'    => __( 'Front Page Sections', 'closeclient' ),
        'priority' => 10,
    ) );

    // Hero Section
    $wp_customize->add_section( 'hero_section', array(
        'title'    => __( 'Hero Section', 'closeclient' ),
        'panel'    => 'front_page_settings',
    ) );

    $wp_customize->add_setting( 'hero_headline', array( 'default' => 'Your Website Should Make You Money. Ours Do.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'hero_headline', array( 'label' => 'Headline', 'section' => 'hero_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'hero_subheadline', array( 'default' => 'Stop wasting money on beautiful brochures. We build strategic, sales-driven websites for coaches, consultants, and lawyers that turn visitors into high-value clients.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'hero_subheadline', array( 'label' => 'Sub-headline', 'section' => 'hero_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'hero_button_text', array( 'default' => 'Book Your Free Strategy Session', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'hero_button_text', array( 'label' => 'Button Text', 'section' => 'hero_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'hero_button_url', array( 'default' => '#', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'hero_button_url', array( 'label' => 'Button URL', 'section' => 'hero_section', 'type' => 'url' ) );

    $wp_customize->add_setting( 'hero_small_text', array( 'default' => '100% Free, No Obligation.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'hero_small_text', array( 'label' => 'Small Text', 'section' => 'hero_section', 'type' => 'text' ) );

    // Problem Section
    $wp_customize->add_section( 'problem_section', array(
        'title'    => __( 'Problem Section', 'closeclient' ),
        'panel'    => 'front_page_settings',
    ) );
    $wp_customize->add_setting( 'problem_title', array( 'default' => 'Is Your Website a Glorified Brochure?', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'problem_title', array( 'label' => 'Title', 'section' => 'problem_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'problem_paragraph', array( 'default' => "If you're frustrated with a website that looks good but fails to generate leads, you're not alone. Most web developers focus on aesthetics, not results. They don't understand business, and it's costing you.", 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'problem_paragraph', array( 'label' => 'Paragraph', 'section' => 'problem_section', 'type' => 'textarea' ) );
    $wp_customize->add_setting( 'problem_list_item_1', array( 'default' => '❌ Website gets compliments, but no clients.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'problem_list_item_1', array( 'label' => 'List Item 1', 'section' => 'problem_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'problem_list_item_2', array( 'default' => '❌ Visitors leave without taking action.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'problem_list_item_2', array( 'label' => 'List Item 2', 'section' => 'problem_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'problem_list_item_3', array( 'default' => "❌ Your message isn't connecting with your ideal clients.", 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'problem_list_item_3', array( 'label' => 'List Item 3', 'section' => 'problem_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'problem_list_item_4', array( 'default' => "❌ You're losing money on a digital asset that should be your #1 salesperson.", 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'problem_list_item_4', array( 'label' => 'List Item 4', 'section' => 'problem_section', 'type' => 'text' ) );

    // Solution Section
    $wp_customize->add_section( 'solution_section', array(
        'title'    => __( 'Solution Section', 'closeclient' ),
        'panel'    => 'front_page_settings',
    ) );
    $wp_customize->add_setting( 'solution_title', array( 'default' => "We Don't Build Websites. We Build Client-Closing Machines.", 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'solution_title', array( 'label' => 'Title', 'section' => 'solution_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'solution_paragraph', array( 'default' => 'A CloseClient.com website is different. We combine conversion-focused design, direct-response copywriting, and a sales-driven strategy to create a predictable system for attracting and closing your ideal clients.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'solution_paragraph', array( 'label' => 'Paragraph', 'section' => 'solution_section', 'type' => 'textarea' ) );

    // Benefits Section
    $wp_customize->add_section( 'benefits_section', array(
        'title'    => __( 'Benefits Section', 'closeclient' ),
        'panel'    => 'front_page_settings',
    ) );
    $wp_customize->add_setting( 'benefits_title', array( 'default' => 'The Difference is in the Results', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'benefits_title', array( 'label' => 'Title', 'section' => 'benefits_section', 'type' => 'text' ) );

    // Card 1
    $wp_customize->add_setting( 'benefits_card_1_title', array( 'default' => 'Generate Predictable Leads', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'benefits_card_1_title', array( 'label' => 'Card 1 Title', 'section' => 'benefits_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'benefits_card_1_text', array( 'default' => 'Stop relying on referrals. Our websites are built with a clear strategy to attract your ideal clients and guide them to take action.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'benefits_card_1_text', array( 'label' => 'Card 1 Text', 'section' => 'benefits_section', 'type' => 'textarea' ) );

    // Card 2
    $wp_customize->add_setting( 'benefits_card_2_title', array( 'default' => 'Increase Your Conversion Rate', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'benefits_card_2_title', array( 'label' => 'Card 2 Title', 'section' => 'benefits_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'benefits_card_2_text', array( 'default' => 'Through strategic messaging and trust-building design, we turn more of your visitors into scheduled calls and qualified inquiries.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'benefits_card_2_text', array( 'label' => 'Card 2 Text', 'section' => 'benefits_section', 'type' => 'textarea' ) );

    // Card 3
    $wp_customize->add_setting( 'benefits_card_3_title', array( 'default' => 'Establish Unshakable Authority', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'benefits_card_3_title', array( 'label' => 'Card 3 Title', 'section' => 'benefits_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'benefits_card_3_text', array( 'default' => 'We position you as the go-to expert in your field, allowing you to command premium fees and attract high-value clients.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'benefits_card_3_text', array( 'label' => 'Card 3 Text', 'section' => 'benefits_section', 'type' => 'textarea' ) );

    // CTA Section
    $wp_customize->add_section( 'cta_section', array(
        'title'    => __( 'CTA Section', 'closeclient' ),
        'panel'    => 'front_page_settings',
    ) );
    $wp_customize->add_setting( 'cta_title', array( 'default' => 'Ready to Turn Your Website into Your #1 Salesperson?', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'cta_title', array( 'label' => 'Title', 'section' => 'cta_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'cta_subheadline', array( 'default' => "Let's have a quick, 15-minute chat to discuss your business goals and see if we're a good fit. No pressure, no sales pitch.", 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'cta_subheadline', array( 'label' => 'Sub-headline', 'section' => 'cta_section', 'type' => 'textarea' ) );
    $wp_customize->add_setting( 'cta_button_text', array( 'default' => 'Book Your Free Strategy Session Now', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'cta_button_text', array( 'label' => 'Button Text', 'section' => 'cta_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'cta_button_url', array( 'default' => '#', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'cta_button_url', array( 'label' => 'Button URL', 'section' => 'cta_section', 'type' => 'url' ) );

    // About Page Settings
    $wp_customize->add_panel( 'about_page_settings', array(
        'title'    => __( 'About Page', 'closeclient' ),
        'priority' => 20,
    ) );

    $wp_customize->add_section( 'about_page_header', array(
        'title'    => __( 'Header', 'closeclient' ),
        'panel'    => 'about_page_settings',
    ) );
    $wp_customize->add_setting( 'about_header_title', array( 'default' => "We're Business Growth Experts Who Happen to Build Websites", 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'about_header_title', array( 'label' => 'Title', 'section' => 'about_page_header', 'type' => 'textarea' ) );

    $wp_customize->add_section( 'about_page_main', array(
        'title'    => __( 'Main Content', 'closeclient' ),
        'panel'    => 'about_page_settings',
    ) );
    $wp_customize->add_setting( 'about_main_image', array( 'transport' => 'postMessage' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'about_main_image', array(
        'label'    => __( 'Image', 'closeclient' ),
        'section'  => 'about_page_main',
    ) ) );
    $wp_customize->add_setting( 'about_main_title', array( 'default' => "Hi, I'm [Founder's Name]. I'm a Business Owner, Just Like You.", 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'about_main_title', array( 'label' => 'Title', 'section' => 'about_page_main', 'type' => 'text' ) );
    $wp_customize->add_setting( 'about_main_text', array( 'default' => "I started CloseClient.com for one simple reason: I was tired of seeing talented coaches, consultants, and lawyers with incredible services being held back by websites that just didn't work.\n\nBefore I was a web developer, I was in the trenches of B2B sales. I learned that pretty designs and flashy features don't close deals. A clear message, a compelling offer, and a direct path to a conversation do.\n\nThat's the philosophy we bring to every project. We're not \"coders\" or \"designers\" in the typical sense. We're strategic partners who use technology as a tool to achieve your most important business objective: getting more clients.", 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'about_main_text', array( 'label' => 'Text', 'section' => 'about_page_main', 'type' => 'textarea' ) );

    $wp_customize->add_section( 'about_page_mission', array(
        'title'    => __( 'Mission', 'closeclient' ),
        'panel'    => 'about_page_settings',
    ) );
    $wp_customize->add_setting( 'about_mission_title', array( 'default' => 'Our Mission is Simple', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'about_mission_title', array( 'label' => 'Title', 'section' => 'about_page_mission', 'type' => 'text' ) );
    $wp_customize->add_setting( 'about_mission_text', array( 'default' => 'To free our clients from the "feast or famine" cycle by building them powerful, predictable client acquisition systems that work for them 24/7.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'about_mission_text', array( 'label' => 'Text', 'section' => 'about_page_mission', 'type' => 'textarea' ) );

    // Services Page Settings
    $wp_customize->add_panel( 'services_page_settings', array(
        'title'    => __( 'Services Page', 'closeclient' ),
        'priority' => 30,
    ) );

    $wp_customize->add_section( 'services_page_header', array(
        'title'    => __( 'Header', 'closeclient' ),
        'panel'    => 'services_page_settings',
    ) );
    $wp_customize->add_setting( 'services_header_title', array( 'default' => 'Our Service: The Client Acquisition Website', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'services_header_title', array( 'label' => 'Title', 'section' => 'services_page_header', 'type' => 'text' ) );
    $wp_customize->add_setting( 'services_header_subheadline', array( 'default' => 'We have one service with one goal: to build you a website that predictably generates high-value clients.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'services_header_subheadline', array( 'label' => 'Sub-headline', 'section' => 'services_page_header', 'type' => 'textarea' ) );

    $wp_customize->add_section( 'services_page_main', array(
        'title'    => __( 'Main Content', 'closeclient' ),
        'panel'    => 'services_page_settings',
    ) );
    $wp_customize->add_setting( 'services_main_title', array( 'default' => "What's Included in Your Client Acquisition Website", 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'services_main_title', array( 'label' => 'Title', 'section' => 'services_page_main', 'type' => 'text' ) );

    $wp_customize->add_setting( 'services_card_1_title', array( 'default' => '1. Conversion Strategy & Messaging', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'services_card_1_title', array( 'label' => 'Card 1 Title', 'section' => 'services_page_main', 'type' => 'text' ) );
    $wp_customize->add_setting( 'services_card_1_text', array( 'default' => "This is the foundation. Before we design anything, we work with you to dial in your messaging, define your ideal client, and map out a clear strategy to turn visitors into leads. We don't build websites; we build sales funnels.", 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'services_card_1_text', array( 'label' => 'Card 1 Text', 'section' => 'services_page_main', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'services_card_2_title', array( 'default' => '2. Direct-Response Copywriting', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'services_card_2_title', array( 'label' => 'Card 2 Title', 'section' => 'services_page_main', 'type' => 'text' ) );
    $wp_customize->add_setting( 'services_card_2_text', array( 'default' => "Great copy sells. Our team writes clear, persuasive, and sales-focused copy for every page of your site. We speak directly to your ideal client's pain points and position you as the only logical solution.", 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'services_card_2_text', array( 'label' => 'Card 2 Text', 'section' => 'services_page_main', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'services_card_3_title', array( 'default' => '3. Authority-Building Design', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'services_card_3_title', array( 'label' => 'Card 3 Title', 'section' => 'services_page_main', 'type' => 'text' ) );
    $wp_customize->add_setting( 'services_card_3_text', array( 'default' => "Your website's design must instantly communicate credibility and trust. We create professional, modern, and clean designs that make you look like the high-end expert you are. This isn't about being \"flashy\"; it's about inspiring confidence.", 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'services_card_3_text', array( 'label' => 'Card 3 Text', 'section' => 'services_page_main', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'services_card_4_title', array( 'default' => '4. Technical Development & Optimization', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'services_card_4_title', array( 'label' => 'Card 4 Title', 'section' => 'services_page_main', 'type' => 'text' ) );
    $wp_customize->add_setting( 'services_card_4_text', array( 'default' => 'We handle all the technical details, building a fast, mobile-responsive, and SEO-friendly website. Your site will be easy to manage and built on a rock-solid foundation for future growth.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'services_card_4_text', array( 'label' => 'Card 4 Text', 'section' => 'services_page_main', 'type' => 'textarea' ) );

    // Case Studies Page Settings
    $wp_customize->add_panel( 'case_studies_page_settings', array(
        'title'    => __( 'Case Studies Page', 'closeclient' ),
        'priority' => 40,
    ) );

    $wp_customize->add_section( 'case_studies_page_header', array(
        'title'    => __( 'Header', 'closeclient' ),
        'panel'    => 'case_studies_page_settings',
    ) );
    $wp_customize->add_setting( 'case_studies_header_title', array( 'default' => 'The Proof is in the Results', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'case_studies_header_title', array( 'label' => 'Title', 'section' => 'case_studies_page_header', 'type' => 'text' ) );
    $wp_customize->add_setting( 'case_studies_header_subheadline', array( 'default' => "We're not just designers; we're growth partners. Here's how we've helped businesses like yours.", 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'case_studies_header_subheadline', array( 'label' => 'Sub-headline', 'section' => 'case_studies_page_header', 'type' => 'textarea' ) );

    $wp_customize->add_section( 'case_studies_page_main', array(
        'title'    => __( 'Main Content', 'closeclient' ),
        'panel'    => 'case_studies_page_settings',
    ) );

    $wp_customize->add_setting( 'case_study_1_title', array( 'default' => 'Case Study: [Consulting Firm Name]', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'case_study_1_title', array( 'label' => 'Case Study 1 Title', 'section' => 'case_studies_page_main', 'type' => 'text' ) );
    $wp_customize->add_setting( 'case_study_1_problem', array( 'default' => 'A highly-respected consulting firm had a website that looked like it was from 2005. It didn\'t reflect their level of expertise and, more importantly, it wasn\'t generating any leads.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'case_study_1_problem', array( 'label' => 'Case Study 1 Problem', 'section' => 'case_studies_page_main', 'type' => 'textarea' ) );
    $wp_customize->add_setting( 'case_study_1_solution', array( 'default' => 'We conducted a full brand messaging and strategy session, then designed a modern, authority-building website with clear calls-to-action and conversion-focused copy. We positioned them as the premier experts in their niche.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'case_study_1_solution', array( 'label' => 'Case Study 1 Solution', 'section' => 'case_studies_page_main', 'type' => 'textarea' ) );
    $wp_customize->add_setting( 'case_study_1_result', array( 'default' => 'A 300% Increase in Qualified Leads in the First 90 Days.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'case_study_1_result', array( 'label' => 'Case Study 1 Result', 'section' => 'case_studies_page_main', 'type' => 'text' ) );

    $wp_customize->add_setting( 'case_study_2_title', array( 'default' => 'Case Study: [Law Firm Name]', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'case_study_2_title', array( 'label' => 'Case Study 2 Title', 'section' => 'case_studies_page_main', 'type' => 'text' ) );
    $wp_customize->add_setting( 'case_study_2_problem', array( 'default' => 'A successful law firm was relying entirely on referrals. They wanted to generate their own leads but their website was generic and didn\'t differentiate them from the competition.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'case_study_2_problem', array( 'label' => 'Case Study 2 Problem', 'section' => 'case_studies_page_main', 'type' => 'textarea' ) );
    $wp_customize->add_setting( 'case_study_2_solution', array( 'default' => 'We developed a new website with a strong focus on building trust and credibility. We created targeted content for their key practice areas and implemented a clear path for visitors to book a consultation.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'case_study_2_solution', array( 'label' => 'Case Study 2 Solution', 'section' => 'case_studies_page_main', 'type' => 'textarea' ) );
    $wp_customize->add_setting( 'case_study_2_result', array( 'default' => 'A Consistent Flow of 10-15 High-Value Case Inquiries Per Month.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'case_study_2_result', array( 'label' => 'Case Study 2 Result', 'section' => 'case_studies_page_main', 'type' => 'text' ) );

    // Contact Page Settings
    $wp_customize->add_panel( 'contact_page_settings', array(
        'title'    => __( 'Contact Page', 'closeclient' ),
        'priority' => 50,
    ) );

    $wp_customize->add_section( 'contact_page_header', array(
        'title'    => __( 'Header', 'closeclient' ),
        'panel'    => 'contact_page_settings',
    ) );
    $wp_customize->add_setting( 'contact_header_title', array( 'default' => "Let's Talk About Your Business", 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'contact_header_title', array( 'label' => 'Title', 'section' => 'contact_page_header', 'type' => 'text' ) );
    $wp_customize->add_setting( 'contact_header_subheadline', array( 'default' => "The next step is a free, no-obligation 15-minute Strategy Session. We'll discuss your goals, analyze your current website, and give you actionable advice you can use immediately, whether you choose to work with us or not.", 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'contact_header_subheadline', array( 'label' => 'Sub-headline', 'section' => 'contact_page_header', 'type' => 'textarea' ) );

    $wp_customize->add_section( 'contact_page_main', array(
        'title'    => __( 'Main Content', 'closeclient' ),
        'panel'    => 'contact_page_settings',
    ) );
    $wp_customize->add_setting( 'contact_form_placeholder_title', array( 'default' => 'Scheduling Tool Embed', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'contact_form_placeholder_title', array( 'label' => 'Placeholder Title', 'section' => 'contact_page_main', 'type' => 'text' ) );
    $wp_customize->add_setting( 'contact_form_placeholder_text', array( 'default' => 'In a real implementation, a tool like Calendly would be embedded here to allow for seamless, automated booking.', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( 'contact_form_placeholder_text', array( 'label' => 'Placeholder Text', 'section' => 'contact_page_main', 'type' => 'textarea' ) );

    // Theme Styles
    $wp_customize->add_panel( 'theme_styles', array(
        'title'    => __( 'Theme Styles', 'closeclient' ),
        'priority' => 60,
    ) );

    $wp_customize->add_section( 'colors', array(
        'title'    => __( 'Colors', 'closeclient' ),
        'panel'    => 'theme_styles',
    ) );

    $wp_customize->add_setting( 'primary_color', array( 'default' => '#0A2342', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label'    => __( 'Primary Color', 'closeclient' ),
        'section'  => 'colors',
    ) ) );

    $wp_customize->add_setting( 'secondary_color', array( 'default' => '#2E2E2E', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
        'label'    => __( 'Secondary Color', 'closeclient' ),
        'section'  => 'colors',
    ) ) );

    $wp_customize->add_setting( 'accent_color', array( 'default' => '#D4AF37', 'transport' => 'postMessage' ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
        'label'    => __( 'Accent Color', 'closeclient' ),
        'section'  => 'colors',
    ) ) );


    // Header Settings
    $wp_customize->add_section( 'header_settings', array(
        'title'    => __( 'Header Settings', 'closeclient' ),
        'priority' => 30,
    ) );

    // Header Button Text
    $wp_customize->add_setting( 'header_button_text', array(
        'default'   => 'Book a Free Call',
        'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( 'header_button_text', array(
        'label'    => __( 'Header Button Text', 'closeclient' ),
        'section'  => 'header_settings',
        'type'     => 'text',
    ) );

    // Header Button URL
    $wp_customize->add_setting( 'header_button_url', array(
        'default'   => '#',
        'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( 'header_button_url', array(
        'label'    => __( 'Header Button URL', 'closeclient' ),
        'section'  => 'header_settings',
        'type'     => 'url',
    ) );

    // Footer Settings
    $wp_customize->add_section( 'footer_settings', array(
        'title'    => __( 'Footer Settings', 'closeclient' ),
        'priority' => 40,
    ) );

    // Footer Copyright Text
    $wp_customize->add_setting( 'footer_copyright_text', array(
        'default'   => '&copy; ' . date('Y') . ' CloseClient.com | We Build Websites That Close Clients.',
        'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( 'footer_copyright_text', array(
        'label'    => __( 'Footer Copyright Text', 'closeclient' ),
        'section'  => 'footer_settings',
        'type'     => 'textarea',
    ) );
}
add_action( 'customize_register', 'closeclient_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function closeclient_customize_preview_js() {
    wp_enqueue_script( 'closeclient-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'closeclient_customize_preview_js' );
