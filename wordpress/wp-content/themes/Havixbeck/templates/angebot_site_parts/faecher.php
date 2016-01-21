<?php

$postTypes = array('Instrumente', 'Ensembles', 'Elementarausbildung');
$containsEverything;


foreach ($postTypes as $post) {
    $args = array('post_type' => $post, 'posts_per_page' => 100, 'orderby' => 'title', 'order' => 'ASC');
    $query = new WP_Query($args);


    if ($query->have_posts()) {

        while ($query->have_posts()) {

            $query->the_post();

            $containsEverything[] = [
                'titel' => $query->post->post_title,
                'url' => get_permalink($query->post->ID)];
        }
    }
}
sort($containsEverything);

foreach ($containsEverything as $value) {

    $name = $value['titel'];
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
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
        <a href="<?php echo $value['url']; ?>"><?php echo $value['titel']; ?></a>
        <br>
    </div>



<?php } ?>

