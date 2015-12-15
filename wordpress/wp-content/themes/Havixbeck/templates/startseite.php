

</div>
<div class="container-fluid full-width-image-align">
    <div class="full-width-image-on-top">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/on-top-image.jpg" >

    </div>
    <div class="breadcrumbs"> <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?> </div>
</div><!-- container-fluid -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <?php the_content(); ?>

<?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>



