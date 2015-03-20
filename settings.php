<?php
/**
 * Settings
 *
 * This file contains the settings that determine the theme configuration.
 *
 * @package THMFDN
 * @since 1.0
 */


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

// function thmfdn_single_featured_image() {
// 	return false;
// }


// Remove titles
// add_action( 'thmfdn_entry', 'thmfdn_remove_single_title', 9 ); // Single posts
// add_action( 'thmfdn_entry', 'thmfdn_remove_archive_title', 9 ); // Archive posts

// Remove featured images
// add_action( 'thmfdn_entry', 'thmfdn_remove_single_featured_image', 9 ); // Single posts
// add_action( 'thmfdn_entry', 'thmfdn_remove_archive_featured_image', 9 ); // Archive posts

// Remove comment list/form
// add_action( 'thmfdn_entry', 'thmfdn_remove_single_comments', 9 ); // Single posts

function thmfdn_remove_single_title(){
    remove_action( 'thmfdn_entry', 'thmfdn_single_title' );
}

function thmfdn_remove_archive_title(){
    remove_action( 'thmfdn_entry', 'thmfdn_archive_title' );
}

function thmfdn_remove_single_featured_image(){
    remove_action( 'thmfdn_entry', 'thmfdn_single_featured_image' );
}

function thmfdn_remove_archive_featured_image(){
    remove_action( 'thmfdn_entry', 'thmfdn_archive_featured_image' );
}

function thmfdn_remove_single_comments(){
    remove_action( 'thmfdn_entry', 'thmfdn_single_comments' );
}
