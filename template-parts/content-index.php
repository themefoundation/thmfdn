		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="<?php echo apply_filters( 'thmfdn_entry_title_class', 'entry-title' ) ?>">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
			
			<div class="<?php echo apply_filters( 'thmfdn_entry_title_class', 'entry-content' ) ?>">
				<?php the_content(); ?>
			</div><!--.entry-content-->
		</div><!--.post-->
