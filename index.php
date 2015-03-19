<?php
/**
 *  Index template
 *
 * @package THMFDN
 * @since 1.0
 */

get_header();

/*****************************************************************************
 * Action: thmfdn_content_before
 *
 * The following functions are attached to the thmfdn_content_before action
 * hook.
 */

do_action( 'thmfdn_content_before' );

/*****************************************************************************
 * Action: thmfdn_content
 *
 * The following functions are attached to the thmfdn_content action hook.
 */

/*****************************************************************************
 * Action: thmfdn_content
 *
 * The following functions are attached to the thmfdn_content action hook.
 */

if ( !function_exists( 'thmfdn_content_open' ) ) {
	/**
	 * Primary opening
	 *
	 * Opens the #primary div column and the #content div. This theme supports
	 * up to three columns, #primary, #secondary, and #tertiary.
	 *
	 * This function is repeated in the base template files (index.php, page.php,
	 * and single.php files. This duplication is the unfortunate side effect of
	 * trying to keep everything in its natural place.
	 */
	function thmfdn_content_open() {
		locate_template( 'template-parts/content-open.php', true );
	}
}
add_action( 'thmfdn_content', 'thmfdn_content_open' );
		

if ( !function_exists( 'thmfdn_loop' ) ) {
	/**
	 * Index Loop
	 */
	function thmfdn_loop() {
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', 'index' );
			}
		} else {
			get_template_part( 'template-parts/404' );
		}

		get_template_part( 'template-parts/nav', 'archive' );
	}
}
add_action( 'thmfdn_content', 'thmfdn_loop' );

if ( !function_exists( 'thmfdn_content_close' ) ) {
	/**
	 * Content closing
	 *
	 * Closes the #content div.
	 *
	 * This function is repeated in the page.php and single.php files. This
	 * duplication is the unfortunate side effect of trying to keep everything
	 * in its natural place.
	 */
	function thmfdn_content_close() {
		locate_template( 'template-parts/content-close.php', true );
	}
}
add_action( 'thmfdn_content', 'thmfdn_content_close' );

do_action( 'thmfdn_content' );

/*****************************************************************************
 * Action: thmfdn_content_after
 *
 * The following functions are attached to the thmfdn_content_after action
 * hook.
 */

do_action( 'thmfdn_content_after' );

get_sidebar();
get_footer();
