<?php
/**
 * Header template
 *
 * @package THMFDN
 * @since 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php do_action( 'thmfdn_head_top' ); ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="<?php apply_filters( 'thmfdn_viewport', 'width=device-width' ); ?>" />
	<title><?php wp_title(); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php do_action( 'thmfdn_head_bottom' ); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php

/*****************************************************************************
 * Action: thmfdn_body_top
 *
 * The following functions are attached to the thmfdn_body_top action hook.
 */

/**
 * Opens the site wrapper
 *
 * This div wraps the entire site, and can be used for handling the
 * site width.
 */
function thmfdn_wrapper_open() {
	echo '<div id="' . apply_filters( 'thmfdn_wrapper_open_id', 'page' ) . '" class="' . apply_filters( 'thmfdn_wrapper_open_class', '' ) . '">' . "\n\n";
}

/**
 * Skip link
 *
 * The "Skip to content" link allows people using screen readers to jump
 * straight to the page content without being forced to listen to the
 * header and menu text on every page load.
 */
function thmfdn_skip_link() {
	echo '<a class="' . apply_filters( 'thmfdn_skip_link_class', 'skip-link screen-reader-text' ) . '" href="' . apply_filters( 'thmfdn_skip_link_href', '#content' ) . '">' . __( 'Skip to content', 'thmfdn_textdomain' ) . '</a>' . "\n\n";
}

do_action( 'thmfdn_body_top' );

/*****************************************************************************
 * Action: thmfdn_header_before
 *
 * The following functions are attached to the thmfdn_header_before action hook.
 */

/**
 * Displays the Before Header widget area
 *
 * @since 1.0
 */
function thmfdn_before_header_widgets() {

	// Does the Before Header widget area contain any widgets?
	if ( is_active_sidebar( 'header-before' ) ) {

		// Filters for class names.
		$thmfdn_header_before_class = apply_filters( 'thmfdn-header-before-class', 'site-header header-before' );
		$thmfdn_header_before_wrap_class = apply_filters( 'thmfdn-header-before-wrap-class', 'wrap' );
		?>

			<div class="<?php echo $thmfdn_header_before_class; ?>">
				<div class="<?php echo $thmfdn_header_before_wrap_class; ?>">
					<?php dynamic_sidebar( 'header-before' ); ?>
				</div><!--.wrap-->
			</div><!--.header-before-->

		<?php
	}
}

do_action( 'thmfdn_header_before' );

/*****************************************************************************
 * Action: thmfdn_header
 *
 * The following functions are attached to the thmfdn_header action hook.
 */

/**
 * Header opening
 *
 * Opens the header div and wrapper.
 */
function thmfdn_header_open() {
	echo '<header id="' . apply_filters( 'thmfdn_header_id', 'header' ) . '" class="' . apply_filters( 'thmfdn_header_class', 'site-header' ) . '">' . "\n";
	echo 	'<div class="' . apply_filters( 'thmfdn_header_wrap_class', 'wrap' ) . '">' . "\n";
}

/**
 * Branding
 *
 * Displays branding, including site title and site description.
 */
function thmfdn_header_branding() {
	echo '<div id="' . apply_filters( 'thmfdn_branding_id', 'branding' ) . '" class="' . apply_filters( 'thmfdn_branding_class', '' ) . '" role="banner">' . "\n";
	echo 	apply_filters( 'thmfdn_site_name', '<p class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo('name') . '</a></p>' ) . "\n";
	echo 	apply_filters( 'thmfdn_site_description', '<p class="site-description">' . get_bloginfo( 'description' ) . '</p>' ) . "\n";
	echo '</div><!--#branding-->' . "\n";
}

/**
 * Displays the Inside Header widget area
 *
 * @since 1.0
 */
function thmfdn_header_widgets() {

	// Does the Inside Header widget area contain any widgets?
	if ( is_active_sidebar( 'header-inside' ) ) {
		$thmfdn_header_inside_class = apply_filters( 'thmfdn-header-inside-class', 'header-inside' );
		?>
			<div class="<?php echo $thmfdn_header_inside_class; ?>">
				<?php dynamic_sidebar( 'header-inside' ); ?>
			</div><!--.header-inside-->
		<?php
	}
}

/**
 * Header Menu
 *
 * Displays the header menu. However, if there are widgets present in the
 * Inside Header widget area, that widget area overrides this menu.
 */
function thmfdn_header_menu() {

	// Is the Inside Header widget area currently empty?
	if ( ! is_active_sidebar( 'header-inside' ) ) {
		wp_nav_menu( array(
			'theme_location' => 'header_menu',
			'fallback_cb' => false
		) );
	}
}

/**
 * Header closing
 *
 * Opens the header div and wrapper.
 */
function thmfdn_header_close() {
	echo 	'</div><!--.wrap-->' . "\n";
	echo '</header><!--#header-->' . "\n\n";
}

do_action( 'thmfdn_header' );

/*****************************************************************************
 * Action: thmfdn_header_after
 *
 * The following functions are attached to the thmfdn_header_after action hook.
 */

/**
 * Displays the After Header widget area
 *
 * @since 1.0
 */
function thmfdn_after_header_widgets() {

	// Does the After Header widget area contain any widgets?
	if ( is_active_sidebar( 'header-after' ) ) {
		$thmfdn_header_after_class = apply_filters( 'thmfdn-header-after-class', 'site-header header-after' );
		$thmfdn_header_after_wrap_class = apply_filters( 'thmfdn-header-after-wrap-class', 'wrap' );
		?>

			<div class="<?php echo $thmfdn_header_after_class; ?>">
				<div class="<?php echo $thmfdn_header_after_wrap_class; ?>">
					<?php dynamic_sidebar( 'header-after' ); ?>
				</div><!--.wrap-->
			</div><!--.header-after-->

		<?php
	}
}

/**
 * Main opening
 *
 * Opens the main div and wrapper.
 */
function thmfdn_main_open() {
	echo '<div id="' . apply_filters( 'thmfdn_main_id', 'main' ) . '" class="' . apply_filters( 'thmfdn_main_class', '' ) . '">' . "\n";
	echo '<div class="' . apply_filters( 'thmfdn_main_wrap_class', 'wrap' ) . '">' . "\n";
}

do_action( 'thmfdn_header_after' );
