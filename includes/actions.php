<?php
/**
 * Actions
 *
 * @package THMFDN
 */

/**
 * Add Actions
 *
 * @since 1.0
 */
function thmfdn_action_registration() {
	global $template;
	$template_file = basename($template);


	// Header actions.
	add_action( 'thmfdn_body_top', 'thmfdn_wrapper_open' );
	add_action( 'thmfdn_body_top', 'thmfdn_skip_link' );

	add_action( 'thmfdn_header_before', 'thmfdn_before_header_widgets' );
	
	add_action( 'thmfdn_header', 'thmfdn_header_open', 1 );
	add_action( 'thmfdn_header', 'thmfdn_header_branding', 20 );
	add_action( 'thmfdn_header', 'thmfdn_header_menu', 30 );
	add_action( 'thmfdn_header', 'thmfdn_header_widgets', 40 );
	add_action( 'thmfdn_header', 'thmfdn_header_close', 100 );

	add_action( 'thmfdn_header_after', 'thmfdn_after_header_widgets' );
	add_action( 'thmfdn_header_after', 'thmfdn_main_open' );

	// page.php actions.
	if ( 'page.php' == $template_file ) {

	}

	// single.php actions.
	if ( 'single.php' == $template_file ) {
		add_action( 'thmfdn_content', 'thmfdn_content_open' );
		add_action( 'thmfdn_content', 'thmfdn_loop' );
			add_action( 'thmfdn_entry', 'thmfdn_single_featured_image' );
			add_action( 'thmfdn_entry', 'thmfdn_single_entry_title' );
			add_action( 'thmfdn_entry', 'thmfdn_single_meta' );
			add_action( 'thmfdn_entry', 'thmfdn_single_content' );
			add_action( 'thmfdn_entry', 'thmfdn_single_comments' );
		add_action( 'thmfdn_content', 'thmfdn_content_close' );
	}
	

	// Footer actions.
	add_action( 'thmfdn_footer_before', 'thmfdn_main_close' );
	add_action( 'thmfdn_footer_before', 'thmfdn_before_footer_widgets' );

	add_action( 'thmfdn_footer', 'thmfdn_footer_open', 1 );
	add_action( 'thmfdn_footer', 'thmfdn_footer_menu', 20 );
	add_action( 'thmfdn_footer', 'thmfdn_footer_widgets', 30 );
	add_action( 'thmfdn_footer', 'thmfdn_footer', 50 );
	add_action( 'thmfdn_footer', 'thmfdn_footer_close', 100 );

	add_action( 'thmfdn_footer_after', 'thmfdn_after_footer_widgets' );

	add_action( 'thmfdn_body_bottom', 'thmfdn_wrapper_close' );
}
add_action( 'get_header', 'thmfdn_action_registration', 100 );

// Sidebar actions.
// add_action( 'widgets_init', 'thmfdn_register_sidebar_one' );
// add_action( 'widgets_init', 'thmfdn_register_sidebar_two' );

/**
 * Remove widget areas
 *
 * Uncommenting any of the lines below will remove that widget area from
 * the theme.
 *
 * @since 1.0
 */
function thmfnd_remove_widget_areas(){
	// unregister_sidebar( 'sidebar-1' );
	// unregister_sidebar( 'sidebar-2' );
	// unregister_sidebar( 'header-before' );
	// unregister_sidebar( 'header-inside' );
	// unregister_sidebar( 'header-after' );
	// unregister_sidebar( 'footer-before' );
	// unregister_sidebar( 'footer-inside' );
	// unregister_sidebar( 'footer-after' );
}
add_action( 'widgets_init', 'thmfnd_remove_widget_areas', 11 );