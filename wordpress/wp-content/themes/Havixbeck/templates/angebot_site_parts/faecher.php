<?php

$postTypes = array('Instrumente','Ensembles','Elementarausbildung');
$containsEverything;


foreach ($postTypes as $post){
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

foreach ($containsEverything as $value) { ?>

<a href="<?php echo $value['url']; ?>"><?php echo $value['titel']; ?></a>
<br>

<?php } ?>