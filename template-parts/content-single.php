<?php
/**
 * Content for single posts
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

if ( !function_exists( 'thmfdn_single_featured_image' ) ) {
	/**
	 * Featured image
	 *
	 * Displays the featured image (formerly called the post thumbnail).
	 */
	function thmfdn_single_featured_image() {
		the_post_thumbnail( apply_filters( 'thmfdn_single_thumbnail_size', apply_filters( 'thmfdn_thumbnail_size', '' ) ) );
		echo "\n";
	}
}

if ( !function_exists( 'thmfdn_single_entry_title' ) ) {
	/**
	 * Entry title
	 *
	 * Displays the post title.
	 */
	function thmfdn_single_entry_title() {
		echo '<h1 class="' . apply_filters( 'thmfdn_entry_title_class', 'entry-title' ) . '">';
		the_title();
		echo '</h1>' . "\n";
	}
}

if ( !function_exists( 'thmfdn_single_meta' ) ) {
	/**
	 * Entry meta
	 *
	 * Displays the post meta data.
	 */
	function thmfdn_single_meta() {
		echo '<div class="' . apply_filters( 'thmfdn_entry_meta_class', 'entry-meta' ) . '">';
		get_template_part( 'template-parts/entry', 'meta' );
		echo '</div>' . "\n";
	}
}

if ( !function_exists( 'thmfdn_single_content' ) ) {
	/**
	 * Entry content
	 *
	 * Displays the post content.
	 */
	function thmfdn_single_content() {
		echo '<div class="' . apply_filters( 'thmfdn_entry_title_class', 'entry-content' ) . '">' . "\n";
		the_content();
		echo '</div><!--.entry-content-->' . "\n";
	}
}

if ( !function_exists( 'thmfdn_single_comments' ) ) {
	/**
	 * Comments
	 *
	 * Displays the post comments.
	 */
	function thmfdn_single_comments() {
		comments_template();
	}
}

do_action( 'thmfdn_entry' );

/*****************************************************************************
 * Action: thmfdn_entry_bottom
 */

do_action( 'thmfdn_entry_bottom' );

?>

</div>
