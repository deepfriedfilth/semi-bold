<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a href="#content" class="skip-link screen-reader-text"><?php esc_html_e('Skip to content', 'semi-bold'); ?></a>
	
	<header id="masthead" class="site-header">
		<div class="site-header-wrapper wrap">
			<div class="site-branding">
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
			</div>
			<nav id="site-navigation" class="main-navigation">
				<?php get_search_form(); ?>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'semi-bold') ?></button>
				<?php
					wp_nav_menu(array(
						'theme_location'	=> 'primary-menu',
						'menu_id'			=> 'primary-menu'
					));
				?>
				<div class="user-area">
					<a href="#" class="user-avatar">
					<?php if(is_user_logged_in()): $user = wp_get_current_user(); ?>
						<?php echo get_avatar($user->ID); ?>
					<?php else: ?>
						<span>👀</span>
					<?php endif; ?>
					</a>
				</div>
			</div>
		</nav>
	</header>
	<div id="content" class="site-content">