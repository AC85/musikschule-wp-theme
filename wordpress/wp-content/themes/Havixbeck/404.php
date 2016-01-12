<?php get_header(); ?>


<div class="row">
    <div class="text-center">
        <h1>Diese Seite konnte nicht gefunden werden.</h1>
    </div>
    <div class="col-lg-8 col-lg-offset-2
                col-md-8 col-md-offset-2
                col-sm-8 col-sm-offset-2
                col-xs-10 col-xs-offset-1">

        <p>Gründe dafür könnten sein, dass Sie eine falsche oder veraltete URL aufgerufen haben – bitte überprüfen Sie
            diese noch einmal. Oder aber wir haben die betreffende Seite archiviert, verschoben oder umbenannt.

            Vielleicht können Sie den von Ihnen gewünschten Inhalt über unsere Startseite finden.</p>

        <div class="text-center">
            <a href="<?php echo get_home_url(); ?>">Zur Startseite</a>
        </div>
        <p>
            Oder dürfen wir Ihnen direkt behilflich sein? Schreiben Sie uns eine E-Mail oder rufen Sie uns einfach an.
        </p>

        <div class="text-center">
            <a href="<?php echo get_page_link(get_page_by_title("Kontakt")->ID); ?>">Kontakt aufnehmen</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
