<div class="container-fluid full-width-image-align">

    <?php if (has_post_thumbnail()) {
        _e('<div class="imagecrop page-image-top">');
        the_post_thumbnail();
        _e('</div>');
    } ?>
</div>

<div class="max-width-container text-center">
    <div class="container">

        <div class="row">

            <div class="col-lg-10 col-lg-offset-2 text-center page-title">

                <h2><?php the_title(); ?></h2>

            </div>
        </div>

        <?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>


        <div class="row">


            <div
                class="
            col-lg-8 col-lg-offset-2
            col-md-8 col-md-offset-2
            col-sm-10 col-sm-offset-1
            col-xs-10 col-xs-offset-1
            text-left">
                <?php the_content(); ?>
            </div>


            <?php if (is_page("Musikschule")){ ?>

        </div><!-- row-->
        <h2 class="text-center">Angebot</h2>

        <div class="row box-link-container "><!-- upper - row -->
            <div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-2 col-sm-3 col-xs-6 box-link">
                <a href="">
                    <img class="box-link-image"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/guitar.jpg">

                    <div class="box-link-text"> Instrumente</div>
                </a>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 box-link">
                <a href="">
                    <img class="box-link-image"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/sing.jpg">

                    <div class="box-link-text"> Gesang</div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 box-link">
                <a href="">
                    <img class="box-link-image"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/bridge.jpg">

                    <div class="box-link-text"> Ensemble</div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 box-link">
                <a href="">
                    <img class="box-link-image"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/kind.jpg">

                    <div class="box-link-text"> Elementar</div>
                </a>
            </div>

            <!-- bottom row -->

            <div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-2 col-sm-3 col-xs-6 box-link">
                <a href="">
                    <img class="box-link-image"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/table.jpg">

                    <div class="box-link-text"> Fachübergreifend</div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 box-link">
                <a href="">
                    <img class="box-link-image"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/guitar2.jpg">

                    <div class="box-link-text"> Bläserklasse</div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 box-link">
                <a href="">
                    <img class="box-link-image"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/piano2.jpg">

                    <div class="box-link-text"> Fächer A-Z</div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 box-link">
                <a href="">
                    <img class="box-link-image"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/piano.jpg">

                    <div class="box-link-text"> Dozenten A-Z</div>
                </a>
            </div>

        </div>

        <!-- Anmeldung -->
    </div><!-- container -->
</div><!-- max-width -->
<div class="container-fluid">

    <div class="row light-grey-background">
        <div class="max-width-container">
            <div class="col-lg-5 col-lg-offset-1
                    col-sm-5 col-sm-offset-1
                    col-md-5 col-md-offset-1
                    hidden-xs"><!--  -->

                <div class=" anmeldung-image">
                    <img class="hidden-xs"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/Startseite_anmeldung.jpg">
                </div>
            </div>

            <div class="col-lg-4 col-lg-offset-1
                    col-md-4 col-md-offset-1
                    col-sm-4 col-sm-offset-1
                    col-xs-10 col-xs-offset-1"><!--  -->

                <h2>Anmeldung</h2>

                <ul>

                    <li><a href="#">Formulare</a></li>
                    <li><a href="#">Mietinstrumente</a></li>
                    <li><a href="#">Vereinbarungen</a></li>
                    <li><a href="#">Gebühren</a></li>

                </ul>


            </div>
        </div>
    </div>

</div>


<?php } ?>

</div>
</div>



<?php endwhile;
else: ?>
    <p><?php _e('Oops, da ist wohl was schiefgelaufen. Versuchen Sie es später nocheinmal'); ?></p>
<?php endif; ?>

<?php



