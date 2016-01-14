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
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

            <h2>Angebot</h2>
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
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">

            <?php while (have_posts()) : the_post(); ?>

                <h2 class="sub-angebot">
                    <?php if (!(is_page("Angebot"))) the_title(); ?>
                </h2>
                <div class="content">
                    <?php the_content(); ?>
                </div>


                <?php if ((is_page("Dozenten A-Z"))) {
                    $args = array('post_type' => 'Dozenten', 'posts_per_page' => 100, 'orderby' => 'title', 'order' => 'ASC');

                    $loop = new WP_Query($args);
                    $currenLetter;
                    $oldLetter;

                    while ($loop->have_posts()) : $loop->the_post();

                        $name = get_the_title();
                        $substring = substr($name, 0, 1);

                        $currentLetter = $substring;

                            ?>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 instrument_cat letter">
                                <?php

                                    if ($oldLetter != $currentLetter) {

                                        echo $currentLetter;


                                        $oldLetter = $currentLetter;

                                    }
                                ?>

                            </div>
                        <?php ?>

            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 someSpace">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                </div>

                    <?php endwhile;
                } ?>


                <?php if ((is_page("Instrumente"))) {
                    get_template_part('templates/angebot_site_parts/instrumente');
                } ?>


                <!-- ****************************************************************
                            Ensembles
                 ****************************************************************-->
                <?php if ((is_page("Ensembles"))) {
                    $args = array('post_type' => 'Ensembles', 'orderby' => 'title', 'order' => 'ASC');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();

                        ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                        <?php

                    endwhile;


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
