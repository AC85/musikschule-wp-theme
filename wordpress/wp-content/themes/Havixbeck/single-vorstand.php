<?php get_header(); ?>
<div class="container-fluid">
<div class="breadcrumbs"> <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?> </div>
</div>
<div class="container">
    <div class="row">
        <!-- Content Area -->
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

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

                        

                    </div>
                    <?php endif; ?>

                <?php endwhile; // end of the loop. ?>


            </div>

        </div>

    </div>
</div>
</div>

<?php get_footer() ?>