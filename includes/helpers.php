<?php
/**
 * Helpers
 *
 * This file contains functions to extend the functionality of the
 * THMFDN theme. 
 *
 * @package THMFDN
 */

function thmfdn_post_meta( $meta_args = array() ) {
	if ( !empty( $meta_args ) ) {
		foreach ( $meta_args as $meta => $meta_title ) {
			switch ( $meta ) {
				case 'author':
					echo '<span class="meta author-wrap">' . $meta_title;
					echo '<span class="author">';
					the_author();
					echo '</span>';
					echo '</span>';
					break;
				case 'author_website':
					echo '<span class="meta author-wrap">' . $meta_title;
					echo '<span class="author">';
					the_author_link();
					echo '</span>';
					echo '</span>';
					break;
				case 'author_posts':
					echo '<span class="meta author-wrap">' . $meta_title;
					echo '<span class="author">';
					the_author_posts_link();
					echo '</span>';
					echo '</span>';
					break;
				case 'categories':
					echo '<span class="meta categories-wrap">' . $meta_title;
					echo '<span class="categories">';
					the_category();
					echo '</span>';
					echo '</span>';
					break;
				case 'date':
					echo '<span class="meta date-wrap">' . $meta_title;
					echo '<span class="date">';
					the_time( get_option( 'date_format' ) );
					echo '</span>';
					echo '</span>';
					break;
				case 'tags':
					echo '<span class="meta tags-wrap">';
					the_tags( $meta_title );
					echo '</span>';
					break;

				
				default:
					# code...
					break;
			}
		}
	}
}