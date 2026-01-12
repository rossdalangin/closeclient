( function( $ ) {
	// Site Title and Description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.logo' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			// Update the site description if it exists.
		} );
	} );

	// Header Button Text.
	wp.customize( 'header_button_text', function( value ) {
		value.bind( function( to ) {
			$( '.header .btn-primary' ).text( to );
		} );
	} );

    // Header Button URL.
    wp.customize( 'header_button_url', function( value ) {
        value.bind( function( to ) {
            $( '.header .btn-primary' ).attr( 'href', to );
        } );
    } );

    // Hero Section
    wp.customize( 'hero_headline', function( value ) { value.bind( function( to ) { $( '.hero h1' ).html( to ); } ); } );
    wp.customize( 'hero_subheadline', function( value ) { value.bind( function( to ) { $( '.hero .sub-headline' ).html( to ); } ); } );
    wp.customize( 'hero_button_text', function( value ) { value.bind( function( to ) { $( '.hero .btn-primary' ).text( to ); } ); } );
    wp.customize( 'hero_button_url', function( value ) { value.bind( function( to ) { $( '.hero .btn-primary' ).attr( 'href', to ); } ); } );
    wp.customize( 'hero_small_text', function( value ) { value.bind( function( to ) { $( '.hero p:last-of-type' ).html( to ); } ); } );

    // Problem Section
    wp.customize( 'problem_title', function( value ) { value.bind( function( to ) { $( '#problem h2' ).html( to ); } ); } );
    wp.customize( 'problem_paragraph', function( value ) { value.bind( function( to ) { $( '#problem p' ).html( to ); } ); } );
    wp.customize( 'problem_list_item_1', function( value ) { value.bind( function( to ) { $( '#problem ul li:nth-child(1)' ).html( to ); } ); } );
    wp.customize( 'problem_list_item_2', function( value ) { value.bind( function( to ) { $( '#problem ul li:nth-child(2)' ).html( to ); } ); } );
    wp.customize( 'problem_list_item_3', function( value ) { value.bind( function( to ) { $( '#problem ul li:nth-child(3)' ).html( to ); } ); } );
    wp.customize( 'problem_list_item_4', function( value ) { value.bind( function( to ) { $( '#problem ul li:nth-child(4)' ).html( to ); } ); } );

    // Solution Section
    wp.customize( 'solution_title', function( value ) { value.bind( function( to ) { $( '#solution h2' ).html( to ); } ); } );
    wp.customize( 'solution_paragraph', function( value ) { value.bind( function( to ) { $( '#solution p' ).html( to ); } ); } );

    // Benefits Section
    wp.customize( 'benefits_title', function( value ) { value.bind( function( to ) { $( '#benefits h2' ).html( to ); } ); } );
    wp.customize( 'benefits_card_1_title', function( value ) { value.bind( function( to ) { $( '#benefits .card:nth-child(1) h3' ).html( to ); } ); } );
    wp.customize( 'benefits_card_1_text', function( value ) { value.bind( function( to ) { $( '#benefits .card:nth-child(1) p' ).html( to ); } ); } );
    wp.customize( 'benefits_card_2_title', function( value ) { value.bind( function( to ) { $( '#benefits .card:nth-child(2) h3' ).html( to ); } ); } );
    wp.customize( 'benefits_card_2_text', function( value ) { value.bind( function( to ) { $( '#benefits .card:nth-child(2) p' ).html( to ); } ); } );
    wp.customize( 'benefits_card_3_title', function( value ) { value.bind( function( to ) { $( '#benefits .card:nth-child(3) h3' ).html( to ); } ); } );
    wp.customize( 'benefits_card_3_text', function( value ) { value.bind( function( to ) { $( '#benefits .card:nth-child(3) p' ).html( to ); } ); } );

    // CTA Section
    wp.customize( 'cta_title', function( value ) { value.bind( function( to ) { $( '#cta h2' ).html( to ); } ); } );
    wp.customize( 'cta_subheadline', function( value ) { value.bind( function( to ) { $( '#cta .sub-headline' ).html( to ); } ); } );
    wp.customize( 'cta_button_text', function( value ) { value.bind( function( to ) { $( '#cta .btn-primary' ).text( to ); } ); } );
    wp.customize( 'cta_button_url', function( value ) { value.bind( function( to ) { $( '#cta .btn-primary' ).attr( 'href', to ); } ); } );

    // About Page
    wp.customize( 'about_header_title', function( value ) { value.bind( function( to ) { $( '.template-about .page-header h1' ).html( to ); } ); } );
    wp.customize( 'about_main_image', function( value ) { value.bind( function( to ) { $( '.about-grid img' ).attr( 'src', to ); } ); } );
    wp.customize( 'about_main_title', function( value ) { value.bind( function( to ) { $( '.about-grid h2' ).html( to ); } ); } );
    wp.customize( 'about_main_text', function( value ) { value.bind( function( to ) { $( '.about-grid div > p' ).html( to.replace(/\n/g, '<br>') ); } ); } );
    wp.customize( 'about_mission_title', function( value ) { value.bind( function( to ) { $( '.about-mission h3' ).html( to ); } ); } );
    wp.customize( 'about_mission_text', function( value ) { value.bind( function( to ) { $( '.about-mission p' ).html( to ); } ); } );

    // Services Page
    wp.customize( 'services_header_title', function( value ) { value.bind( function( to ) { $( '.template-services .page-header h1' ).html( to ); } ); } );
    wp.customize( 'services_header_subheadline', function( value ) { value.bind( function( to ) { $( '.template-services .page-header .sub-headline' ).html( to ); } ); } );
    wp.customize( 'services_main_title', function( value ) { value.bind( function( to ) { $( '.template-services .benefits-title h2' ).html( to ); } ); } );
    wp.customize( 'services_card_1_title', function( value ) { value.bind( function( to ) { $( '.services-grid .card:nth-child(1) h3' ).html( to ); } ); } );
    wp.customize( 'services_card_1_text', function( value ) { value.bind( function( to ) { $( '.services-grid .card:nth-child(1) p' ).html( to ); } ); } );
    wp.customize( 'services_card_2_title', function( value ) { value.bind( function( to ) { $( '.services-grid .card:nth-child(2) h3' ).html( to ); } ); } );
    wp.customize( 'services_card_2_text', function( value ) { value.bind( function( to ) { $( '.services-grid .card:nth-child(2) p' ).html( to ); } ); } );
    wp.customize( 'services_card_3_title', function( value ) { value.bind( function( to ) { $( '.services-grid .card:nth-child(3) h3' ).html( to ); } ); } );
    wp.customize( 'services_card_3_text', function( value ) { value.bind( function( to ) { $( '.services-grid .card:nth-child(3) p' ).html( to ); } ); } );
    wp.customize( 'services_card_4_title', function( value ) { value.bind( function( to ) { $( '.services-grid .card:nth-child(4) h3' ).html( to ); } ); } );
    wp.customize( 'services_card_4_text', function( value ) { value.bind( function( to ) { $( '.services-grid .card:nth-child(4) p' ).html( to ); } ); } );

    // Case Studies Page
    wp.customize( 'case_studies_header_title', function( value ) { value.bind( function( to ) { $( '.template-case-studies .page-header h1' ).html( to ); } ); } );
    wp.customize( 'case_studies_header_subheadline', function( value ) { value.bind( function( to ) { $( '.template-case-studies .page-header .sub-headline' ).html( to ); } ); } );
    wp.customize( 'case_study_1_title', function( value ) { value.bind( function( to ) { $( '.case-studies-grid .card:nth-child(1) h3' ).html( to ); } ); } );
    wp.customize( 'case_study_1_problem', function( value ) { value.bind( function( to ) { $( '.case-studies-grid .card:nth-child(1) .case-study-problem' ).html( to ); } ); } );
    wp.customize( 'case_study_1_solution', function( value ) { value.bind( function( to ) { $( '.case-studies-grid .card:nth-child(1) .case-study-solution' ).html( to ); } ); } );
    wp.customize( 'case_study_1_result', function( value ) { value.bind( function( to ) { $( '.case-studies-grid .card:nth-child(1) .case-study-result' ).html( to ); } ); } );
    wp.customize( 'case_study_2_title', function( value ) { value.bind( function( to ) { $( '.case-studies-grid .card:nth-child(2) h3' ).html( to ); } ); } );
    wp.customize( 'case_study_2_problem', function( value ) { value.bind( function( to ) { $( '.case-studies-grid .card:nth-child(2) .case-study-problem' ).html( to ); } ); } );
    wp.customize( 'case_study_2_solution', function( value ) { value.bind( function( to ) { $( '.case-studies-grid .card:nth-child(2) .case-study-solution' ).html( to ); } ); } );
    wp.customize( 'case_study_2_result', function( value ) { value.bind( function( to ) { $( '.case-studies-grid .card:nth-child(2) .case-study-result' ).html( to ); } ); } );

    // Contact Page
    wp.customize( 'contact_header_title', function( value ) { value.bind( function( to ) { $( '.template-contact .page-header h1' ).html( to ); } ); } );
    wp.customize( 'contact_header_subheadline', function( value ) { value.bind( function( to ) { $( '.template-contact .page-header .sub-headline' ).html( to ); } ); } );
    wp.customize( 'contact_form_placeholder_title', function( value ) { value.bind( function( to ) { $( '.form-placeholder h3' ).html( to ); } ); } );
    wp.customize( 'contact_form_placeholder_text', function( value ) { value.bind( function( to ) { $( '.form-placeholder p' ).html( to ); } ); } );

	// Footer Copyright Text.
	wp.customize( 'footer_copyright_text', function( value ) {
		value.bind( function( to ) {
			$( '.footer p' ).html( to );
		} );
	} );

} )( jQuery );
