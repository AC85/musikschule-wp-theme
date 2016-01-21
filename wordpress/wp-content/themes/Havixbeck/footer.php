<?php wp_footer(); ?>
<footer>
    <?php
    function getChildLinksByTitle($title)
    {

        // Get the page as an Object
        $post = get_page_by_title($title);
        $args = array(
            'child_of' => $post->ID,
            'sort_column' => 'menu_order',
            'sort_order' => 'asc',
            'depth' => 1
        );
        $mypages = get_pages($args);

        foreach ($mypages as $children) {
            echo '<a href="', get_page_link($children->ID), '">', $children->post_title, '</a>', '<br>';
        }
    }


    function getLinkByTitle($title)
    {
        $page = get_page_by_title($title);
        $link = get_page_link($page->ID);
        echo $link;
    }

    ?>

    <div class="footer">
        <div class="footer-content">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-2" align="center">
                    <a href="<?php echo home_url(); ?>">
                        <img id="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="<?php getLinkByTitle('Aktuelles') ?>"><h3>AKTUELLES</h3></a>

                    <?php
                    getChildLinksByTitle('Aktuelles');
                    ?>
                    <a href="http://localhost/musikschule-wp-theme/wordpress/?post_type=tribe_events">Aktuelle
                        Termine</a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="<?php getLinkByTitle('Verein') ?>"><h3>VEREIN</h3></a>
                    <?php
                    getChildLinksByTitle('Verein');
                    ?>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="<?php getLinkByTitle('Orchester') ?>"><h3>ORCHESTER</h3></a>
                    <!--<p>Besetzung</p>
                    <p>Dirigent</p>
                    <p>Ehemalige Dirigenten</p>
                    <p>Presse</p>-->
                    <?php
                    getChildLinksByTitle('Orchester');
                    ?>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="<?php getLinkByTitle('Angebot') ?>"><h3>ANGEBOT</h3></a>
                    <!--<p>Instrumente</p>
                    <p>Gesang</p>
                    <p>Ensembles</p>
                    <p>Elementarausbildung</p>
                    <p>Fachübergreifend</p>
                    <p>Bläserklasse</p>
                    <p>Fächer a-z</p>
                    <p>Dozenten a-z</p>
                    <p>Förderstufe</p>-->
                    <?php
                    getChildLinksByTitle('Angebot');
                    ?>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="<?php getLinkByTitle('Anmeldung') ?>"><h3>ANMELDUNG</h3></a>
                    <!--<p>Organisation</p>
                    <p>Förderer</p>-->
                    <?php
                    getChildLinksByTitle('Anmeldung');
                    ?>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="<?php getLinkByTitle('Kontakt') ?>"><h3>KONTAKT</h3></a>
                    <!--<p>Organisation</p>
                    <p>Förderer</p>-->
                    <?php
                    getChildLinksByTitle('Kontakt');
                    ?>
                    <a href="<?php getLinkByTitle('Organisation'); ?>">Organisation</a><br>
                    <a href="<?php getLinkByTitle('Förderer'); ?>">Förderer</a><br>
                    <a href="<?php getLinkByTitle('Kontakt'); ?>">Kontakt</a><br>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-centered">
                        <div id="logo">
                            <p> FOLGE UNS: </p>
                        </div>
                        <div id="logo">
                            <a href="https://www.facebook.com/JugendorchesterHavixbeck/">
                                <div id="footer-fb"></div>
                                <!--<img id="footer-fb" src="<?php echo get_template_directory_uri(); ?>/assets/images/fb_logo.png">-->
                            </a>
                        </div>
                        <div id="logo">
                            <a href="https://www.youtube.com/user/JugendorchesterHav">
                                <div id="footer-yt"></div>

                                <!--<img id="footer-yt" src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube_logo.png">-->
                            </a>
                        </div>
                    </div><!--class col-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Impressum'))); ?>">Impressum</a>
                    </div><!--class col-->
                </div>
            </div><!--row-->
        </div><!--footer-bottom-content-->
    </div><!--footer-bottom-->


</footer>


</body>
</html>
