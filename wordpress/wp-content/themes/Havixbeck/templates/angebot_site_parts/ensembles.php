<div class="row">

    <?php
    $args = array('post_type' => 'Ensembles', 'orderby' => 'title', 'order' => 'ASC');
    $loop = new WP_Query($args);
    while ($loop->have_posts()) : $loop->the_post();?>
        <div class="row ensemblepadding">
            <hr>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>

                <?php $elar_bild = get_field("ensembles_bild");
                if ($elar_bild != null): ?>

                    <img src="<?php the_field('ensembles_bild'); ?>"/>

                <?php endif; ?>

            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 elar_beschreibung">
                <p><?php the_field('ensembles_kurzbeschreibung'); ?></p>
            </div>
        </div>


    <?php endwhile; ?>


</div>