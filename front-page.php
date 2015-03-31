<?php
/**
 * @package bigup
 */

	$site_color = get_theme_mod('website-color');

get_header(); ?>

	<section id="home-content" class="clear dark-section">

		<div class="container padding-top-bottom">
			
				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content() ?>

				<?php endwhile; // end of the loop. ?>

		</div>

	</section><!-- #home-content -->

	<section id="featured-pages">

		<?php // get customizer data
			$action_1 = get_theme_mod('actions-1');
			$action_2 = get_theme_mod('actions-2');
			$action_3 = get_theme_mod('actions-3');
			$action_4 = get_theme_mod('actions-4'); ?>

			<div class="container padding-top-bottom">
					
				<ul>
					<li style="border-bottom:3px solid <?php echo $site_color ?>">
						<a href="<?php echo get_permalink( $action_1 ); ?>">
							<div class="featured-page-image" style="background-image:url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $action_1 ), 'large' )[0]; ?>)"></div>
							<div class="featured-page-title bigup-arrow-circle-right-line"><?php echo get_the_title( $action_1 ); ?></div>
						</a>
					</li>
					<li style="border-bottom:3px solid <?php echo $site_color ?>">
						<a href="<?php echo get_permalink( $action_2 ); ?>">
							<div class="featured-page-image" style="background-image:url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $action_2 ), 'large' )[0]; ?>)"></div>
							<div class="featured-page-title bigup-arrow-circle-right-line"><?php echo get_the_title( $action_2 ); ?></div>
						</a>
					</li>
					<li style="border-bottom:3px solid <?php echo $site_color ?>">
						<a href="<?php echo get_permalink( $action_3 ); ?>">
							<div class="featured-page-image" style="background-image:url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $action_3 ), 'large' )[0]; ?>)"></div>
							<div class="featured-page-title bigup-arrow-circle-right-line"><?php echo get_the_title( $action_3 ); ?></div>
						</a>
					</li>
					<li style="border-bottom:3px solid <?php echo $site_color ?>">
						<a href="<?php echo get_permalink( $action_4 ); ?>">
							<div class="featured-page-image" style="background-image:url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $action_4 ), 'large' )[0]; ?>)"></div>
							<div class="featured-page-title bigup-arrow-circle-right-line"><?php echo get_the_title( $action_4 ); ?></div>
						</a>
					</li>
				</ul>

			</div>
		
	</section><!-- #featured-pages -->

				
	<?php 
		// query posts from case studies category
		$query_posts = new WP_Query( 'post_type=page&page_id=10' ); ?>
	<?php while ( $query_posts->have_posts() ) : $query_posts->the_post(); ?>

		<section id="about-location" style="background-image:url('<?php echo get_image_url(); ?>')">
			<div class="container">
				
				<div class="about-content">

					<h2 class="section-title"><?php the_title() ?></h2>
					<?php the_trimmed_content(50); ?>

				</div>

			</div>

		</section>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>	

	<section id="contact-bio-section">
		<div class="container clear">
			
			<div class="contact-left">
				<h2 class="section-title">Contact Us For More Information</h2>
				<?php gravity_form('1', false, false, false, null, true); ?>
			</div>

			<div class="contact-right">
				<?php 
					// query posts from case studies category
					$query_posts = new WP_Query( 'post_type=page&page_id=6' ); ?>
				<?php while ( $query_posts->have_posts() ) : $query_posts->the_post(); ?>
			
					<div class="gelcorp-info">
						
						<h2 class="section-title"><?php the_title() ?></h2>
						<?php the_trimmed_content(50, 'Learn More &#8594;'); ?>

					</div>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>	
			</div>

		</div>
	</section>
	
	<!--<section id="recent-blog-post" class="clear">
		<div class="clear flex">

			<?php 
				// query posts from case studies category
				$query_posts = new WP_Query( 'post_type=post&posts_per_page=1' ); // excludes id=3 for case studies ?>
			<?php while ( $query_posts->have_posts() ) : $query_posts->the_post(); ?>
				<div class="float-left">
					<h2 class="section-title">Recent Blog Post</h2>
					<h3><?php the_title() ?></h3>
					<?php echo get_the_date(); ?>
					<?php the_trimmed_content(50); ?>
				</div>
				<div class="float-right" style="background-image:url('<?php echo get_image_url(); ?>')"></div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>	

		</div>
	</section> --> <!-- #recent-blog-post -->

	<style>

		section#site-intro {
			background-image:url(<?php echo get_image_url(); ?>);
		}

	</style>
		

<?php get_footer(); ?>
