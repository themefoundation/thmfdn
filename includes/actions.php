<?php
/**
 * Actions
 *
 * @package THMFDN
 */

/**
 * Add Actions
 */
function thmfdn_action_registration() {
	global $template;
	$template_file = basename($template);

	// header actions
	add_action( 'thmfdn_body_top', 'thmfdn_wrapper_open' );
	add_action( 'thmfdn_body_top', 'thmfdn_skip_link' );

	add_action( 'thmfdn_header', 'thmfdn_header_open', 1 );
	add_action( 'thmfdn_header', 'thmfdn_header_branding', 50 );
	add_action( 'thmfdn_header', 'thmfdn_header_close', 100 );

	add_action( 'thmfdn_header_after', 'thmfdn_main_open' );

	// index.php actions
	if ( 'index.php' == $template_file  ) {
		add_action( 'thmfdn_content', 'thmfdn_content_open' );
		add_action( 'thmfdn_content', 'thmfdn_loop' );
		add_action( 'thmfdn_content', 'thmfdn_content_close' );
	}

	// page.php actions
	if ( 'page.php' == $template_file ) {
		add_action( 'thmfdn_content', 'thmfdn_content_open' );
		add_action( 'thmfdn_content', 'thmfdn_loop' );
		add_action( 'thmfdn_content', 'thmfdn_content_close' );
	}

	// single.php actions
	if ( 'single.php' == $template_file ) {
		add_action( 'thmfdn_content', 'thmfdn_content_open' );
		add_action( 'thmfdn_content', 'thmfdn_loop' );
			add_action( 'thmfdn_entry', 'thmfdn_single_featured_image' );
			add_action( 'thmfdn_entry', 'thmfdn_single_entry_title' );
			add_action( 'thmfdn_entry', 'thmfdn_single_meta' );
			add_action( 'thmfdn_entry', 'thmfdn_single_content' );
			add_action( 'thmfdn_entry', 'thmfdn_single_comments' );
		add_action( 'thmfdn_content', 'thmfdn_content_close' );
	}
	

	//footer actions
	add_action( 'thmfdn_footer_before', 'thmfdn_main_close' );

	add_action( 'thmfdn_footer', 'thmfdn_footer_open', 1 );
	add_action( 'thmfdn_footer', 'thmfdn_footer', 50 );
	add_action( 'thmfdn_footer', 'thmfdn_footer_close', 100 );

	add_action( 'thmfdn_body_bottom', 'thmfdn_wrapper_close' );
}
add_action( 'get_header', 'thmfdn_action_registration', 100 );
