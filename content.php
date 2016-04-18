<?php

/**

 * The default template for displaying content. Used for both single and index/archive/search.

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( is_single() ) : // Show full content for Single page ?>

			<div class="entry-content">

			<?php the_content(); ?>

			</div><!-- .entry-content -->

		<?php else : ?>

					<div class="entry-summary">

					<?php if ( has_post_thumbnail() ) : ?>
					<div class="half">
						<a href="<?php the_permalink(); ?>"><h2 class="blog-title"><?php the_title();?></h2></a>
						<div class="date"><?php the_time('F j, Y');?></div>
							<?php the_excerpt(); ?>
						<a class="read-more" href="<?php the_permalink(); ?>">Read more >> </a>
					</div>
					<div class="half last">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
					</div>
				<?php else : ?>
					<a href="<?php the_permalink(); ?>"><h2 class="blog-title"><?php the_title();?></h2></a>
						<div class="date"><?php the_time('F j, Y');?></div>
							<?php the_excerpt(); ?>
					<a class="read-more" href="<?php the_permalink(); ?>">Read more &raquo; </a>
				<?php endif; ?>

			

			<div class="clear"></div>
			

		</div><!-- .entry-summary -->

		<?php endif; ?>

	</article><!-- #post -->
	
	<div class="divider"></div>