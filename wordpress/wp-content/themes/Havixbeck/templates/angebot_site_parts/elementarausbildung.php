<div class="row">

    <?php
    $args = array('post_type' => 'Elementarausbildung', 'orderby' => 'title', 'order' => 'ASC');
    $loop = new WP_Query($args);
    while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="row elementarpadding">
            <hr>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>

                <?php $elar_bild = get_field("elar_bild");
                if ($elar_bild != null): ?>

                    <img src="<?php the_field('elar_bild'); ?>"/>

                <?php endif; ?>

            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 elar_beschreibung">

                <p><?php the_field('elar_kurzbeschreibung'); ?></p>
            </div>

        </div>
    <?php endwhile; ?>


</div>
