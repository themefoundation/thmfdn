<?php
/**
 * Settings
 *
 * This file contains common settings for the THMFDN theme.
 *
 * @package THMFDN
 */

/**
 * Configures default settings.
 *
 * @since			1.0
 */
function thmfdn_defaults() {

	// Sets the default content width.
	if ( ! isset( $content_width ) ) $content_width = 900;

	// Adds automatic feed link support.
	add_theme_support( 'automatic-feed-links' );

	// Adds featured image support.
	add_theme_support( 'post-thumbnails' );

}
add_action( 'init', 'thmfdn_defaults' );

/**
 * Sets the default thumbnail size.
 *
 * @since			1.0
 */
function thumbnail_size() {
	return 'thumbnail';
}
add_filter( 'thmfdn_thumbnail_size', 'thumbnail_size' );

/**
 * Sets the thumbnail size for pages.
 *
 * @since			1.0
 */
function page_thumbnail_size() {
	return 'medium';
}
add_filter( 'thmfdn_page_thumbnail_size', 'page_thumbnail_size' );

/**
 * Sets the thumbnail size for single posts.
 *
 * @since			1.0
 */
function single_thumbnail_size() {
	return 'medium';
}
add_filter( 'thmfdn_single_thumbnail_size', 'single_thumbnail_size' );
