<?php get_header(); ?>
<div class="container-fluid">
<div class="breadcrumbs"> <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?> </div>
</div>
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
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

            <div class="row" role="main">

                <?php while (have_posts()) : the_post(); ?>


                    <header>
                        <h3 class="sub-angebot"><?php the_title(); ?></h3>
                    </header>


                    <div class="details-content">

                        <div class="row">
                            <!-- ******** Bild & Content ********  -->
                            <!-- Linke Seite -->
                            <div class="col-md-3">
                            <?php $dozenten_bild = get_field( "dozenten_bild" );
                               if($dozenten_bild != null): ?>

                                <img src="<?php the_field('dozenten_bild'); ?>"/>

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
                        Geburtsdatum
                        **************************************** -->
                        <?php

                         $dozenten_geburtsdatum = get_field( "dozenten_geburtsdatum" );

                         if($dozenten_geburtsdatum != null):

                         ?>
                        <div class="row">
                            <!-- Linke Seite -->
                            <div class="col-md-3 acf-small-cat">
                                <p>
                                    Geburtsdatum/Ort
                                </p>

                            </div>

                            <!-- Rechte Seite -->
                            <div class="col-md-9">
                                <p>
                                    <?php the_field('dozenten_geburtsdatum'); ?>
                                </p>

                            </div>
                        </div>

                        <?php endif; ?>

                        <!-- ******** Email ********  -->
                        <?php

                         $dozenten_email = get_field( "dozenten_email" );

                         if($dozenten_email != null):

                         ?>
                        <div class="row">
                            <!-- Linke Seite -->
                            <div class="col-md-3 acf-small-cat">
                                <p>
                                E-Mail
                                </p>
                            </div>

                            <!-- Rechte Seite -->
                            <div class="col-md-9">
                                <p>
                                <?php the_field('dozenten_email'); ?>
                                </p>
                            </div>
                        </div>
                        <?php endif; ?>



                        <!-- ******** Instrumente ********  -->

                        <?php

						$locations = get_field('dozent_spielt_instrument');

						?>
                        <?php
                         if($locations):
                         ?>

                            <div class="row">
                                <!-- Linke Seite -->
                                <div class="col-md-3 acf-small-cat">
                                    <p>
                                    Instrument
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

                        <!-- ******** Ensemble ********  -->

                        <?php

						$locations = get_field('dozenten_ensemble');

						?>
                        <?php
                         if($locations):
                         ?>

                            <div class="row">
                                <!-- Linke Seite -->
                                <div class="col-md-3 acf-small-cat">
                                    <p>
                                    Ensemble
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

                         $instrument_links = get_field( "dozenten_links" );

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
                                <?php the_field('dozenten_links'); ?>
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
</div>

<?php get_footer() ?>