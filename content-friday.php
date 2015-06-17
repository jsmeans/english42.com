
<?php 

$args = array('post_type' => 'friday' );


$the_query = new WP_Query( $args );


?>



<?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>


<div class="grid_12 day" style="background-color: <?php the_field( 'background_color'); ?>">


	 <!-- <a href="<?php the_permalink() ;?>">

	 <img src="<?php the_field('homepage_slider_image'); ?>">

	 </a> -->
	 <h6>

	 <?php the_field('level'); ?>: <?php the_field('pronunciation'); ?> Adj. 1.<?php the_field('definition'); ?>

	 </h6>
	
	<p><?php the_field('info'); ?></p>
	<hr>

	<p><a class="btn blue" href="index.php?cat=4">

	 Start Learning!

	 </a></p>
	 </div>

<?php endwhile; endif; ?>  