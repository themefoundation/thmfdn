<?php
/**
 *  Single post template
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

/**
 * Index Loop
 */
function thmfdn_loop() {
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content', 'single' );
		}
	} else {
		get_template_part( 'template-parts/404' );
	}

	get_template_part( 'template-parts/nav', 'single' );
}

do_action( 'thmfdn_content' );

/*****************************************************************************
 * Action: thmfdn_content_after
 *
 * The following functions are attached to the thmfdn_content_after action
 * hook.
 */

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

do_action( 'thmfdn_content_after' );

// get_sidebar();
get_footer();
