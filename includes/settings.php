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
 * @since 1.0
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
 * This doesn't set the exact dimensions of the image. It only sets which of the
 * default WordPress sizes are used. To set the exact dimenstion of the default
 * image sizes, use the Settings > Media page of the WordPress dashboard.
 *
 * @since 1.0
 */
function thumbnail_size() {
	return 'thumbnail';
}
add_filter( 'thmfdn_thumbnail_size', 'thumbnail_size' );

/**
 * Sets the thumbnail size for pages.
 *
 * This doesn't set the exact dimensions of the image. It only sets which of the
 * default WordPress sizes are used. To set the exact dimenstion of the default
 * image sizes, use the Settings > Media page of the WordPress dashboard.
 *
 * @since 1.0
 */
function page_thumbnail_size() {
	return 'medium';
}
add_filter( 'thmfdn_page_thumbnail_size', 'page_thumbnail_size' );

/**
 * Sets the thumbnail size for single posts.
 *
 * This doesn't set the exact dimensions of the image. It only sets which of the
 * default WordPress sizes are used. To set the exact dimenstion of the default
 * image sizes, use the Settings > Media page of the WordPress dashboard.
 *
 * @since 1.0
 */
function single_thumbnail_size() {
	return 'medium';
}
add_filter( 'thmfdn_single_thumbnail_size', 'single_thumbnail_size' );

/**
 * Post meta above content
 *
 * Configures the displayed post meta. This setting is controlled by an array
 * of meta data types and the titles to use with each. Available meta data
 * types include:
 *
 * author - Author name. Uses: the_author()
 * author_website - Author name as link to author's website. Uses: the_author_link()
 * author_posts - Author name as link to author archive. Uses: the_author_posts_link()
 * categories - List of post's categories. Uses: the_category()
 * date - Post date. Uses: the_time( get_option( 'date_format' ) )
 * tags - List of post's tags. Uses: the_tags()
 * 
 * @return array An array of meta/title combinations to display.
 * @since 1.0
 */
function thmfdn_settings_single_meta_top() {
	$meta_top_args = array(
		'date' => ''
	);

	return $meta_top_args;
}
add_filter ( 'thmfdn_single_meta_top', 'thmfdn_settings_single_meta_top' );
add_filter ( 'thmfdn_archive_meta_top', 'thmfdn_settings_single_meta_top' );

/**
 * Post meta below content
 *
 * Configures the displayed post meta. This setting is controlled by an array
 * of meta data types and the titles to use with each. Available meta data
 * types include:
 *
 * author - Author name. Uses: the_author()
 * author_website - Author name as link to author's website. Uses: the_author_link()
 * author_posts - Author name as link to author archive. Uses: the_author_posts_link()
 * categories - List of post's categories. Uses: the_category()
 * date - Post date. Uses: the_time( get_option( 'date_format' ) )
 * tags - List of post's tags. Uses: the_tags()
 * 
 * @return array An array of meta/title combinations to display.
 * @since 1.0
 */
function thmfdn_settings_single_meta_bottom() {
	$meta_bottom_args = array(
		'tags' => ''
	);
	
	return $meta_bottom_args;
}
add_filter ( 'thmfdn_single_meta_bottom', 'thmfdn_settings_single_meta_bottom' );
add_filter ( 'thmfdn_archive_meta_bottom', 'thmfdn_settings_single_meta_bottom' );

/**
 * Removes the post title from single posts
 * 
 * @since 1.0
 */
function thmfdn_remove_single_title(){
    remove_action( 'thmfdn_entry', 'thmfdn_single_title' );
}
// add_action( 'thmfdn_entry', 'thmfdn_remove_single_title', 9 ); // Single posts

/**
 * Removes the post titles from archive pages
 * 
 * @since 1.0
 */
function thmfdn_remove_archive_title(){
    remove_action( 'thmfdn_entry', 'thmfdn_archive_title' );
}
// add_action( 'thmfdn_entry', 'thmfdn_remove_archive_title', 9 ); // Archive posts

/**
 * Removes the thumbnail images from single posts
 * 
 * @since 1.0
 */
function thmfdn_remove_single_featured_image(){
    remove_action( 'thmfdn_entry', 'thmfdn_single_featured_image' );
}
// add_action( 'thmfdn_entry', 'thmfdn_remove_single_featured_image', 9 ); // Single posts

/**
 * Removes the thumbnail images from archive pages
 * 
 * @since 1.0
 */
function thmfdn_remove_archive_featured_image(){
    remove_action( 'thmfdn_entry', 'thmfdn_archive_featured_image' );
}
// add_action( 'thmfdn_entry', 'thmfdn_remove_archive_featured_image', 9 ); // Archive posts

/**
 * Removes comments from single posts
 * 
 * @since 1.0
 */
function thmfdn_remove_single_comments(){
    remove_action( 'thmfdn_entry', 'thmfdn_single_comments' );
}
// add_action( 'thmfdn_entry', 'thmfdn_remove_single_comments', 9 ); // Single posts
