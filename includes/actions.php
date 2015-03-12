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

	// header.php actions
	add_action( 'thmfdn_body_top', 'thmfdn_wrapper_open' );
	add_action( 'thmfdn_body_top', 'thmfdn_skip_link' );

	add_action( 'thmfdn_header', 'thmfdn_header_open', 1 );
	add_action( 'thmfdn_header', 'thmfdn_header_branding', 50 );
	add_action( 'thmfdn_header', 'thmfdn_header_close', 100 );

	add_action( 'thmfdn_header_after', 'thmfdn_main_open' );

	//footer.php actions
	add_action( 'thmfdn_footer_before', 'thmfdn_main_close' );

	add_action( 'thmfdn_footer', 'thmfdn_footer_open', 1 );
	add_action( 'thmfdn_footer', 'thmfdn_footer', 50 );
	add_action( 'thmfdn_footer', 'thmfdn_footer_close', 100 );

	add_action( 'thmfdn_body_close', 'thmfdn_wrapper_close' );
}
add_action( 'init', 'thmfdn_action_registration', 1 );
