<div class="row">


    <!-- Holzblasinstrumente  -->
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 instrument_cat">
        <p>Holzblasinstrumente</p>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 instrument_cat_elem">
        <?php
        $args = array('post_type' => 'Instrumente', 'posts_per_page' => 30, 'orderby' => 'title', 'order' => 'ASC');
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();

            $cat = get_field('instrument_kategorie');

            if ($cat == 'Holzblasinstrumente') { ?>


                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>


            <?php } endwhile; ?>
    </div>

    <!-- Holzblasinstrumente  -->
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 instrument_cat">
        <p>Blechblasinstrumente</p>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 instrument_cat_elem">
        <?php
        $args = array('post_type' => 'Instrumente', 'posts_per_page' => 30, 'orderby' => 'title', 'order' => 'ASC');
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();

            $cat = get_field('instrument_kategorie');

            if ($cat == 'Blechblasinstrumente') { ?>


                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>


            <?php } endwhile; ?>
    </div>

    <!-- Holzblasinstrumente  -->
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 instrument_cat">
        <p>Schlaginstrumente</p>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 instrument_cat_elem">
        <?php
        $args = array('post_type' => 'Instrumente', 'posts_per_page' => 30, 'orderby' => 'title', 'order' => 'ASC');
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();

            $cat = get_field('instrument_kategorie');

            if ($cat == 'Schlaginstrumente') { ?>


                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>


            <?php } endwhile; ?>

    </div>

    <!-- Saiteninstrumente  -->
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 instrument_cat">
        <p>Saiteninstrumente</p>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 instrument_cat_elem">
        <?php
        $args = array('post_type' => 'Instrumente', 'posts_per_page' => 50, 'orderby' => 'title', 'order' => 'ASC');
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();

            $cat = get_field('instrument_kategorie');

            if ($cat == 'Saiteninstrumente') { ?>


                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>


            <?php } endwhile; ?>
    </div>

    <!-- Tasteninstrumente  -->
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 instrument_cat">
        <p>Tasteninstrumente</p>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 instrument_cat_elem">
        <?php
        $args = array('post_type' => 'Instrumente', 'posts_per_page' => 30, 'orderby' => 'title', 'order' => 'ASC');
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();

            $cat = get_field('instrument_kategorie');

            if ($cat == 'Tasteninstrumente') { ?>


                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>


            <?php } endwhile; ?>
    </div>

    <!-- Harmonikainstrumente  -->
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 instrument_cat">
        <p>Harmonikainstrumente</p>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 instrument_cat_elem">
        <?php
        $args = array('post_type' => 'Instrumente', 'posts_per_page' => 30, 'orderby' => 'title', 'order' => 'ASC');
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();

            $cat = get_field('instrument_kategorie');

            if ($cat == 'Harmonikainstrumente') { ?>


                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>


            <?php } endwhile; ?>
    </div>


</div>
