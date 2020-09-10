<?php
/**
 * Template Name: Front Page Template
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
<div id="primary">
	<div id="content" role="main">
		<section class="slideshow">
  			<div class="slideshow-container">
    				<div class="bxslider">
      					<?php
        				$i = 1;
        				$my_secondary_loop = new WP_Query('post_type=slides');
        				if( $my_secondary_loop->have_posts() ):
          					while( $my_secondary_loop->have_posts() ): $my_secondary_loop->the_post(); ?>
      						<div class="slide-list">
        						<div class="slideshow-overlay"></div>
        						<div class="slide" style="background-image: url(<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $feat_image;  ?>);" ></div>
          						<div class="slider-content container">
          							<div class="inner">
           								<div class="entry">
            									<?php if ($i == 1) : ?>
              										<h1><?php echo the_title();?></h1>
            									<?php else : ?>
              										<h2 class="slide-title"><?php echo the_title();?></h2>
            									<?php endif; ?>
              									<div class="divider"></div>
              									<?php echo the_content();?>
              									<div class="textalign-center"><a class="learn-more" href="<?php the_field('slide_link'); ?>"><?php the_field('slide_button_text'); ?></a></div>
            								</div>
          							</div>
          							<div class="clear"></div>
        						</div>
      						</div>
      					<?php $i++;
      						endwhile; ?>
    				</div>
    				<?php endif; wp_reset_postdata(); ?>
  			</div>
		</section>
		<div class="home-buckets">
				<div class="container">
					<div class="one_third">
						<div class="bucket-entry">
							<h2 class="bucket-title"><?php the_field('bucket_title_1'); ?></h2>
							<p class="smaller"><?php the_field('bucket_text_1'); ?></p>
							<a class="read-more" href="<?php the_field('bucket_link_1'); ?>"><?php the_field('bucket_link_text_1'); ?></a>
						</div>
					</div>
					<div class="one_third">
						<div class="bucket-entry">
							<h2 class="bucket-title"><?php the_field('bucket_title_2'); ?></h2>
							<p class="bucket-hours"><?php the_field('bucket_text_2'); ?></p>
						</div>
					</div>
					<div class="one_third last">
						<div class="bucket-entry">
							<h2 class="bucket-title orange"><?php the_field('bucket_title_3'); ?></h2>
							<p class="smaller"><?php the_field('bucket_text_3'); ?></p>
							<a class="learn-more orange" href="tel:<?php the_field('bucket_phone'); ?>"><?php the_field('bucket_link_text_3'); ?>:&nbsp;<?php the_field('bucket_phone'); ?></a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		<section id="insurance" class="textalign-center">
				<div class="container">
					<h2><?php the_field('insurance_title'); ?></h2>
					<a href="<?php the_field('insurance_link_1'); ?>"><p class="smaller"><?php the_field('insurance_statement'); ?></p></a>
					<div class="insurance-container">
					<div class="one_fifth">
						<img src="<?php the_field('insurance_image_1'); ?>" alt="<?php the_field('insurance_agency_1'); ?>">
					</div>
					<div class="one_fifth">
						<img src="<?php the_field('insurance_image_2'); ?>" alt="<?php the_field('insurance_agency_2'); ?>">
					</div>
					<div class="one_fifth">
						<img src="<?php the_field('insurance_image_3'); ?>" alt="<?php the_field('insurance_agency_3'); ?>">
					</div>
					<div class="one_fifth">
						<img src="<?php the_field('insurance_image_4'); ?>" alt="<?php the_field('insurance_agency_4'); ?>">
					</div>
					<div class="one_fifth last">
						<img src="<?php the_field('insurance_image_5'); ?>" alt="<?php the_field('insurance_agency_5'); ?>">
					</div></div>							
				</div>
		</section>
		<section id="services" class="textalign-center">
				<div class="container">
					<h2><?php the_field('services_title'); ?></h2>
					<p><?php the_field('services_text'); ?></p>
					<div class="services-container">
					<div class="one_fourth">
						<a href="<?php the_field('service_link_1'); ?>">
						<img src="<?php the_field('services_icon_1'); ?>" alt="<?php the_field('service_1'); ?>">
						<h3><?php the_field('service_1'); ?></h3>
						</a>
					</div>
					<div class="one_fourth">
						<a href="<?php the_field('service_link_2'); ?>">
						<img src="<?php the_field('services_icon_2'); ?>" alt="<?php the_field('service_2'); ?>">
						<h3><?php the_field('service_2'); ?></h3>
						</a>
					</div>
					<div class="one_fourth">
						<a href="<?php the_field('service_link_3'); ?>">
						<img src="<?php the_field('services_icon_3'); ?>" alt="<?php the_field('service_3'); ?>">
						<h3><?php the_field('service_3'); ?></h3>
						</a>
					</div>
					<div class="one_fourth last">
						<a href="<?php the_field('service_link_4'); ?>">
						<img src="<?php the_field('services_icon_4'); ?>" alt="<?php the_field('service_4'); ?>">
						<h3><?php the_field('service_4'); ?></h3>
						</a>
					</div></div>							
				</div>
		</section>

			<section id="testimonials" class="textalign-center">
				<div class="testimonial-overlay"></div>
				<div class="container">
					<ul class="bxslider-testimonials">
					<?php
						$my_secondary_loop = new WP_Query('post_type=testimonials');
							if( $my_secondary_loop->have_posts() ):
							while( $my_secondary_loop->have_posts() ): $my_secondary_loop->the_post();
						?>
				    <li class="slide" 
					    <? if($_my_meta_value_key !== '') { ?> 
						    style="background-image: url(<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $feat_image;  ?>);"
						<? } ?>
						>
						<?php 
						if($_my_meta_value_key !== '') { ?>
							<div class="container">
								<div class="inner">
									<div class="testimonial">
										<div class="testimonial-text"><?php the_field('testimonial_text'); ?></div>
									</div>
									<div class="source">
										<h4>&mdash;&nbsp;<?php the_field('source'); ?></h4>
									</div>
								</div>
							</div>
								
							<?php } else { ?>

						<?php } ?>

						</li>
						<?php endwhile; ?>
					</ul>
				</div>
				<div class="bx-controls">
				<div id="slider-prev" class="bx-controls-direction">
					<?php
						$count = 0;
						$my_secondary_loop = new WP_Query('post_type=testimonials');
							if( $my_secondary_loop->have_posts() ):
				    			while( $my_secondary_loop->have_posts() ): $my_secondary_loop->the_post();
				    ?>
					<?php 
						$count++;
						endwhile; 
				 		endif;
					?>
				</div>
				<div id="slider-next" class="bx-controls-direction">
					<?php
						$count = 0;
						$my_secondary_loop = new WP_Query('post_type=testimonials');
							if( $my_secondary_loop->have_posts() ):
				    			while( $my_secondary_loop->have_posts() ): $my_secondary_loop->the_post();
				    ?>
					<?php 
						$count++;
						endwhile; 
				 		endif;
					?>
				</div></div>
			
					<?php endif;
						wp_reset_postdata();
					?>
				
			</section>
			<?php if ( is_active_sidebar( 'sidebar-10' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-10' ); ?>
			<?php endif; ?>	

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
