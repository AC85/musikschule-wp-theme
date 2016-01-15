<?php get_header(); ?>

    <div class="container news-container">
<?php

$i = 0;
if (have_posts()) : while (have_posts()) :
    the_post(); ?>
    <div class="row">


    <?php if ($i === 0): ?>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 latest-post">
    <?php else: ?>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <?php endif; ?>
        <a href="<?php echo get_permalink(); ?>"> <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            }
            ?></a>

    </div>
    <?php if ($i++ === 0): ?>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <?php else: ?>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <?php endif; ?>

            <div class="text-right">
                <?php the_time('d.m.Y') ?>
            </div>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <div class="text-justify">
                <?php the_excerpt(); ?>
            </div>
            <a href="<?php echo get_permalink(); ?>"> Mehr lesen...</a>

        </div>
    </div><!-- row -->

    <hr>
<?php endwhile; else: ?>
    <p><?php _e('Das tut uns Leid.Bis jetzt wurden noch keine Beiträge veröffentlicht.'); ?></p>
<?php endif; ?>
    </div>
    </div>
<?php get_footer(); ?>