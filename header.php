<?php
/**
 * header.php
 * @package bigup
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php 
	$company_phone = get_theme_mod('company-phone');
	$company_email = get_theme_mod('company-email');

	$social_fb = get_theme_mod('social-facebook');
	$social_tw = get_theme_mod('social-twitter');
	$social_gp = get_theme_mod('social-google-plus');
	$social_pn = get_theme_mod('social-pinterest');
	$social_li = get_theme_mod('social-linkedin'); 
	?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bigup' ); ?></a>

<div id="website">
	
	<div id="top-info" class="clear">
		<div class="top-info-left"><?php bloginfo('title') ?></div>
		<div class="top-info-right">
				<ul class="top-contact-info">
					<li><i class="bigup-phone"></i><?php echo $company_phone ?></li>
					<li><i class="bigup-letter-mail"></i><?php echo antispambot($company_email) ?></li>
				</ul>
				<ul class="top-social-media">
					<?php if ( $social_fb ): ?>
						<li><a href="<?php echo $social_fb ?>" class="bigup-facebook" target="_blank"></a></li>
					<?php endif ?>
					<?php if ( $social_tw ): ?>
						<li><a href="<?php echo $social_tw ?>" class="bigup-twitter" target="_blank"></a></li>
					<?php endif ?>
					<?php if ( $social_gp ): ?>
						<li><a href="<?php echo $social_gp ?>" class="bigup-google-plus" target="_blank"></a></li>
					<?php endif ?>
					<?php if ( $social_pn ): ?>
						<li><a href="<?php echo $social_pn ?>" class="bigup-pinterest" target="_blank"></a></li>
					<?php endif ?>
					<?php if ( $social_li ): ?>
						<li><a href="<?php echo $social_li ?>" class="bigup-linkedin" target="_blank"></a></li>
					<?php endif ?>
				</ul>
		</div>
	</div>
	
	<header id="header" role="banner">
		
		<div class="container">
			
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/gelcorp.png" alt="<?php bloginfo('title');?>" class="site-logo"></a></h1>
			</div>

			<nav id="site-navigation" role="navigation">
				<?php wp_nav_menu(); ?>
			</nav>

		</div>

	</header><!-- #header-->

	<?php if ( is_front_page() ): ?>
		<?php get_template_part('content/content', 'intro') ?>
	<?php endif ?>

	<div id="content">
		