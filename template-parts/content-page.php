<?php
/**
 * Content for page posts
 *
 * @package THMFDN
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php

/*****************************************************************************
 * Action: thmfdn_entry_top
 */

do_action( 'thmfdn_entry_top' );


/*****************************************************************************
 * Action: thmfdn_entry
 *
 * The following functions are attached to the thmfdn_entry action
 * hook.
 */

if ( !function_exists( 'thmfdn_single_comments' ) ) {
	/**
	 * Featured image
	 *
	 * Displays the featured image (formerly called the post thumbnail).
	 */
	function thmfdn_page_featured_image() {
		the_post_thumbnail( apply_filters( 'thmfdn_page_thumbnail_size', apply_filters( 'thmfdn_thumbnail_size', '' ) ) );
		echo "\n";
	}
}

if ( !function_exists( 'thmfdn_single_comments' ) ) {
	/**
	 * Entry title
	 *
	 * Displays the post title.
	 */
	function thmfdn_page_entry_title() {
		echo '<h1 class="' . apply_filters( 'thmfdn_entry_title_class', 'entry-title' ) . '">';
		the_title();
		echo '</h1>' . "\n";
	}
}

if ( !function_exists( 'thmfdn_single_comments' ) ) {
	/**
	 * Entry content
	 *
	 * Displays the post content.
	 */
	function thmfdn_page_content() {
		echo '<div class="' . apply_filters( 'thmfdn_entry_title_class', 'entry-content' ) . '">' . "\n";
		the_content();
		echo '</div><!--.entry-content-->' . "\n";
	}
}

do_action( 'thmfdn_entry' );

/*****************************************************************************
 * Action: thmfdn_entry_bottom
 */

do_action( 'thmfdn_entry_bottom' );

?>

</div>

