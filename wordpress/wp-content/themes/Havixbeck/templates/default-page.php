<div class="container-fluid full-width-image-align">

        <?php if (has_post_thumbnail()) {
           _e('<div class="imagecrop page-image-top">');
            the_post_thumbnail();
            _e('</div>');
        } ?>
</div>
<div class="container">

        <div class="row">

    <div class="col-lg-12 text-center page-title">

        <h2><?php the_title(); ?></h2>

    </div>

</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <div class="row">


        <div
            class="
            col-lg-8 col-lg-offset-2
            col-md-8 col-md-offset-2
            col-sm-8 col-sm-offset-2
            col-xs-8 col-xs-offset-2
            text-center">
            <?php the_content(); ?>
        </div>

        <?php if(is_page("Musikschule")){ ?>

            </div><!-- container -->
    </div>
            <div class="container-fluid">

                <div class="row box-link-container "><!-- upper - row -->

                    <div class="col-lg-2 col-lg-offset-1 box-link"></div>
                    <div class="col-lg-2 box-link"></div>
                    <div class="col-lg-2 box-link"></div>
                    <div class="col-lg-2 box-link"></div>

                </div>

            </div>

        <?php }?>




<?php endwhile;
else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>



