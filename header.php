<!DOCTYPE html>
<html lang="en-US">

<head>
	<?php
	get_template_part('structure/meta');
	wp_head();
	?>
</head>

<body <?php body_class(); ?>>
	<?php $header_settings = get_field('header_settings', 'options'); ?>

	<header class="header">
		<div class="container">

			<nav class="nav-desc">
				<div class="primary_left">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary_left',
						'menu_class' => 'main-nav',
						'walker' => new Custom_Walker_Nav_Menu
					));
					?>
				</div>
				<a href="<?php echo home_url('/'); ?>" class="logo" aria-label="Site Logo">
					<?php
					$custom_logo_id = get_theme_mod('custom_logo_site');
					if ($custom_logo_id) :
						echo wp_get_attachment_image($custom_logo_id, 'full', false, [
							'loading' => 'eager'
						]);
					endif;
					?>
				</a>
				<div class="primary_right">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary_right',
						'menu_class' => 'main-nav',
						'walker' => new Custom_Walker_Nav_Menu
					));
					?>
				</div>

			</nav>
			<div class="header_mob">
				<span class="menu-toggle">
					<small></small>
				</span>
				<a href="<?php echo home_url('/'); ?>" class="logo_mob" aria-label="Site Logo">
					<?php
					$custom_logo_id = get_theme_mod('custom_logo_site');
					if ($custom_logo_id) :
						echo wp_get_attachment_image($custom_logo_id, 'full', false, [
							'loading' => 'eager'
						]);
					endif;
					?>
				</a>
			</div>
			<nav class="nav-mob">
				<?php
				// wp_nav_menu(array(
				// 	'theme_location' => 'primary_left',
				// 	'menu_class' => 'main-nav',
				// 	'walker' => new Custom_Walker_Nav_Menu
				// ));
				?>

				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary_right',
					'menu_class' => 'main-nav',
					'walker' => new Custom_Walker_Nav_Menu
				));
				?>

				<a href="#popup" data-fancybox class="btn">Зв’язатися</a>
			</nav>
		</div>
	</header>