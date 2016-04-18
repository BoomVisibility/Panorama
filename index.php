<?php

/**

 * The main template file.

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * For example, it puts together the home page when no home.php file exists.

 *

 * Learn more: http://codex.wordpress.org/Template_Hierarchy

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */



get_header(); ?>

<div class="blog-divider"></div>

<div class="wrapper">











	<div id="primary" class="site-content">

		<div id="content" class="container" role="main">

				<header class="entry-header">

			<h1 class="page-title">Blog</h1>

		
<?php if ( function_exists('yoast_breadcrumb') ) {

yoast_breadcrumb('<p id="breadcrumbs">','</p>');

} ?>

		</header>

		<?php if ( have_posts() ) : ?>



			<?php /* Start the Loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>



			<?php if(function_exists('wpbeginner_numeric_posts_nav')) {



		wpbeginner_numeric_posts_nav();



	}



	else {



		twentytwelve_content_nav( 'nav-below' );



	}



	?> 



		<?php else : ?>



			<article id="post-0" class="post no-results not-found">



			<?php if ( current_user_can( 'edit_posts' ) ) :

				// Show a different message to a logged-in user who can add posts.

			?>

				<header class="entry-header">

					<h2 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h2>

				</header>



				<div class="entry-content">

					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>

				</div><!-- .entry-content -->



			<?php else :

				// Show the default message to everyone else.

			?>

				<header class="entry-header">

					<h2 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h2>

				</header>



				<div class="entry-content">

					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .entry-content -->

			<?php endif; // end current_user_can() check ?>



			</article><!-- #post-0 -->



		<?php endif; // end have_posts() check ?>



		</div><!-- #content -->

	</div><!-- #primary -->



<?php get_sidebar(); ?>



</div>	
<?php if ( is_active_sidebar( 'sidebar-10' ) ) : ?><?php dynamic_sidebar( 'sidebar-10' ); ?><?php endif; ?>
<?php get_footer(); ?>