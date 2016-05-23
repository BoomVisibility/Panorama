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
					<div class="header-divider"></div>
					<div class="entry-summary">
					<a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
							<?php the_content(); ?>
		</div><!-- .entry-summary -->

		<?php endif; ?>
	</article><!-- #post -->
