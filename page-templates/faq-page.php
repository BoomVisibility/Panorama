<?php
/**
 * Template Name: FAQ Page
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */


get_header(); ?>


<div class="wrapper archive-page"><?php if ( have_posts() ) : ?>			



	<div id="primary" class="page-content">

		<div id="content" class="container small" role="main">

<header class="archive-header">				

<h1 class="archive-title">
FAQs
</h1>
</header><!-- .archive-header -->

			<?php

			/* Start the Loop */

			$query = new WP_Query( array ( 'post_type' => 'faq', 'posts_per_page' => 100, 'post_parent' => 0 ) );

			/* Start the Loop */
			
			while ($query->have_posts()){
				$query->the_post();
		


				/* Include the post format-specific template for the content. If you want to

				 * this in a child theme then include a file called called content-___.php

				 * (where ___ is the post format) and that will be used instead.

				 */

				get_template_part( 'content', 'faq' );
				wpbeginner_numeric_posts_nav();
			} ?>



		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>



		</div><!-- #content -->

	</div><!-- #primary -->



<?php if ( is_active_sidebar( 'sidebar-11' ) ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-11' ); ?>				
	</div><!-- #secondary -->			
	<?php endif; ?>	

</div>
<?php if ( is_active_sidebar( 'sidebar-10' ) ) : ?><?php dynamic_sidebar( 'sidebar-10' ); ?><?php endif; ?>
<?php get_footer(); ?>
