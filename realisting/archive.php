<?php
/**
 * The template for displaying archive page
 *
 * @package realisting
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		if (have_posts()) :

			while (have_posts()) :

				the_post();

				get_template_part('template-parts/content', get_post_type());

			endwhile;

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();