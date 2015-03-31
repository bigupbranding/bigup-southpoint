<?php
/**
 * Template Name: Page with Sidebar
 * @package bigup
 */

get_header(); ?>

	<div id="sidebar-template-container" class="container clear">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content/content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<div id="secondary" role="complementary">
			<?php the_field('sidebar_content') ?>
		</div>

	</div>

<?php get_footer(); ?>
