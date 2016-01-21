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
<div class="container">


    <div class="row">

        <!-- Side navigation -->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

            <h2><a href="<?php echo esc_url(get_permalink(get_page_by_title('Anmeldung'))); ?>">Anmeldung</a></h2>
            <?php
            wp_nav_menu(array(
                    'menu' => 'anmeldung',
                    'theme_location' => 'anmeldung',
                    'depth' => 1,
                    'container' => 'div')
            );
            ?>


        </div>

        <!-- Content Area -->
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

            <?php while (have_posts()) : the_post(); ?>

                <h2 class="details-header">
                    <?php if (!(is_page("Anmeldung"))) the_title(); ?>
                </h2>
                <p>
                    <?php the_content(); ?>
                </p>

            <?php endwhile; // end of the loop. ?>

        </div>

    </div>
    </div>