<?php

/**
 * Enqueue scripts and styles
 */
function ac_inuk_scripts() {
	wp_enqueue_style( 'ac inuk-style', get_stylesheet_uri() );
        
        wp_enqueue_script( 'ac inuk-ac-inuk', get_template_directory_uri() . '/assets/js/ac-inuk.js', array('jquery'), '20130501', true );
        
        wp_enqueue_script( 'ac inuk-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '20130501', true );

	//wp_enqueue_script( 'ac inuk-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	//wp_enqueue_script( 'ac inuk-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'ac inuk-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'ac_inuk_scripts' );

