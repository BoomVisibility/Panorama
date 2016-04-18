<?php
/**
 * Template Name: Reviews Page Template
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
<div class="wrapper">

	

	<div id="primary" class="page-content">
		<div id="content" class="container" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<header class="entry-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
			</header>
			<div class="header-divider"></div>
	
				<?php get_template_part( 'content', 'page' ); ?>
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