<div class="container-fluid full-width-image-align">
    <div class="full-width-image-on-top">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/on-top-image.jpg">

    </div>
    <div class="breadcrumbs"> <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?> </div>
</div><!-- container-fluid -->


<div class="max-width-container text-center">
    <div class="container">

        <div class="row">

            <div class="text-center page-title">

                <h2><?php the_title(); ?></h2>

            </div>
        </div>
        <?php while (have_posts()) :
            the_post(); ?>


            <div class="row">


                <div
                    class="
            col-lg-8 col-lg-offset-2
            col-md-8 col-md-offset-2
            col-sm-10 col-sm-offset-1
            col-xs-10 col-xs-offset-1
            text-left">

                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>


        <?php endwhile; // end of the loop. ?>
        <div
            class="
            col-lg-8 col-lg-offset-2
            col-md-8 col-md-offset-2
            col-sm-10 col-sm-offset-1
            col-xs-10 col-xs-offset-1
            text-left">


            <div class="row padding-bottom-15">
                <?php
                $args = array('post_type' => 'Vorstand', 'posts_per_page' => 50, 'orderby' => 'title', 'order' => 'ASC');
                $loop = new WP_Query($args);
                while ($loop->have_posts()) :
                    $loop->the_post(); ?>

                    <div class="row vorstandsmargin">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                            <?php $instrument_bild = get_field("vorstand_bild");
                            if ($instrument_bild != null): ?>

                                <img src="<?php the_field('vorstand_bild'); ?>"/>

                            <?php endif; ?>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 text-left">

                            <b><?php echo the_title(); ?></b>
                            <?php
                            echo '<br>';
                            echo the_field('vorstand_position');
                            ?>

                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>