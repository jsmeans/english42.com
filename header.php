<!DOCTYPE html>

<html>

<head>

	<title>

	<?php 





wp_title( '-' , true, 'right' );



//bloginfo( 'name' )



	?>





	</title>

	<meta name="viewport" content="width=device-width, intial-scale = 1.0">

	<?php wp_head(); ?>

	<link rel="icon" href="http://www.english42.com/favicon.ico" type="image/x-icon" />

	<link rel="shortcut icon" href="http://www.english42.com/favicon.ico" type="image/x-icon" />

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55871902-1', 'auto');
  ga('send', 'pageview');

</script>



</head>



<body>

	<header class="header">

		<div class="grid_12 omega logo">

			<div class="logo grid_3">

				<a href="<?php bloginfo('siteurl'); ?>">

					<img src="<?php bloginfo('template_directory'); ?>

					/img/logoblack.png"></a>

			</div>

			<div class="filter">

				<?php if(dynamic_sidebar('header_right')): ?>

					<?php else: ?>

					<h4>search</h4>

					<?php endif; ?>

			</div>

		</div>

		<div class='grid_12 omega'>

			<nav>

				<?php 

				$args = array(

					'menu' => 'main-menu',

					'echo' => false

				);

				echo strip_tags(wp_nav_menu( $args ), '<a> <li> <ul>');

				?>

			</nav>

		</div>

	</header>

	<div class="container clearfix page-body">