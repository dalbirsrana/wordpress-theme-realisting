<?php
/**
 * Displays content for front page
 *
 * @package realisting
*/

?>
<section>

	<article id="post-<?php the_ID(); ?>" <?php post_class('realisting-home-page'); ?>>

		<div class="entry">

			<header class="entry-header">
				<?php the_title('<h2 class="entry-title">', '</h2>'); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content();  	?>
			</div><!-- .entry-content -->

		</div><!-- .entry -->

	</article><!-- #post-<?php the_ID(); ?> -->

</section>