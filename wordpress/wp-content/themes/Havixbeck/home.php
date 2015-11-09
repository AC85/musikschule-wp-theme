<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<div class="row">


		<div class="col-lg-6 latest-post">
			<?php
			if ( has_post_thumbnail() ) {the_post_thumbnail();}
			?>
		</div>
		<div class="col-lg-6">

			<div class="text-right">
			<?php the_time('d.m.Y') ?>
			</div>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
			<a href="<?php echo get_permalink(); ?>"> Mehr lesen...</a>

		</div>
	</div><!-- row -->

	<hr >
<?php endwhile; else: ?>
	<p><?php _e('Das tut uns Leid.Bis jetzt wurden noch keine Beiträge veröffentlicht.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>