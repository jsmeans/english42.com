<div class="divider gr-d_12">
	<h5>Testimonials</h5>
</div>


<?php 

$args= array(
	'post_type' => 'testimonials',
	'post_per_page' => 1,
	'orderby' => 'rand'
	);

$the_query = new WP_Query( $args );

?>

<?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

<div class="testimonial push_2 grid_10 clearfix">

	<blockquote>&ldquo; <?php the_field( 'testimonial' ); ?> &rdquo;</blockquote>

	<cite>&mdash; <?php the_field( 'name' ); ?></cite>

</div>

<?php endwhile; endif; ?>

