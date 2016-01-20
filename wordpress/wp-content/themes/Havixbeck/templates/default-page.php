<div class="container-fluid full-width-image-align">

    <?php if (has_post_thumbnail()) {
        _e('<div class="imagecrop page-image-top">');
        the_post_thumbnail();
        _e('</div>');
    } else { ?>

        <div class="full-width-image-on-top">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/on-top-image.jpg">

        </div>


    <?php } ?>
</div>

<div class="max-width-container text-center">
    <div class="container">

        <div class="row">

            <div class="text-center page-title">

                <h2><?php the_title(); ?></h2>

            </div>
        </div>

        <?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>


        <div class="row">


            <div
                class="
            col-lg-8 col-lg-offset-2
            col-md-8 col-md-offset-2
            col-sm-10 col-sm-offset-1
            col-xs-10 col-xs-offset-1
            text-left">
                <?php the_content(); ?>
            </div>


            <?php if (is_page("Musikschule")) {
                get_template_part('templates/musikschule');
            }

            ?>

        </div><!-- row-->
    </div><!-- container -->
</div><!-- max-width -->


<?php endwhile;
else: ?>
    <p><?php _e('Oops, da ist wohl was schiefgelaufen. Versuchen Sie es später nocheinmal'); ?></p>
<?php endif; ?>

<?php



