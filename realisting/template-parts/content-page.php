<?php

/**
 * Template part for displaying page content in page.php
 *
 * @package realisting
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (has_post_thumbnail()) : ?>

		<div class="post-featured-image">
			<?php the_post_thumbnail(); ?>
		</div>

		<div class="entry-box">

		<?php else :  ?>

		<div>

		<?php endif; ?>


			<header class="entry-header">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			</header><!-- .entry-header -->



			<div class="entry-content">
				<?php
				the_content();
				?>
			</div><!-- .entry-content -->

		</div> <!-- .entry-box -->

</article><!-- #post-<?php the_ID(); ?> -->