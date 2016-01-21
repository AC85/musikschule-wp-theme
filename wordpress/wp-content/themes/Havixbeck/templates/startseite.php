
<div class="outerDiv">
    <div class="container-fluid full-width-image-align">


        <?php if (has_post_thumbnail()) {
            _e('<div id="startbild" class="full-width-image-on-top-start">');
            the_post_thumbnail();
            _e('</div>');
        } else { ?>

            <div class="full-width-image-on-top-start">

                <img id="startbild" src="<?php echo get_template_directory_uri(); ?>/assets/images/on-top-image.jpg">

            </div>



        <?php } ?>
    </div>

    <div class="container-fluid main-padding innerDiv">
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 startseite-link-to-page">


                <a href=" <?php echo esc_url(get_permalink(get_page_by_title('Angebot'))); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/startseite-bild.jpg">

                    <div class="grey-overlay"><h4>Angebot</h4></div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 startseite-link-to-page secondImg">
                <a href="<?php echo esc_url(get_permalink(get_page_by_title('Orchester'))); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/orchester_fullscreen.png">

                    <div class="grey-overlay"><h4>Orchester</h4></div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 startseite-link-to-page thirdImg">
                <a href="<?php echo esc_url(get_permalink(get_page_by_title('Anmeldung'))); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Startseite_anmeldung.jpg">

                    <div class="grey-overlay"><h4>Anmeldung</h4></div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 startseite-link-to-page">
                <a href="<?php echo esc_url(get_permalink(get_page_by_title('Termine'))); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/startseite-bild.jpg">

                    <div class="grey-overlay"><h4>Termine</h4></div>
                </a>
            </div>


            <div class="row"></div>


        </div>
    </div>
</div>


<div class="container news-on-start">
    <hr>

    <div class="row">

        <div class="col-lg-12"><h2>News</h2></div>

        <?php query_posts('showposts=4'); ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 main-site-post">

                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail();
                } ?>

                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center start-news-title">
                    <a href="<?php the_permalink() ?>" rel="bookmark"
                       title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
                </div>
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 text-links start-news-text">
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <a href="<?php echo get_permalink(); ?>"> Weiterlesen</a>
                </div>

            </div>
        <?php endwhile; ?>


    </div>

</div>
