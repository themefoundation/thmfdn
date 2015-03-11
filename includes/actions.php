<?php
/**
 * Actions
 *
 * @package THMFDN
 * @subpackage Actions
 */

/**
 * Add Actions
 */
function thmfdn_action_registration() {

	// header.php actions
	add_action( 'thmfdn_body_top', 'thmfdn_wrapper_open' );
	add_action( 'thmfdn_body_top', 'thmfdn_skip_link' );

	add_action( 'thmfdn_header', 'thmfdn_header_open' );
	add_action( 'thmfdn_header', 'thmfdn_header_branding' );
	add_action( 'thmfdn_header', 'thmfdn_header_close' );

	add_action( 'thmfdn_header_after', 'thmfdn_main_open' );
}
add_action( 'init', 'thmfdn_action_registration', 1 );
