<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="wrapper search-page"><?php if ( have_posts() ) : ?>
	<div id="primary" class="page-content">
		<div id="content" class="container" role="main">		
			<header class="archive-header">
				<h1 class="archive-title">
					<?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h1>
			</header>
			<?php if(function_exists('wp_paginate')) {
				wp_paginate();
				}
				else {
				twentytwelve_content_nav( 'nav-above' );
				}
			?>
			<div class="divider"></div>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
			<?php if(function_exists('wp_paginate')) {
				wp_paginate();
			}
			else {
			twentytwelve_content_nav( 'nav-below' );
			}
			?> 
			<?php else : ?>
			<div id="primary" class="page-content" role="main">
				<div id="content" class="container" role="main">
				<article id="post-0" class="post no-results not-found">
					<div class="entry-content">
						<header class="entry-header">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
						</header>
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
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
