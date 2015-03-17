<?php
/**
 * Footer template
 *
 * @package THMFDN
 * @since 1.0
 * @todo Improve footer text. Possibly from Clean Yeti
 */

/*****************************************************************************
 * Action: thmfdn_footer_before
 *
 * The following functions are attached to the thmfdn_footer_before action hook.
 */

/**
 * Main closing
 *
 * Closes the main div and wrapper.
 */
function thmfdn_main_close() {
	echo 	'</div><!--.wrap-->' . "\n";
	echo '</div><!--#main-->' . "\n";
}

do_action( 'thmfdn_footer_before' );

/*****************************************************************************
 * Action: thmfdn_footer
 *
 * The following functions are attached to the thmfdn_footer action hook.
 */

/**
 * Footer opening
 *
 * Opens the footer and wrapper.
 */
function thmfdn_footer_open() {
	echo 	'<footer id="' . apply_filters( 'thmfdn_footer_id', 'footer' ) . '" class="' . apply_filters( 'thmfdn_footer_class', 'site-footer' ) . '">' . "\n";
	echo '<div class="' . apply_filters( 'thmfdn_footer_wrap_class', 'wrap' ) . '">' . "\n";
}

/**
 * Footer Menu
 *
 * Displays the footer menu. However, if there are widgets present in the
 * Inside Footer widget area, that widget area overrides this menu.
 */
function thmfdn_footer_menu() {

	// Is the Inside Footer widget area currently empty?
	if ( ! is_active_sidebar( 'footer-inside' ) ) {
		wp_nav_menu( array( 'theme_location' => 'footer_menu' ) );
	}
}

/**
 * Footer
 *
 * Displays the site footer.
 */
function thmfdn_footer() {
	echo apply_filters( 'site_credits', '<p class="site-credits">&copy;  <a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo('name') . '</a></p>' . "\n" );
}

/**
 * Footer closing
 *
 * Closes the footer and wrapper.
 */
function thmfdn_footer_close() {
	echo 	'</div><!--.wrap-->' . "\n";
	echo '</footer><!--#footer-->' . "\n";
}

do_action( 'thmfdn_footer' );

/*****************************************************************************
 * Action: thmfdn_footer_after
 *
 * The following functions are attached to the thmfdn_footer_after action hook.
 */

do_action( 'thmfdn_footer_after' );

/*****************************************************************************
 * Action: thmfdn_body_bottom
 *
 * The following functions are attached to the thmfdn_body_bottom action hook.
 */

/**
 * Closes the site wrapper
 *
 * This div wraps the entire site, and can be used for handling the
 * site width.
 */
function thmfdn_wrapper_close() {
	echo '</div><!--#page-->';
}

do_action( 'thmfdn_body_bottom' );

wp_footer();

?>

</body>
</html>