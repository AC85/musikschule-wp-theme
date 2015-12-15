</div>
<div class="container-fluid full-width-image-align">
    <div class="full-width-image-on-top">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/on-top-image.jpg" >

    </div>
    <div class="breadcrumbs"> <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?> </div>
</div><!-- container-fluid -->
<div class="container">


    <div class="row">

        <!-- Side navigation -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

            <h2>Angebot</h2>
            <?php
            wp_nav_menu(array(
                    'menu' => 'left',
                    'theme_location' => 'left',
                    'depth' => 1,
                    'container' => 'div')
            );
            ?>


        </div>

        <!-- Content Area -->
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">

            <?php while (have_posts()) : the_post(); ?>

                <h2 class="sub-angebot">
                    <?php if (!(is_page("Angebot"))) the_title(); ?>
                </h2>
                <div class="content">
                    <?php the_content(); ?>
                </div>

                <?php if ((is_page("Dozenten A-Z"))) {
                    $args = array('post_type' => 'Dozenten', 'orderby' => 'title', 'order' => 'ASC');

                    $loop = new WP_Query($args);
                    $schonvorhanden = array('letter' => $substring, 'count' => 0);
                    $alpha = array('all' => 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',);
                    while ($loop->have_posts()) : $loop->the_post();

                        $name = get_the_title();
                        $substring = substr($name, 0, 1);
                        $namenarray = array('letter' => $substring);

                        $array = $namenarray;
                        $zaehle = array_count_values($array);
                        while (list ($key, $val) = each($zaehle)) {
                            //echo $key . ' kommt ' . $val . ' mal vor';
                        }

                        if (in_array(strtolower($namenarray[letter]), $alpha)) {


                            echo $namenarray[letter];

                        }


                        ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                    <?php endwhile;
                } ?>
                <!-- ****************************************************************
                            Muss eventuell statisch programmiert werden
                 ****************************************************************-->
                <?php if ((is_page("Instrumente"))) {
                    get_template_part('templates/angebot_site_parts/instrumente');
                } ?>


                <!-- ****************************************************************
                            Ensembles
                 ****************************************************************-->
                <?php if ((is_page("Ensembles"))) {
                    $args = array('post_type' => 'Ensembles', 'orderby' => 'title', 'order' => 'ASC');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();

                        ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                        <?php

                    endwhile;


                } ?>

                <!-- ****************************************************************
                            Elementarausbildung
                 ****************************************************************-->
                <?php if ((is_page("Elementarausbildung"))) {


                    get_template_part('templates/angebot_site_parts/elementarausbildung');
                } ?>


            <?php endwhile; // end of the loop. ?>

        </div>

    </div>