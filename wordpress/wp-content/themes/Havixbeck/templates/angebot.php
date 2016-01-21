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
<div class="container angebot">


    <div class="row">

        <!-- Side navigation -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

            <h2><a href="<?php echo esc_url(get_permalink(get_page_by_title('Angebot'))); ?>">Angebot</a></h2>
            <?php
            wp_nav_menu(array(
                    'menu' => 'left',
                    'theme_location' => 'left',
                    'depth' => 1,
                    'container' => 'div')
            );
            ?>


        </div>

        <!-- Content Area -->
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

            <?php while (have_posts()) : the_post(); ?>

                <?php if (!(is_page("Angebot"))){ ?>
                    <h3 class="sub-angebot">
                        <?php if (!(is_page("Angebot"))) the_title(); ?>
                    </h3>
                <?php }else{ ?>
                    <div class="sub-angebot-platzhalter"></div>
                <?php } ?>
                <div class="content">
                    <?php the_content(); ?>
                </div>


                <!-- ****************************************************************
                            Dozenten
                 ****************************************************************-->
                <?php if ((is_page("Dozenten A-Z"))) {
                    get_template_part('templates/angebot_site_parts/dozenten');
                } ?>

                <!-- ****************************************************************
                            Instrumente
                 ****************************************************************-->

                <?php if ((is_page("Instrumente"))) {
                    get_template_part('templates/angebot_site_parts/instrumente');
                } ?>


                <!-- ****************************************************************
                            Ensembles
                 ****************************************************************-->
                <?php if ((is_page("Ensembles"))) {
                    get_template_part('templates/angebot_site_parts/ensembles');
                } ?>

                <!-- ****************************************************************
                            Elementarausbildung
                 ****************************************************************-->
                <?php if ((is_page("Elementarausbildung"))) {
                    get_template_part('templates/angebot_site_parts/elementarausbildung');
                } ?>

                <!-- ****************************************************************
                            Fächer A-Z
                 ****************************************************************-->
                <?php if ((is_page("Fächer A-Z"))) {
                    get_template_part('templates/angebot_site_parts/faecher');
                } ?>


            <?php endwhile; // end of the loop. ?>

        </div>

    </div><!-- row -->
</div><!-- container -->
