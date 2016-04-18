<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article class="entry with-sidebar" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
			<div class="header-divider"></div>
			<div id="testimonial-block">
			<?php
					$my_secondary_loop = new WP_Query('post_type=testimonials&post_parent=0&posts_per_page=99&orderby=title&order=ASC');
					if( $my_secondary_loop->have_posts() ):
						while( $my_secondary_loop->have_posts() ): $my_secondary_loop->the_post();
							?>
							<div class="testimonial">
								<div class="testimonial-text"><?php the_field('testimonial_text'); ?>
								</div>
							</div>
							<div class="source">
								<p>&mdash;&nbsp;<?php the_field('source'); ?></p>
								<div class="header-divider"></div>
							</div>
							<?php endwhile; ?>
				<?php endif;
					wp_reset_postdata();
				?>
			</div>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
