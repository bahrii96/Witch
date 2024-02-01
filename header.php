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
	<?php if ($header_settings) : ?>
		<?php
		$header_left = $header_settings['header_left'];
		$header_right = $header_settings['header_right'];
		$header_color = $header_settings['header_color'];
		?>
		<div class="top-bar <?php echo $header_color ? '' : "dark-bright"  ?>" >
			<div class="container">
				<div class="top-bar__left">
					<ul>
						<?php foreach ($header_left as $left) : ?>
							<?php
							$icon = $left['icon'];
							$link = $left['link'];
							?>
							<li>
								<?php
								if ($link) :
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
								?>
									<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><i class="<?php echo $icon; ?>"></i><?php echo esc_html($link_title); ?></a>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="top-bar__right">
					<ul>
						<?php foreach ($header_right as $right) : ?>
							<?php
							$icon = $right['icon'];
							$link = $right['link'];
							$area_label = $right['area_label'];
							?>
							<li>
								<?php
								if ($link) :
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
								?>
									<a href="<?php echo esc_url($link_url); ?>" <?php echo $area_label ? 'aria-label="' . $area_label . '"' : '' ?> target="<?php echo esc_attr($link_target); ?>"><i class="<?php echo $icon; ?>"></i><?php echo esc_html($link_title); ?></a>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<header class="header <?php echo $header_color ? '' : "dark-bright"  ?>">
		<div class="wrapper">
			<div class="header__top">
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
				<?php
				$header_button = isset($header_settings['header_button']) ? $header_settings['header_button'] : null;
				$header_image = isset($header_settings['header_image']) ? $header_settings['header_image'] : null;
				?>
				<?php if ($header_button) : ?>
					<div class="header__top-info">
						<?php
						$link_url = $header_button['url'];
						$link_title = $header_button['title'];
						$link_target = $header_button['target'] ? $header_button['target'] : '_self';
						?>
						<a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
							<svg height="22" width="22" fill="#c30310" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
								<path id="XMLID_2_" d="M165,0C74.019,0,0,74.019,0,165s74.019,165,165,165s165-74.019,165-165S255.981,0,165,0z M225.606,175.605
                                        l-80,80.002C142.678,258.535,138.839,260,135,260s-7.678-1.464-10.606-4.394c-5.858-5.857-5.858-15.355,0-21.213l69.393-69.396
                                        l-69.393-69.392c-5.858-5.857-5.858-15.355,0-21.213c5.857-5.858,15.355-5.858,21.213,0l80,79.998
                                        c2.814,2.813,4.394,6.628,4.394,10.606C230,168.976,228.42,172.792,225.606,175.605z"></path>
							</svg>
						</a>
						<?php echo wp_get_attachment_image($header_image, 'full'); ?>
					</div>
				<?php endif; ?>
				<span class="menu-toggle">
					<small></small>
				</span>
			</div>
			<div class="header__bottom">
				<nav>
					<span class="close"></span>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary',
						'menu_class' => 'main-nav',
						'walker' => new Custom_Walker_Nav_Menu
					));
					?>
				</nav>
			</div>
		</div>
	</header>