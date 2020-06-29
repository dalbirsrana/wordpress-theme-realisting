<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package realisting
 */
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

	<div id="page" class="site">

		<header id="masthead" class="site-header">

			<div class="site-header-outer">
				<div class="site-headerbar">

					<div class="site-head-logo">
						<?php the_custom_logo();  ?>
					</div>


					<nav id="site-navigation" class="main-navigation">
						<button class="main-menu-button"><i class="icon bars"></i><span>Menu</span></button>

						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-main',
							'menu_id'        => 'primary-menu',
						));
						?>
					</nav><!-- #site-navigation -->




				</div><!-- .site-headerbar -->
			</div><!-- site-header-outer -->






			<?php
			if (!is_home() && is_front_page()) : ?>

				<div class="hero-section">

					<div class="hero-section-image"
					style="background-image: url('<?php header_image(); ?>')">	
					<!-- Photo by Janis Rozenfelds on Unsplash	 -->
					</div>

					<div class="site-branding">

						<div class="site-desc-outer">
							<p class="site-description">
								<?php bloginfo('description'); ?>
							</p>
						</div>
					</div><!-- .site-branding -->

				</div> <!-- .hero-section -->






				<div class="home-section-1">

					<section>
						<div class="site-desc-img">
							<img src="<?php echo get_template_directory_uri() ?>/graphics/hero-img-phone.png" alt="realisting mobile screen">
						</div>

						<div class="site-download">
														
							<img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png'/>
							<!-- Google Play and the Google Play logo are trademarks of Google LLC. -->


							<h2><?php bloginfo('name'); ?></h2>
						</div>


					</section>
				</div>

				<div class="home-section-2" id="screenshots">
					<section>

					<h1 class="entry-title">Screenshots</h1>

					<?php echo do_shortcode('[sp_wpcarousel id="104"]'); ?>

					</section>
				</div>



			<?php endif; ?>


		</header>
		<!-- #masthead -->


		<div id="content" class="site-content">