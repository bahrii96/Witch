<?php // Theme footer 
?>




<?php
$footer_settings = get_field('footer_settings', 'options');
if ($footer_settings) {
	$popup_form_id = isset($footer_settings['popup_form_id']) ? $footer_settings['popup_form_id'] : null;
	$popup_name = isset($footer_settings['popup_name']) ? $footer_settings['popup_name'] : null;
	$popup_title = isset($footer_settings['popup_title']) ? $footer_settings['popup_title'] : null;
	$popup_description = isset($footer_settings['popup_description']) ? $footer_settings['popup_description'] : null;
	$popup_overlay = isset($footer_settings['popup_overlay']) ? $footer_settings['popup_overlay'] : null;
	$popup_title_answer = isset($footer_settings['popup_title_answer']) ? $footer_settings['popup_title_answer'] : null;
	$popup_description_answer = isset($footer_settings['popup_description_answer']) ? $footer_settings['popup_description_answer'] : null;


	$phone_icon = isset($footer_settings['phone_icon']) ? $footer_settings['phone_icon'] : null;
	$number = isset($footer_settings['number']) ? $footer_settings['number'] : null;
	$email_icon = isset($footer_settings['email_icon']) ? $footer_settings['email_icon'] : null;
	$email = isset($footer_settings['email']) ? $footer_settings['email'] : null;
	$logo = isset($footer_settings['logo']) ? $footer_settings['logo'] : null;
	$address_icon = isset($footer_settings['address_icon']) ? $footer_settings['address_icon'] : null;
	$address = isset($footer_settings['address']) ? $footer_settings['address'] : null;
	$socials = isset($footer_settings['socials']) ? $footer_settings['socials'] : null;
	$copyright = isset($footer_settings['copyright']) ? $footer_settings['copyright'] : null;

?>
	<div class="hidden popup-box" id="<?php echo $popup_name; ?>" style="background-image: url(<?php echo $popup_overlay['url'] ?>);">

		<h2><?php echo $popup_title ?></h2>
		<div class="popup-box__desc description"><?php echo $popup_description ?></div>
		<div class="header-form-popup modal">
			<?php echo do_shortcode($popup_form_id); ?>
		</div>
	</div>
	<div class="hidden popup-box" id="popup-answer">
		<div class="popup-box__overlay" style="background-image: url(<?php echo $popup_overlay['url'] ?>);"></div>
		<h2><?php echo $popup_title_answer ?></h2>
		<div class="popup-box__desc description"><?php echo $popup_description_answer ?></div>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="footer__top">
				<?php if ($phone_icon) : ?>
					<div class="footer__phone">
						<?php echo wp_get_attachment_image($phone_icon, 'full'); ?>
						<?php echo initLinkHref($number, "") ?>
					</div>
				<?php endif; ?>

				<?php if ($email_icon) : ?>
					<div class="footer__email">
						<?php echo wp_get_attachment_image($email_icon, 'full'); ?>
						<?php echo initLinkHref($email, "") ?>
					</div>
				<?php endif; ?>
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
				<?php if ($address_icon) : ?>
					<div class="footer__address">
						<?php echo wp_get_attachment_image($address_icon, 'full'); ?>
						<?php echo initLinkHref($address, "") ?>
					</div>
				<?php endif; ?>

				<?php if ($socials) : ?>
					<div class="footer__social">
						<?php foreach ($socials as $item) {
							$icon = $item['icon'];
							$icon_on_hover = $item['icon_on_hover'];
							$link = $item['link'];
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
						?>
							<a class="" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>

								<div class="footer__social-def"><?php echo wp_get_attachment_image($icon, 'full'); ?></div>
								<div class="footer__social-hov"> <?php echo wp_get_attachment_image($icon_on_hover, 'full'); ?></div>
							</a>
						<?php } ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<?php if ($copyright) : ?>
			<div class="copyright">
				<div class="container"><?php echo $copyright ?></div>
			</div>
		<?php endif; ?>
	</footer>
	<?php
	wp_footer();
	?>
	</body>

	</html>
<?php
}
?>