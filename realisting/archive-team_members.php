<?php
/**
 * The template for displaying team_member post type on archive page
 *
 * @package realisting
 */
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

	
    <header class="entry-header">
		<h1 class="entry-title">Our Team</h1>
	</header><!-- .entry-header -->
	
	<?php

	$args = array( 'post_type' => 'team_members', 'order' => 'ASC' );

	$my_query = new WP_Query($args);

	if ($my_query->have_posts()) : ?>	

	<section class="team-container">	

		<?php 	
		while ($my_query->have_posts()) :		
		$my_query->the_post();
		
			get_template_part('template-parts/content', get_post_type());
				
		endwhile; 
		?>		

	</section>

	<?php endif; ?>		

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
