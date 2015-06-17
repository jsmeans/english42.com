<?php get_header(); ?>


<div id="featured"  class="clearfix flexslider">
	<ul class="slides">
		<?php 

		$args= array(
			'post_type' => 'post',
			'category_name' => 'featured',
			);


		$the_query = new WP_Query( $args );


		?>



		<?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
		
		<li>			
			<div>
			<?php get_template_part('content', 'featured'); ?>
			</div>
		</li>
		<?php endwhile; endif; ?>
	</ul>	
</div>

	<div class="whenfp">
	<?php get_template_part('content', 'when_do_you2'); ?>
	</div>

	<div class="grid_12 omega clearfix">
		<div class="grid_6 recent-post2">
			<article>
				<h5>Recent Post</h5>

								<?php 

					$args= array(
						'post_type' => 'post',
						'category__not_in' => array(10, 5),						
						'posts_per_page' => 1,
						);

					$the_query = new WP_Query( $args );

					?>

					<?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

						<?php get_template_part('content', 'post'); ?>

					<?php endwhile; endif; ?>

			</article>
			<div>
				<button class="quiz-link"><a href="index.php?page_id=4">See more blog posts</a></button>
			</div>
		</div>
		<div class="grid_6 omega recent-post" >
			<article>
				<h5>Recent Quiz</h5>
				<?php 

					$args= array(
						'post_type' => 'post',
						'category_name' => 'quizzes',
						'posts_per_page' => 1,
						'cat' => -5,
						);

					$the_query = new WP_Query( $args );

					?>

					<?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

						<?php get_template_part('content', 'post'); ?>

				<?php endwhile; endif; ?>
			</article>
			<div>
				<button class="quiz-link"><a href="index.php?cat=10">See more quizzes</a></button>
			</div>
		</div>

</div>


<?php get_template_part('content', 'testimonials'); ?>

<?php get_footer(); ?>