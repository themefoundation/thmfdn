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

	// Header actions.
	add_action( 'thmfdn_body_top', 'thmfdn_wrapper_open' );
	add_action( 'thmfdn_body_top', 'thmfdn_skip_link' );

	add_action( 'thmfdn_header', 'thmfdn_header_open', 1 );
	add_action( 'thmfdn_header', 'thmfdn_header_branding', 50 );
	add_action( 'thmfdn_header', 'thmfdn_header_close', 100 );

	add_action( 'thmfdn_header_after', 'thmfdn_main_open' );

	// Major template file actions.
	if ( in_array( $template_file, array( 'index.php', 'page.php', 'single.php' ) ) ) {
		add_action( 'thmfdn_content', 'thmfdn_content_open' );
		add_action( 'thmfdn_content', 'thmfdn_loop' );
		add_action( 'thmfdn_content', 'thmfdn_content_close' );
	}

	// Footer actions.
	add_action( 'thmfdn_footer_before', 'thmfdn_main_close' );

	add_action( 'thmfdn_footer', 'thmfdn_footer_open', 1 );
	add_action( 'thmfdn_footer', 'thmfdn_footer', 50 );
	add_action( 'thmfdn_footer', 'thmfdn_footer_close', 100 );

	add_action( 'thmfdn_body_bottom', 'thmfdn_wrapper_close' );
}
add_action( 'get_header', 'thmfdn_action_registration', 1 );
