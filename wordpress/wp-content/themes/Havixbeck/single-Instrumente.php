<?php get_header(); ?>
    <div class="container-fluid full-width-image-align">
        <div class="full-width-image-on-top">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/on-top-image.jpg">

        </div>
        <div class="breadcrumbs"> <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?> </div>
    </div><!-- container-fluid -->
    <div class="container">
        <div class="row">

            <!-- Side navigation -->
            <div class="col-md-3">

                <h2><a href="<?php echo esc_url(get_permalink(get_page_by_title('Angebot'))); ?>"> Angebot</a></h2>
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
            <div class="col-md-9">

                <div class="row" role="main">

                    <?php while (have_posts()) :
                        the_post(); ?>


                        <header>
                            <h1 class="details-header"><?php the_title(); ?></h1>
                        </header>


                        <div class="details-content">

                        <div class="row">
                            <!-- ******** Bild & Content ********  -->
                            <!-- Linke Seite -->
                            <div class="col-md-3">
                                <?php $instrument_bild = get_field("instrument_bild");
                                if ($instrument_bild != null): ?>

                                    <img src="<?php the_field('instrument_bild'); ?>"/>

                                <?php endif; ?>
                            </div>


                            <!-- Rechte Seite -->
                            <div class="col-md-9">
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </div>
                        </div>

                        <!-- ****************************************
                        Unterrichtsschwerpunkte
                        **************************************** -->
                        <?php

                        $instrument_unterrichtsschwerpunkte = get_field("instrument_unterrichtsschwerpunkte");

                        if ($instrument_unterrichtsschwerpunkte != null):

                            ?>
                            <div class="row">
                                <!-- Linke Seite -->
                                <div class="col-md-3 acf-small-cat">
                                    <p>
                                        Unterrichtsschwerpunkte
                                    </p>

                                </div>

                                <!-- Rechte Seite -->
                                <div class="col-md-9">
                                    <p>
                                        <?php the_field('instrument_unterrichtsschwerpunkte'); ?>
                                    </p>

                                </div>
                            </div>

                        <?php endif; ?>

                        <!-- ******** Unterrichtsform ********  -->
                        <?php

                        $instrument_unterrichtsform = get_field("instrument_unterrichtsform");

                        if ($instrument_unterrichtsform != null):

                            ?>
                            <div class="row">
                                <!-- Linke Seite -->
                                <div class="col-md-3 acf-small-cat">
                                    <p>
                                        Unterrichtsform
                                    </p>
                                </div>

                                <!-- Rechte Seite -->
                                <div class="col-md-9">
                                    <p>
                                        <?php the_field('instrument_unterrichtsform'); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- ******** Unterrichtseinheiten ********  -->
                        <?php

                        $instrument_unterrichtseinheiten = get_field("instrument_unterrichtseinheiten");

                        if ($instrument_unterrichtseinheiten != null):

                            ?>
                            <div class="row">
                                <!-- Linke Seite -->
                                <div class="col-md-3 acf-small-cat">
                                    <p>
                                        Unterrichtseinheit
                                    </p>
                                </div>

                                <!-- Rechte Seite -->
                                <div class="col-md-9">
                                    <p>
                                        <?php the_field('instrument_unterrichtseinheiten'); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- ******** Fächer ********  -->
                        <?php

                        $instrument_ergaenzende_facher = get_field("instrument_ergaenzende_facher");

                        if ($instrument_ergaenzende_facher != null):

                            ?>
                            <div class="row">
                                <!-- Linke Seite -->
                                <div class="col-md-3 acf-small-cat">
                                    <p>
                                        Ergänzende Fächer
                                    </p>
                                </div>

                                <!-- Rechte Seite -->
                                <div class="col-md-9">
                                    <p>
                                        <?php the_field('instrument_ergaenzende_facher'); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- ******** Dozenten ********  -->

                        <div class="row">
                            <!-- Linke Seite -->
                            <div class="col-md-3 acf-small-cat">
                                <p>
                                    Dozenten
                                </p>
                            </div>
                            <!-- Rechte Seite -->
                            <div class="col-md-9">
                                <p>
                                    <?php

                                    $gespielteDozenten = get_posts(array(
                                        'post_type' => 'dozenten',
                                        'meta_query' => array(
                                            array(
                                                'key' => 'dozent_spielt_instrument', // name of custom field
                                                'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
                                                'compare' => 'LIKE'
                                            )
                                        )
                                    ));

                                    ?>


                                    <?php if ($gespielteDozenten): ?>
                                <ul class="normal-list">
                                    <?php foreach ($gespielteDozenten as $doctor): ?>
                                        <?php

                                        $photo = get_field('photo', $doctor->ID);

                                        ?>
                                        <li>
                                            <a href="<?php echo get_permalink($doctor->ID); ?>">
                                                <?php echo get_the_title($doctor->ID); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                                </p>
                            </div>

                        </div>



                        <!-- ******** Links ********  -->
                        <?php

                        $instrument_links = get_field("instrument_links");

                        if ($instrument_links != null):

                            ?>
                            <div class="row">
                                <!-- Linke Seite -->
                                <div class="col-md-3 acf-small-cat">
                                    <p>
                                        Links
                                    </p>
                                </div>

                                <!-- Rechte Seite -->
                                <div class="col-md-9">
                                    <p>
                                        <?php the_field('instrument_links'); ?>
                                    </p>
                                </div>
                            </div>

                            </div>
                        <?php endif; ?>

                    <?php endwhile; // end of the loop. ?>


                </div>

            </div>

        </div>

    </div>

<?php get_footer() ?>