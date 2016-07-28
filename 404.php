<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="header-divider"></div>

<div class="wrapper">
	<div id="primary" class="site-content">
		<div id="content" role="main">
				<header class="entry-header">
					<h2 class="entry-title"><?php _e( '404 Error: Page Not Found', 'twentytwelve' ); ?></h2>
				</header>
			<article id="post-0" class="post error404 no-results not-found">

				<div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div>
<?php if ( is_active_sidebar( 'sidebar-10' ) ) : ?><?php dynamic_sidebar( 'sidebar-10' ); ?><?php endif; ?>
<?php get_footer(); ?>
