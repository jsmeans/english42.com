<?php get_header(); ?>


<div class="grid_12 omega">

<h1>Level: <?php single_cat_title(); ?></h1>




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="title">
	<a href="<?php the_permalink() ;?>">

	   <img src="<?php the_field('homepage_image_slider'); ?>">

	</a>
</div>
	<h3 class="cat-page" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<ul class="info">
		<li>Posted in: <?php the_category(', '); ?></li>
		<li>Written by: <a href="<?php bloginfo('siteurl') ;?>/about/"><?php the_author(); ?></a></li>
		<li>On: <?php the_time('F j, Y'); ?></li>
	</ul>
<div class="excerpt-cat">
	<p><?php the_field( 'description' ); ?></p>
	<p><a class="post-link-cat" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>
</div>
<?php endwhile; else: ?>  

<p>There are no posts or pages</p>

<?php endif; ?>


</div>

<?php get_template_part('content', 'testimonials'); ?>

<?php get_footer(); ?>