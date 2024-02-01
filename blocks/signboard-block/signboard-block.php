<?php

/**
 * Signboard Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */



$signboard_block = get_field('signboard_block');
?>

<?php if ($signboard_block) : ?>
	<?php
	$sectionTitle = $signboard_block['section_title'];
	if (!$sectionTitle) {
		$sectionTitle = 'Your Title Here';
	}
	$overlay = $signboard_block['overlay'];
	$section_caption = $signboard_block['section_caption'];

	$signboard_subtitle = $signboard_block['signboard_subtitle'];
	$signboard_title = $signboard_block['signboard_title'];
	$signboard_description = $signboard_block['signboard_description'];
	$button = $signboard_block['button'];
	?>

	<section class="signboard">
		<?php if ($overlay) : ?>
			<div class="signboard__overlay" style="background-image: url(<?php echo $overlay['url'] ?>);">
			</div>
		<?php endif; ?>
		<div class="container">
			<div data-aos="fade-up" class="signboard__title">
				<?php if ($sectionTitle) : ?>
					<h2><?php echo $sectionTitle; ?></h2>
				<?php endif; ?>
				<?php if ($section_caption) : ?>
					<div class="signboard__title-caption">
						<?php echo $section_caption; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="signboard__block">
				<?php if ($signboard_subtitle) : ?>
					<div data-aos="fade-up" class="signboard__block-subtitle"><?php echo $signboard_subtitle ?></div>
				<?php endif; ?>
				<?php if ($signboard_title) : ?>
					<h2 data-aos="fade-up"><?php echo $signboard_title ?></h2>
				<?php endif; ?>
				<?php if ($signboard_description) : ?>
					<div data-aos="fade-up" class="signboard__block-desc">
						<p><?php echo $signboard_description ?></p>
					</div>
				<?php endif; ?>
				<?php if ($button) : ?>
					<div class="signboard__block-link" data-aos="fade-up">
						<?php
						$btnLink = $button['url'];
						$btnTitle = $button['title'];
						$btnTarget = $button['target'] ? $button['target'] : '_self';
						?>
						<a data-fancybox href="<?php echo esc_url($btnLink); ?>" target="<?php echo esc_attr($btnTarget); ?>">
							<?php echo esc_html($btnTitle); ?>
						</a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>