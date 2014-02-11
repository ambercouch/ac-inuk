<?php
/**
 * Enqueue scripts and styles
 */
function ac_inuk_scripts() {
	wp_enqueue_style( 'ac_inuk-style', get_stylesheet_uri() );
        
        wp_enqueue_script( 'ac_inuk', get_template_directory_uri() . '/assets/js/ac-inuk.js', array('jquery'), '20120206', true );

	//wp_enqueue_script( 'ac_inuk-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'ac_inuk-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'ac_inuk-keyboard-image-navigation', get_template_directory_uri() . '/assets/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'ac_inuk_scripts' );