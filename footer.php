	</div>
</div>
<?php if(!is_front_page()): // y'know, since it be an infinite loader + fixed sidebar ?>
<footer class="site-footer">
	<div class="wrap">
		<div class="last-chance-upsell">
			<div class="col">
				<h3>Discover <?php bloginfo('name'); ?></h3>
				<p>El dorado ipsum wu tang flan and all that such bidnass. Al dorado ipsum wu tang flan and all that such bidnass.</p>
			</div>
			<div class="col">
				<h3>Make <?php bloginfo('name'); ?> yours</h3>
				<p>El dorado ipsum wu tang flan and all that such bidnass. Il dorado ipsum wu tang flan and all that such bidnass.</p>
			</div>
			<div class="col">
				<h3>Become a member</h3>
				<p>El dorado ipsum wu tang flan and all that such bidnass. Ol dorado ipsum wu tang flan and all that such bidnass.</p>
			</div>
		</div>
		
		<div class="breadcrumbs">
			<div class="site-branding">
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
			</div>
			<nav class="footer-navigation">
				<?php
					wp_nav_menu(array(
						'theme_location'	=> 'footer-menu',
						'menu_id'			=> 'footer-menu'
					));
				?>
			</nav>
		</div>
		
	</div>
</footer>
<?php endif; ?>
<?php // script calls here, perhaps? ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>