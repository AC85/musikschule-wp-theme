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
            <div class="col-md-9">



                <div class="row" role="main">

                    <?php while (have_posts()) :
                    the_post(); ?>


                    <header>
                        <h1 class="details-header"><?php the_title(); ?></h1>
                    </header>

                    <div class="row ">

                        <div class="
            col-lg-10
            col-md-10
            col-sm-10
            col-xs-10 ">

                            <?php $dozenten_bild = get_field( "ensembles_bild" );
                            if($dozenten_bild != null): ?>

                                <img src="<?php the_field('ensembles_bild'); ?>"/>

                            <?php endif; ?>

                        </div>
                    </div>

                    <div class="details-content">

                        <div class="row">
                            <!-- ******** Bild & Content ********  -->

                            <!-- Rechte Seite -->
                            <div class="col-md-9">
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </div>
                        </div>


                        <!-- ******** Dozenten ********  -->

                        <?php

                        $locations = get_field('ensembles_dozent');

                        ?>
                        <?php
                        if ($locations):
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


                                    <?php if ($locations): ?>

                                        <?php foreach ($locations as $location): ?>

                                            <a href="<?php echo get_permalink($location); ?>">
                                                <?php echo get_the_title($location); ?><br>
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
    </div>

<?php get_footer() ?>