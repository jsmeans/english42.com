<?php get_header(); ?>


<p> This is the single-work.php file.</p>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<h3>   <?php the_title(); ?></h3>
	<p><?php the_field('description'); ?></p>
	<hr>

<?php endwhile; else: ?>  

<p>There are no posts or pages</p>

<?php endif; ?>


<?php get_footer(); ?>