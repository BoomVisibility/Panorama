<?php

/**

 * The Template for displaying all single posts.

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */



get_header(); ?>

<div class="wrapper">

	<div id="primary" class="page-content">

		<div id="content" class="container small" role="main">

		<header class="entry-header">

			<h1 class="page-title">FAQs</h1>

			<?php if ( function_exists('yoast_breadcrumb') ) {

yoast_breadcrumb('<p id="breadcrumbs">','</p>');

} ?>


		</header>
		<h2><?php the_title(); ?></h2>

			<?php while ( have_posts() ) : the_post(); ?>



				<?php get_template_part( 'content', 'faq' ); ?>





				<?php comments_template( '', true ); ?>



			<?php endwhile; // end of the loop. ?>



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