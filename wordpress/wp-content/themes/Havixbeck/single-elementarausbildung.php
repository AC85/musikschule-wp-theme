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
                            <?php $dozenten_bild = get_field( "elar_bild" );
                               if($dozenten_bild != null): ?>

                                <img src="<?php the_field('elar_bild'); ?>"/>

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
                        Unterrichtsform
                        **************************************** -->
                        <?php

                         $instrument_unterrichtsschwerpunkte = get_field( "elar_unterrichtsform" );

                         if($instrument_unterrichtsschwerpunkte != null):

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
                                    <?php the_field('elar_unterrichtsform'); ?>
                                </p>

                            </div>
                        </div>

                        <?php endif; ?>
                        <!-- ****************************************
                        Unterrichtsform
                        **************************************** -->
                        <?php

                         $instrument_unterrichtsschwerpunkte = get_field( "elar_unterrichtseinheit" );

                         if($instrument_unterrichtsschwerpunkte != null):

                         ?>
                        <div class="row">
                            <!-- Linke Seite -->
                            <div class="col-md-3 acf-small-cat">
                                <p>
                                    Unterrichtseinheiten
                                </p>

                            </div>

                            <!-- Rechte Seite -->
                            <div class="col-md-9">
                                <p>
                                    <?php the_field('elar_unterrichtseinheit'); ?>
                                </p>

                            </div>
                        </div>

                        <?php endif; ?>

                        <!-- ****************************************
                        Alter
                        **************************************** -->
                        <?php

                         $instrument_unterrichtsschwerpunkte = get_field( "elar_alter" );

                         if($instrument_unterrichtsschwerpunkte != null):

                         ?>
                        <div class="row">
                            <!-- Linke Seite -->
                            <div class="col-md-3 acf-small-cat">
                                <p>
                                    Alter
                                </p>

                            </div>

                            <!-- Rechte Seite -->
                            <div class="col-md-9">
                                <p>
                                    <?php the_field('elar_alter'); ?>
                                </p>

                            </div>
                        </div>

                        <?php endif; ?>
                        <!-- ******** Dozenten ********  -->

                        <?php

						$locations = get_field('elar_dozent');

						?>
                        <?php
                         if($locations):
                         ?>

                            <div class="row">
                                <!-- Linke Seite -->
                                <div class="col-md-3 acf-small-cat">
                                    <p>
                                    Dozent
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




                <?php endwhile; // end of the loop. ?>


            </div>

        </div>

    </div>
</div>

<?php get_footer() ?>