<?php 

$args = array('post_type' => 'quiz' );


$the_query = new WP_Query( $args );


?>



<?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>


<div class="grid_6 spotlight project" style="background-color: <?php the_field( 'background_color'); ?>">


	 <a href="<?php the_permalink() ;?>">

	 <img src="<?php the_field('homepage_slider_image'); ?>">

	 </a>
	 <h4>

	 <?php the_title(); ?>

	 </h4>
	
	<p><?php the_field('description'); ?></p>
	<hr>

	<p><a class="btn blue" href="<?php the_permalink() ;?>" style="background-color: <?php the_field( 'background_color'); ?>">

	 Take Quiz &rarr;

	 </a></p>
	 </div>

<?php endwhile; endif; ?>  

