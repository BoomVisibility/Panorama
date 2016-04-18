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

	<div id="primary" class="site-content">

		<div id="content" class="container small" role="main">

		<header class="entry-header">

			<h1 class="page-title"><?php the_title(); ?></h1>
			
			<div class="date"><?php the_time('F j, Y');?></div>

			<?php if ( function_exists('yoast_breadcrumb') ) {

yoast_breadcrumb('<p id="breadcrumbs">','</p>');

} ?>


		</header>

<!-- Go to www.addthis.com/dashboard to customize your tools -->

<div class="addthis_sharing_toolbox" data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"></div>

			<?php while ( have_posts() ) : the_post(); ?>



				<?php get_template_part( 'content', get_post_format() ); ?>

<div class="category"><b><?php _e('Posted In:', 'wplook'); ?></b> <?php the_category(', ') ?><div class="end"></div></div>

<?php

if(get_the_tag_list()) {?>

	<div class="tags"><b><?php _e('Tagged In:', 'wplook'); ?></b> 

	<?php

    echo get_the_tag_list('<span>',', ','</span>');

	?><div class="end"></div></div>

	<?php

}

?>



				<?php comments_template( '', true ); ?>



			<?php endwhile; // end of the loop. ?>



		</div><!-- #content -->

	</div><!-- #primary -->



<?php get_sidebar(); ?>

</div>

<?php if ( is_active_sidebar( 'sidebar-10' ) ) : ?><?php dynamic_sidebar( 'sidebar-10' ); ?><?php endif; ?>
<?php get_footer(); ?>