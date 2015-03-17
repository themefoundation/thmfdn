<?php

/**
 * Admin
 *
 * Functions for the WordPress admin area.
 *
 * @package THMFDN
 */

/**
 * Admin extensions/features
 *
 * @since			1.0
 */

function thmfdn_admin() {

	// Loads stylesheet for the post editor.
	add_editor_style( 'css/editor-style.css' );

}
add_action( 'admin_init', 'thmfdn_admin' );

