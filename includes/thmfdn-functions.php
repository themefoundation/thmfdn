<?php
/**
 * Functions
 *
 * This file contains functions to extend the functionality of the
 * THMFDN theme
 *
 * @package THMFDN
 */

function thmfdn_remove_index_content(){
	remove_action( 'thmfdn_entry', 'thmfdn_index_content' );
}
// add_action( 'thmfdn_entry', 'thmfdn_remove_index_content', 9 );

// function thmfdn_index_content() {}


/**
 * Loads the default scripts and stylesheets
 *
 * @since 1.0
 */
function thmfdn_enqueue() {

	// Loads the default stylesheet.
	wp_enqueue_style( 'thmfdn_stylesheet', get_stylesheet_uri() );

	// Loads the comment script if a single post is being displayed.
	if ( is_singular() && comments_open() ) {
		wp_enqueue_script( 'thmfdn_comment_reply', 'comment-reply' );
	}

}
add_filter( 'wp_enqueue_scripts', 'thmfdn_enqueue' );


/**
 * Ensures that the title tag will never be empty
 *
 * If for some reason the title tag is empty (this often happens on the home
 * page, if it is set to display the latest posts), it uses the site name and
 * description as the title.
 *
 * @return string Content to use in the title tag.
 * @since 1.0
 */
function thmfdn_expand_title( $title ) {
	if( empty( $title ) ) {
		return get_bloginfo('name') . ' - ' . get_bloginfo( 'description' );
	} else {
		return $title;
	}
}
add_filter( 'wp_title', 'thmfdn_expand_title' );


