</div>
<div class="container-fluid full-width-image-align">
    <div class="full-width-image-on-top">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/on-top-image.jpg" >

    </div>
    <div class="breadcrumbs"> <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?> </div>
</div><!-- container-fluid -->
<div class="container">


    <div class="row">

        <!-- Side navigation -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

            <h2>Anmeldung</h2>
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
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">

            <?php while (have_posts()) : the_post(); ?>

                <h2>
                    <?php if (!(is_page("Anmeldung"))) the_title(); ?>
                </h2>
                <p>
                    <?php the_content(); ?>
                </p>

            <?php endwhile; // end of the loop. ?>

        </div>

    </div>