<?php
/**
 * Template part for displaying staff members posts in archive.php
 *
 * @package realisting
 */
?>
<article class="profile-container">
    <div class="back-container"></div>
        
    <?php if (has_post_thumbnail( )) : ?>
        <div class="person-image-container">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>

    <div class="text-container">

		<?php the_title( '<h3>', '</h3>' ); ?>

        <p class="designation">
            <?php the_field('position'); ?>
        </p>
        
        <p>
            <?php the_field('description'); ?>
        </p>

        <nav>
            <?php the_field('social_link'); ?>
        </nav>
    
    </div>

</article><!-- #post-<?php the_ID(); ?> -->