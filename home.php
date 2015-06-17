<?php get_header(); ?>
<?php 

					$args= array(
						'post_type' => 'post',
						'category__not_in' => array(10),						
						
						);

					$the_query = new WP_Query( $args );

					?>

					<?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

						<?php get_template_part('content', 'post'); ?>

					<?php endwhile; endif; ?>

</div>

<?php get_template_part('content', 'testimonials'); ?>

<?php get_footer(); ?>