<?php
/**
 *  Single post template
 *
 * @package THMFDN
 * @since 1.0
 */

/**
 *****************************************************************************
 * Add actions
 *****************************************************************************
 *
 * This section adds actions to their respective action hooks.
 *
 * @see http://codex.wordpress.org/Function_Reference/add_action
 * @since 1.0
 */

add_action( 'thmfdn_content_top', 'thmfdn_content_open' );

add_action( 'thmfdn_entry_top', 'thmfdn_post_open' );

add_action( 'thmfdn_entry', 'thmfdn_single_featured_image' );
add_action( 'thmfdn_entry', 'thmfdn_single_entry_title' );
add_action( 'thmfdn_entry', 'thmfdn_single_meta' );
add_action( 'thmfdn_entry', 'thmfdn_single_content' );
add_action( 'thmfdn_entry', 'thmfdn_single_comments' );

add_action( 'thmfdn_entry_bottom', 'thmfdn_post_close' );

add_action( 'thmfdn_content_bottom', 'thmfdn_content_close' );


/**
 *****************************************************************************
 * Define actions
 *****************************************************************************
 *
 * This section defines the actions associated with each hook.
 *
 * @since 1.0
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
	 *
	 * @since 1.0
	 */
	function thmfdn_content_open() {
		locate_template( 'template-parts/content-open.php', true );
	}
}

if ( !function_exists( 'thmfdn_post_open' ) ) {
	/**
	 * Open #post div
	 *
	 * @since 1.0
	 */
	function thmfdn_post_open() {
		?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
	}
}


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

if ( !function_exists( 'thmfdn_post_close' ) ) {
	/**
	 * Close #post div
	 *
	 * @since 1.0
	 */
	function thmfdn_post_close() {
		?>
			</div><!-- #post-number -->
		<?php
	}
}

if ( !function_exists( 'thmfdn_content_close' ) ) {
	/**
	 * Content closing
	 *
	 * Closes the #content div.
	 *
	 * This function is repeated in the page.php and single.php files. This
	 * duplication is the unfortunate side effect of trying to keep everything
	 * in its natural place.
	 *
	 * @since 1.0
	 */
	function thmfdn_content_close() {
		locate_template( 'template-parts/content-close.php', true );
	}
}

/**
 *****************************************************************************
 * Do actions
 *****************************************************************************
 *
 * This section runs the actions associated with each hook.
 *
 * @see http://codex.wordpress.org/Function_Reference/do_action
 * @since 1.0
 */

// Use this hook to add and remove actions.
do_action( 'thmfdn_template_setup' );

get_header();

do_action( 'thmfdn_content_before' );
do_action( 'thmfdn_content_top' );

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		do_action( 'thmfdn_entry_before' );
		do_action( 'thmfdn_entry_top' );
		do_action( 'thmfdn_entry' );
		do_action( 'thmfdn_entry_bottom' );
		do_action( 'thmfdn_entry_after' );
	}
	get_template_part( 'template-parts/nav', 'single' );
} else {
	get_template_part( 'template-parts/404' );
}

do_action( 'thmfdn_content_bottom' );
do_action( 'thmfdn_content_after' );

get_sidebar();
get_footer();
