</div>
<div class="container-fluid">
<div class="breadcrumbs"> <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?> </div>
</div><!-- container-fluid -->
<div class="container">


    <div class="row">

        <!-- Side navigation -->
        <div class="col-md-3">

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
        <div class="col-md-9">

            <?php while (have_posts()) : the_post(); ?>

                <h2 class="sub-angebot">
                    <?php if (!(is_page("Angebot"))) the_title(); ?>
                </h2>
                <p>
                    <?php the_content(); ?>
                </p>

                <?php if ((is_page("Dozenten A-Z"))) {
                    $args = array('post_type' => 'Dozenten', 'orderby' => 'title', 'order' => 'ASC');

                    $loop = new WP_Query($args);
                    $schonvorhanden = array('letter' => $substring,'count' => 0);
                    $alpha = array('all' => 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',);
                    while ($loop->have_posts()) : $loop->the_post();

                        $name = get_the_title();
                        $substring = substr($name, 0, 1);
                        $namenarray = array('letter' => $substring);

                        $array = $namenarray;
                        $zaehle = array_count_values ( $array );
                        while ( list ( $key, $val ) = each ( $zaehle ) )
                        {
                            //echo $key . ' kommt ' . $val . ' mal vor';
                        }

                        if (in_array(strtolower($namenarray[letter]), $alpha)){


                            echo $namenarray[letter];

                        }




                        ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                        <?php endwhile; } ?>
                <!-- ****************************************************************
                            Muss eventuell statisch programmiert werden
                 ****************************************************************-->
                <?php if ((is_page("Instrumente"))) {
                    $args = array('post_type' => 'Instrumente', 'posts_per_page' => 30, 'orderby' => 'title', 'order' => 'ASC');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();

                        ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                        <?php

                    endwhile;


                } ?>


            <?php endwhile; // end of the loop. ?>

        </div>

    </div>