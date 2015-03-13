		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="entry-title">
				<?php the_title(); ?>
			</h1>

			<div class="entry-meta">
				<?php get_template_part( 'template-parts/entry', 'meta' ); ?>
			</div>
			
			<div class="entry-content">
				<?php the_content(); ?>
			</div><!--.entry-content-->

			 <?php comments_template(); ?> 
		</div>