<?php

/**
 * About Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */



$about_block = get_field('about_block');
?>

<?php if ($about_block) : ?>
	<?php
	$sectionTitle = $about_block['title'];
	if (!$sectionTitle) {
		$sectionTitle = 'Your Title Here';
	}
	$subtitle = $about_block['subtitle'];
	$description = $about_block['description'];
	$button = $about_block['button'];
	$benefits = $about_block['benefits'];
	$image = $about_block['image'];
	?>

	<section class="about">
		<div class="container">
			<?php if ($benefits) : ?>
				<ul class="about__benefits">
					<?php foreach ($benefits as $item) {
						$icon = $item['icon'];
						$title = $item['title'];
						$desc = $item['description'];
					?>

						<li data-aos="fade-up">
							<?php if ($icon) : ?>
								<div class="about__benefits-logo">
									<?php echo wp_get_attachment_image($icon, 'full'); ?>
								</div>
							<?php endif; ?>
							<div class="about__benefits-inf">
								<?php if ($title) : ?>
									<h3> <?php echo $title ?></h3>
								<?php endif; ?>
								<?php if ($desc) : ?>
									<div class="about__benefits-desc">
										<?php echo $desc ?>
									</div>
								<?php endif; ?>

							</div>

						</li>
					<?php } ?>

				</ul>
			<?php endif; ?>
			<div class="about__box">
				<?php if ($image) : ?>
					<div class="about__box-img" data-aos="fade-up">
						<?php echo wp_get_attachment_image($image, 'full', false, ['loading' => 'eager']); ?>
					</div>
				<?php endif; ?>
				<div class="about__box-inf"> <?php if ($subtitle) : ?>
						<div class="subtitle" data-aos="fade-up"><?php echo $subtitle; ?></div>
					<?php endif; ?>
					<?php if ($sectionTitle) : ?>
						<h2 class="title" data-aos="fade-up"><?php echo $sectionTitle; ?></h2>
					<?php endif; ?>
					<?php if ($description) : ?>
						<div class="about__box-desc" data-aos="fade-up">
							<p><?php echo $description; ?></p>
						</div>
					<?php endif; ?>
					<?php if ($button) : ?>
						<div class="about__box-link" data-aos="fade-up"> <?php
																															$btnLink = $button['url'];
																															$btnTitle = $button['title'];
																															$btnTarget = $button['target'] ? $button['target'] : '_self';

																															?>
							<a data-fancybox href="<?php echo esc_url($btnLink); ?>" class="btn" target="<?php echo esc_attr($btnTarget); ?>">
								<?php echo esc_html($btnTitle); ?><i class="fas fa-chevron-circle-right"></i>
							</a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>