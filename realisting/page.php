<?php
/**
 * The template for displaying all pages
 *
 * @package realisting
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main <?php if ( is_front_page(  ) ) echo 'front-page'; ?> ">

		<?php
		while ( have_posts() ) :
			
			the_post();

			if ( is_front_page() ) :

				get_template_part( 'template-parts/content', 'front-page' );
			
			else :

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();