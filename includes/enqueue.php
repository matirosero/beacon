<?php

namespace Beacon;

/**
 * Enqueue styles
 */
add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_style(
		'beacon_styles',
		BEACON_URL . '/assets/dist/css/app.css',
		'',
		BEACON_VERSION,
		''
	);

	wp_enqueue_style(
		'google_fonts',
		'https://fonts.googleapis.com/css?family=Roboto+Slab',
		false
	);

	wp_enqueue_style(
		'motionui',
		'https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css',
		false
	);
} );



/**
 * Enqueue scripts
 */
add_action( 'wp_enqueue_scripts', function() {

	// Add Foundation JS to footer
	wp_enqueue_script(
		'foundation-js',
		BEACON_URL . '/assets/dist/js/foundation.js',
		['jquery'],
		'6.2.3',
		true
	);

	// Add our main app js file
	wp_enqueue_script(
		'beacon_appjs',
		BEACON_URL . '/assets/dist/js/app.js',
		['jquery'],
		BEACON_VERSION,
		true
	);

	//FontAwesome
	wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/44d4afc856.js', array(), '4.7.0', false );

	//Animate coaching benefits
	if ( is_page_template( 'page-templates/coaching.php' ) ) {
		wp_enqueue_script( 'animate-benefits', 
			BEACON_URL . '/assets/js/animate-benefits.js', 
			['jquery'], 
			'', 
			true 
		);
	}
	

	// Add comment script on single posts with comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );