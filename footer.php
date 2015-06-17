		<footer>
			<div class="grid_12 omega clearfix">
				<div class="grid_4 footer_left">
				<?php if(dynamic_sidebar('footer_left')): ?>
					<?php else: ?>

					
				<?php endif; ?>


				</div>
				<div class="grid_4 footer_middle">
				<?php if(dynamic_sidebar('footer_middle')): ?>
					<?php else: ?>
					
					<?php endif; ?>
				</div>
				<div class="grid_4 omega footer_right">
				<?php if(dynamic_sidebar('footer_right')): ?>
					<?php else: ?>
					
					<?php endif; ?>
				</div>
			</div>

			<div id="copyright" class="grid_4 alpha">
				<p>&copy; Copyright <?php echo date('Y'); ?> <a href="#">English 42</a>. All rights reserved.</p>
			</div>

			<div id="contact" class="grid_4 ">
				<a href="index.php?page_id=12">Contact</a>
			</div>

			<div id="studio42" class="grid_4 omega">
				<a href="http://www.studio-42.com">Site Design and Development by Studio 42</a>
			</div>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>

