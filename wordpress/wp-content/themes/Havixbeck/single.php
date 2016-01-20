<?php get_header(); ?>
    <div class="container">
        <div class="row page-image-top">

            <div class="
            col-lg-10 col-lg-offset-1
            col-md-10 col-md-offset-1
            col-sm-10 col-sm-offset-1
            col-xs-10 col-xs-offset-1">

                <?php if (has_post_thumbnail()) {
                    _e('<div class="imagecrop">');
                    the_post_thumbnail();
                    _e('</div>');
                } ?>

            </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="row">

        <div class="
            col-lg-8 col-lg-offset-2
            col-md-8 col-md-offset-2
            col-sm-8 col-sm-offset-2
            col-xs-10 col-xs-offset-1
            text-left page-title">

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
            col-xs-10 col-xs-offset-1
            text-center text-justify">
            <?php the_content(); ?>
        </div>
    </div>
    </div>

<?php endwhile;
else: ?>
    <p><?php _e('Sorry, this page does nooot exist.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>