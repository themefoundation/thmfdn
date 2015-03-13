<?php
/**
 * Content for archives
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

if ( !function_exists( 'thmfdn_index_featured_image' ) ) {
	/**
	 * Featured image
	 *
	 * Displays the featured image (formerly called the post thumbnail).
	 */
	function thmfdn_index_featured_image() {
		the_post_thumbnail( apply_filters( 'thmfdn_index_thumbnail_size', apply_filters( 'thmfdn_thumbnail_size', '' ) ) );
		echo "\n";
	}
}

if ( !function_exists( 'thmfdn_index_entry_title' ) ) {
	/**
	 * Entry title
	 *
	 * Displays the post title.
	 */
	function thmfdn_index_entry_title() {
		echo '<h2 class="' . apply_filters( 'thmfdn_entry_title_class', 'entry-title' ) . '">';
		echo '<a href="' . get_permalink() . '">';
		the_title();
		echo '</a>';
		echo '</h2>' . "\n";
	}
}

if ( !function_exists( 'thmfdn_index_meta' ) ) {
	/**
	 * Entry meta
	 *
	 * Displays the post meta data.
	 */
	function thmfdn_index_meta() {
		echo '<div class="' . apply_filters( 'thmfdn_entry_meta_class', 'entry-meta' ) . '">';
		get_template_part( 'template-parts/entry', 'meta' );
		echo '</div>' . "\n";
	}
}

if ( !function_exists( 'thmfdn_index_content' ) ) {
	/**
	 * Entry content
	 *
	 * Displays the post content.
	 */
	function thmfdn_index_content() {
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



<!-- 		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="<?php echo apply_filters( 'thmfdn_entry_title_class', 'entry-title' ) ?>">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
			
			<div class="<?php echo apply_filters( 'thmfdn_entry_title_class', 'entry-content' ) ?>">
				<?php the_content(); ?>
			</div>
		</div> -->
