<?php get_header(); ?>
</div>
<div class="container-fluid">
<div class="breadcrumbs"> <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?> </div>
</div>
<div class="container">
    <div class="row">

        <!-- Side navigation -->
        <div class="col-md-3">


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

                <?php while (have_posts()) : the_post(); ?>


                    <header>
                        <h1 class="details-header"><?php the_title(); ?></h1>
                    </header>


                    <div class="details-content">

                        <div class="row">
                            <!-- ******** Bild & Content ********  -->
                            <!-- Linke Seite -->
                            <div class="col-md-3">
                            <?php $instrument_bild = get_field( "instrument_bild" );
                               if($instrument_bild != null): ?>

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

                         $instrument_unterrichtsschwerpunkte = get_field( "instrument_unterrichtsschwerpunkte" );

                         if($instrument_unterrichtsschwerpunkte != null):

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

                         $instrument_unterrichtsform = get_field( "instrument_unterrichtsform" );

                         if($instrument_unterrichtsform != null):

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

                         $instrument_unterrichtseinheiten = get_field( "instrument_unterrichtseinheiten" );

                         if($instrument_unterrichtseinheiten != null):

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

                         $instrument_ergaenzende_facher = get_field( "instrument_ergaenzende_facher" );

                         if($instrument_ergaenzende_facher != null):

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

                        <?php

						$locations = get_field('instrument_by_dozenten');

						?>
                        <?php
                         if($locations):
                         ?>

                            <div class="row">
                                <!-- Linke Seite -->
                                <div class="col-md-3 acf-small-cat">
                                    <p>
                                    Dozenten
                                    </p>
                                </div>

                                <!-- Rechte Seite -->
                                <div class="col-md-9">


						<?php if( $locations ): ?>

							<?php foreach( $locations as $location ): ?>

									<a href="<?php echo get_permalink( $location); ?>">
										<?php echo get_the_title( $location ); ?><br>
									</a>

							<?php endforeach; ?>

						<?php endif; ?>


                            </div>
                        </div>
                        <?php endif; ?>


                        <!-- ******** Links ********  -->
                        <?php

                         $instrument_links = get_field( "instrument_links" );

                         if($instrument_links != null):

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

<?php the_footer(); ?>