<?php
$args = array('post_type' => 'Dozenten', 'posts_per_page' => 100, 'orderby' => 'title', 'order' => 'ASC');

$loop = new WP_Query($args);
$currenLetter;
$oldLetter;

while ($loop->have_posts()) : $loop->the_post();

    $name = get_the_title();
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
    <?php ?>

    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 someSpace">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
    </div>

<?php endwhile; ?>