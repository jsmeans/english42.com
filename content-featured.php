<div class="clearfix">
<div class="title">
	<a href="<?php the_permalink() ;?>">

	   <img src="<?php the_field('homepage_image_slider'); ?>">

	</a>
</div>


<div class="excerpt">


<?php if(is_single()): ?>
	<h3 class="post_title" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<ul class="info">
		<li>Posted in: <?php the_category(', '); ?></li>
		<li>Written by: <a href="<?php bloginfo('siteurl') ;?>/about/"><?php the_author(); ?></a></li>
		<li>On: <?php the_time('F j, Y'); ?></li>
	</ul>
	<?php the_field( 'full_text' ); ?>
	<?php comments_template(); ?>

<?php else: ?>
	<h3 class="front-page-featured" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<ul class="info">
		<li>Posted in: <?php the_category(', '); ?></li>
		<li>Written by: <a href="<?php bloginfo('siteurl') ;?>/about/"><?php the_author(); ?></a></li>
		<li>On: <?php the_time('F j, Y'); ?></li>
	</ul>
	<div class="excerpt">
		<p class="description"><?php the_field( 'description' ); ?></p>
	</div>
	<div>
		<p><a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>
	</div>

<?php endif; ?>
</div>
</div>