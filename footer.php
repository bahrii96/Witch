<?php // Theme footer 
?>
<?php
$footer_settings = get_field('footer_settings', 'options');
if ($footer_settings) {
	$logo = isset($footer_settings['logo']) ? $footer_settings['logo'] : null;
	$socials = isset($footer_settings['socials']) ? $footer_settings['socials'] : null;
	$second_title = isset($footer_settings['second_title']) ? $footer_settings['second_title'] : null;
	$second_pages = isset($footer_settings['second_pages']) ? $footer_settings['second_pages'] : null;
	$third_title = isset($footer_settings['third_title']) ? $footer_settings['third_title'] : null;
	$time = isset($footer_settings['time']) ? $footer_settings['time'] : null;
	$fourth_title = isset($footer_settings['fourth_title']) ? $footer_settings['fourth_title'] : null;
	$info = isset($footer_settings['info']) ? $footer_settings['info'] : null;
	$text_bottom = isset($footer_settings['text_bottom']) ? $footer_settings['text_bottom'] : null;
	$copyright_left = isset($footer_settings['copyright_left']) ? $footer_settings['copyright_left'] : null;
	$copyright_right = isset($footer_settings['copyright_right']) ? $footer_settings['copyright_right'] : null;
	$footer_color = $footer_settings['footer_color'];
?>


	<footer class="footer <?php echo $footer_color ? '' : "dark-bright"  ?>">
		<div class="container">
			<div class="top">
				<div class="footer__widget first">
					<div class="footer__widget__logo">
						<?php echo wp_get_attachment_image($logo, 'full'); ?>
					</div>
					<?php if ($socials) : ?>
						<ul>
							<?php foreach ($socials as $social) : ?>
								<li>
									<?php
									$icon = $social['icon'];
									$color_icon = $social['color_icon'];
									$link = $social['link'];
									$aria_label = $social['aria_label'];
									?>
									<?php
									if ($link) :
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
									?>
										<a style="background-color: <?php echo $color_icon; ?>;" <?php echo $aria_label ? 'aria-label="' . $aria_label . '"' : '' ?> href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><i class="<?php echo $icon; ?>"></i></a>
									<?php endif; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>

				<?php if ($second_pages) : ?>
					<div class="footer__widget second">
						<h4 class="footer__widget__title"><?php echo $second_title; ?></h4>
						<ul>
							<?php foreach ($second_pages as $link) : ?>
								<li>
									<?php
									if ($link['page']) :
										$link_url = $link['page']['url'];
										$link_title = $link['page']['title'];
										$link_target = $link['page']['target'] ? $link['page']['target'] : '_self';
									?>
										<a class="page" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
									<?php endif; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>

				<?php if ($third_title) : ?>
					<div class="footer__widget third">
						<h4 class="footer__widget__title"><?php echo $third_title; ?></h4>
						<ul>
							<?php foreach ($time as $time_info) : ?>
								<li>
									<?php
									$day = $time_info['day'];
									$status = $time_info['status'];
									?>
									<div class="day"><?php echo $day; ?></div>
									<div class="status"><?php echo $status; ?></div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>

				<?php if ($fourth_title) : ?>
					<div class="footer__widget fourth">
						<h4 class="footer__widget__title"><?php echo $fourth_title; ?></h4>
						<ul>
							<?php foreach ($info as $info_company) : ?>
								<?php
								$icon = $info_company['icon'];
								$label = $info_company['label'];
								$link = $info_company['link'];
								?>
								<li>
									<i class="<?php echo $icon; ?>"></i>
									<div class="info">
										<div class="label"><?php echo $label; ?></div>
										<?php
										if ($link) :
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
										?>
											<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
										<?php endif; ?>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>

				<?php if ($text_bottom) : ?>
					<div class="text_bottom"><?php echo $text_bottom; ?></div>
				<?php endif; ?>
			</div>
		</div>
		<?php if ($copyright_right && $copyright_left) : ?>
			<div class="copyright">
				<div class="container">
					<div class="copyright__left">
						<?php echo do_shortcode($copyright_left); ?>
					</div>
					<div class="copyright__right">
						<?php echo $copyright_right; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</footer>

	<?php
	wp_footer();
	?>
	</body>

	</html>
<?php
} else {
?>
	<p>Помилка: Значення 'footer_settings' є null.</p>
<?php
}
?>

<?php
wp_footer();
?>
</body>

</html>