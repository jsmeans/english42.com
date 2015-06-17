<?php get_header(); ?>


<div class="grid_12 omega clearfix">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		<h3>   <?php the_title(); ?></h3>
		<div class="intro">
			<p><?php the_field('description'); ?></p>
		</div>
		<div class="intro">
			<p><img src="<?php the_field('homepage_slider_image'); ?>"></p>
		</div>
		<p><?php the_field('quiz'); ?></p>
		

	 <hr>

	 <div class

	<?php endwhile; else: ?>  

	<p>There are no posts or pages</p>

	<?php endif; ?>
</div>

<?php get_footer(); ?>