<div class="container-fluid full-width-image-align">
    <div class="full-width-image-on-top-start">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/startseite-bild.jpg">

    </div>
    <div class="breadcrumbs"> <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?> </div>
</div><!-- container-fluid -->
<div class="container-fluid main-padding">
    <div class="row">

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 startseite-link-to-page">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/startseite-bild.jpg">

                <div class="grey-overlay"><h4>Angebot</h4></div></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 startseite-link-to-page secondImg">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/startseite-bild.jpg">

                <div class="grey-overlay"><h4>Angebot</h4></div></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 startseite-link-to-page thirdImg">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/startseite-bild.jpg">

                <div class="grey-overlay"><h4>Angebot</h4></div></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 startseite-link-to-page">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/startseite-bild.jpg">

                <div class="grey-overlay"><h4>Angebot</h4></div></a>
        </div>


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


            <?php the_content(); ?>

        <?php endwhile;
        else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
        <?php endif; ?>
    </div>



