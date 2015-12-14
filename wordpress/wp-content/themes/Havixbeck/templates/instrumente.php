<section id="primary">
    <div id="content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php the_title(); ?>
            <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>


        <?php /* Start the Loop */ ?>
        <ul class="freelancer">
            <?php $args = array( 'post_type' => 'Instrumente', 'posts_per_page' => 30, 'orderby' => 'rand' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
                echo '<li>';
                the_title('<a>', '</a>');

                echo '</li>';
            endwhile; ?>
        </ul><!-- end .freelancer -->



    </div><!-- #content -->
</section><!-- #primary -->