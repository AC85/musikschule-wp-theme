<div class="breadcrumbs"> <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?> </div>
</div><!-- container-fluid -->
<div class="container">


    <div class="row">

        <!-- Side navigation -->
        <div class="col-md-3">

            <h2>Anmeldung</h2>
            <?php
            wp_nav_menu(array(
                    'menu' => 'anmeldung',
                    'theme_location' => 'anmeldung',
                    'depth' => 1,
                    'container' => 'div')
            );
            ?>


        </div>

        <!-- Content Area -->
        <div class="col-md-9">

            <?php while (have_posts()) : the_post(); ?>

                <h2>
                    <?php if (!(is_page("Anmeldung"))) the_title(); ?>
                </h2>
                <p>
                    <?php the_content(); ?>
                </p>

            <?php endwhile; // end of the loop. ?>

        </div>

    </div>