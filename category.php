<?php

/**

 * The template for displaying Category pages.

 *

 * Used to display archive-type pages for posts in a category.

 *

 * Learn more: http://codex.wordpress.org/Template_Hierarchy

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */



get_header(); ?>

<div class="wrapper category-page">



	<div id="primary" class="site-content">

		<div id="content" class="container" role="main">
		
		
		<?php if ( have_posts() ) : ?>

<header class="archive-header">

<h1 class="archive-title">

<?php printf( __( 'Category: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>

</h1>

<?php if ( category_description() ) : // Show an optional category description ?>

<div class="archive-meta">

<?php echo category_description(); ?>

</div>

<?php endif; ?>

</header><!-- .archive-header -->

			<?php

			/* Start the Loop */

			while ( have_posts() ) : the_post();



				/* Include the post format-specific template for the content. If you want to

				 * this in a child theme then include a file called called content-___.php

				 * (where ___ is the post format) and that will be used instead.

				 */

				get_template_part( 'content', get_post_format() );

			endwhile;
		wpbeginner_numeric_posts_nav();

			?>



		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>



		</div><!-- #content -->

	</div><!-- #primary -->

<?php get_sidebar(); ?>

</div>

<?php if ( is_active_sidebar( 'sidebar-10' ) ) : ?><?php dynamic_sidebar( 'sidebar-10' ); ?><?php endif; ?>

<?php get_footer(); ?>