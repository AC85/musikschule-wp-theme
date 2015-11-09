<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

<?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

HAHAHHAuptseite

<?php get_footer(); ?>