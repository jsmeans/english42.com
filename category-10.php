<?php get_header(); ?>


<div class="grid_12 omega clearfix">
<h1>Category: <?php single_cat_title(); ?></h1>
<?php 

$args = array('post_type' => 'post',
				'cat' => 10,
	);


$the_query = new WP_Query( $args );


?>



<?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>


<div class="grid_6 spotlight project" style="background-color: <?php the_field( 'background_color'); ?>">

<ul class="info">
<li>Posted in: <?php the_category(', '); ?></li>
<li>Written by: <a href="<?php bloginfo('siteurl') ;?>/about/"><?php the_author(); ?></a></li>
<li>On: <?php the_time('F j, Y'); ?></li>
</ul>

	 <img src="<?php the_field('homepage_image_slider'); ?>">

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

<?php endwhile; else: ?>  

<p>There are no posts or pages</p>

<?php endif; ?>

</div>

<?php get_template_part('content', 'testimonials'); ?>

<?php get_footer(); ?>