<?php


$supporter = array("Anwaltskanzlei M. Henning & M. Henrichmann",
    "Aupers - alles für`s Büro",
    "Auto - Freizeit Kowol-Krimphoff",
    "Auto Frede",
    "Bäumer Brillenmode",
    "BikeSport Michael Günther",
    "Bild und Ton Norbert Krug",
    "Brenda`s Shop für Hunde- und Katzenfreunde",
    "Bücher Janning Havixbeck GmbH",
    "Die Continentale Landesdirektion Frerichs GmbH",
    "Dr. Andreas Wohlmeiner - Facharzt für Orthopädie",
    "Einrichtungshaus Frede",
    "Eiscafe SAN REMO Giovanni Zuppa e.K.",
    "Elektro Dertenkötter",
    "Elektrotechnik Philippskötter",
    "Fahrschule Christoph Nienhaus",
    "Fahrschule Frank Kästner",
    "FIV Arndt Hanning GmbH",
    "Fliesenfachgeschäft Mühlenbeck GmbH",
    "FMB Fachmarkt Blasinstrumente GmbH",
    "Fraune Trockenbau und Akustik GmbH",
    "Gäher Sanitätshaus Orthopädie-Technik",
    "Gasthof und Hotel Kemper",
    "GEERS Gutes Hören",
    "Gelsenwasser AG",
    "Getränke Büscher",
    "Goldschmiede Philippskötter",
    "Handwerkerservice Ewald Stabel",
    "Haus der Klaviere Gottschling",
    "HEG Pflanzen und Blumen Georg Pöpping",
    "Heizung und Sanitär Friedbernd Krotoszynski",
    "Hof Mormann",
    "KFZ Meisterbetrieb Markfort GBR",
    "Kio - Praxis für Physiotherapie",
    "Klute`s Landgasthof",
    "LVM Versicherung",
    "Maler- und Lackiermeisterbetrieb Schwanemeier",
    "Menkenmusic",
    "Naturheilpraxis Anja Plessow",
    "Orthopädie & Schuh Eschhaus",
    "Overwaul - Das Landgasthaus",
    "Photography Jennifer Hejna",
    "Pizzeria Italia",
    "Ponyhof Schulze Schleithoff",
    "Provinzial Versicherungen Geschäftsstelle Frede",
    "PSD Bank Westfalen-Lippe eG",
    "Rechtsanwälte Nesbit und Böggemeyer",
    "RUPIEPER Bauwerkserhaltung GmbH & Co. KG",
    "Sparkasse Westmünsterland",
    "Steuerberater Udo Scholbrock",
    "Tischlerei Spiekermann",
    "Volksbank Baumberge",
    "Wanjas - café - bar- bistro",
    "weiperfriseure",
    "Westfälische Nachrichten",
    "Zahnmedizin Dr. Frank Potthast",
    "Zimmerei Heinrich Thier");

sort($supporter);
$supporter = array_unique($supporter);

?>


    <div class="container-fluid full-width-image-align">

        <?php if (has_post_thumbnail()) {
            _e('<div class="imagecrop page-image-top-main">');
            the_post_thumbnail();
            _e('</div>');
        } else { ?>

            <div class="full-width-image-on-top">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/on-top-image.jpg">

            </div>


        <?php } ?>
    </div>

    <div class="max-width-container text-center">
    <div class="container elar_beschreibung">

    <div class="row">

        <div class="text-center page-title">

            <h2><?php the_title(); ?></h2>

        </div>
    </div>

<?php if (have_posts()) : while (have_posts()) :
    the_post(); ?>


    <div class="row">


        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-xs-12 text-left elar_beschreibung">
            <?php  the_content();?>

        </div>
        <div
            class="
            col-lg-8 col-lg-offset-3
            col-md-8 col-md-offset-3
            col-sm-10 col-sm-offset-1
            col-xs-10 col-xs-offset-1
            text-center">



            <?php
            foreach ($supporter as $value) {

                $name = $value;
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
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 text-left">
                    <?php echo $value; ?>
                    <br>
                </div>


            <?php } ?>
        </div>


    </div><!-- row-->
    </div><!-- container -->
    </div><!-- max-width -->


<?php endwhile;
else: ?>
    <p><?php _e('Oops, da ist wohl was schiefgelaufen. Versuchen Sie es später nocheinmal'); ?></p>
<?php endif; ?>

<?php






