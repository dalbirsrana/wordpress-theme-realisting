<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package realisting
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">

	<div class="container">


		<div class="col news-letter">
			<h2>Newsletter</h2>
			<p>We only send promo offers, not a single spam</p>
			<form action="#">
				<input type="email" placeholder="Your email address" required class="news-letter-email">
				<input type="submit" value="Get Started" class="news-letter-submit">
				<input type="hidden" value="<?php echo get_template_directory_uri(); ?>" class="news-letter-url">
			</form>
			<div id="news-letter-msg"></div>
		</div>




		<div class="col">
			<?php if (has_nav_menu('menu-footer')) : ?>
	
				<div class="social-links">
					<nav class="footer-navigation" aria-label="<?php esc_attr_e('Footer Menu', 'realisting'); ?>">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-footer',
								'menu_class'     => 'footer-menu',
								'link_before'	=> '<span>',
								'link_after'	=> '</span>'
							)
						);
						?>
					</nav><!-- .footer-navigation -->
				</div>
			<?php endif; ?>
	
	
			<div class="site-info">
				<p>Copyright © 2020 Realistng. All rights reserved.<br />
					<a href="<?php echo get_site_url(); ?>/privacy-policy/">Privacy Policy</a> | <a href="<?php echo get_site_url(); ?>/condition-of-sale/">Conditions of Use & Sale</a></p>
			</div><!-- .site-info --------------------->
		</div>


	</div> <!-- .container  --------------->

</footer><!-- #colophon -->

<div class="back-to-top">
	<a href="#page"><i class="fas fa-arrow-circle-up"></i><span>Top</span></a>
</div>

</div><!-- #page -->



<?php wp_footer(); ?>

</body>

</html>