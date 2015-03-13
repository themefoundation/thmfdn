<?php
/**
 *  Sidebar template
 *
 * @package Solum
 * @since 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) {
	do_action( 'thmfdn_sidebar_before' );

	echo '<div class="' . apply_filters( 'thmfdn_sidebar-1', 'secondary sidebar' ) . '" role="complementary">';
	do_action( 'thmfdn_sidebar_top' );
	dynamic_sidebar( 'sidebar-1' );
	do_action( 'thmfdn_sidebar_bottom' );
	echo '</div><!--.secondary-->';
	
	do_action( 'thmfdn_sidebar_after' );
}

if ( is_active_sidebar( 'sidebar-2' ) ) {
	do_action( 'thmfdn_sidebar_before' );

	echo '<div class="' . apply_filters( 'thmfdn_sidebar-2', 'tertiary sidebar' ) . '" role="complementary">';
	do_action( 'thmfdn_sidebar_top' );
	dynamic_sidebar( 'sidebar-2' );
	do_action( 'thmfdn_sidebar_bottom' );
	echo '</div><!--.tertiary-->';
	
	do_action( 'thmfdn_sidebar_after' );
}
