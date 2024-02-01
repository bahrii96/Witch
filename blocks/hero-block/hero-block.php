<?php

/**
 * Hero Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */



$hero_block = get_field('home_hero');
?>

<?php if ($hero_block) : ?>
	<?php
	$sectionTitle = $hero_block['title'];
	if (!$sectionTitle) {
		$sectionTitle = 'Your Title Here';
	}
	$description = $hero_block['description'];
	$featured_image = $hero_block['featured_image'];

	$form_title = $hero_block['form_title'];
	$form_link = $hero_block['form_link'];
	$form_id = $hero_block['form_id'];
	?>

	<section class="home-hero">
		<?php if ($featured_image) : ?>
			<div class="home-hero__overlay">
				<?php
				echo wp_get_attachment_image($featured_image, 'full', false, ['loading' => 'eager']);
				?>
			</div>
			<div class="home-hero__overlay mobile">
				<?php
				echo wp_get_attachment_image($featured_image, array(400, 300), false, ['loading' => 'eager', 'data-no-lazy' => '1']);
				?>
			</div>
		<?php endif; ?>
		<div class="container">
			<div data-aos="fade-up" class="home-hero__title">
				<?php if ($sectionTitle) : ?>
					<h1><?php echo $sectionTitle; ?></h1>
				<?php endif; ?>
				<?php if ($description) : ?>
					<div class="home-hero__title-desc">
						<p><?php echo $description; ?></p>

					</div>
				<?php endif; ?>
			</div>
			<div data-aos="fade-up" class="home-hero__form">
				<?php if ($form_title) : ?>
					<div class="home-hero__form-title">
						<h2><?php echo $form_title ?></h2>
					</div>
				<?php endif; ?>

				<?php if ($form_link) : ?>
					<div class="home-hero__form-link"> <?php
																							$btnLink = $form_link['url'];
																							$btnTitle = $form_link['title'];
																							$btnTarget = $form_link['target'] ? $form_link['target'] : '_self';

																							?>
						<a href="<?php echo esc_url($btnLink); ?>" target="<?php echo esc_attr($btnTarget); ?>">
							<?php echo esc_html($btnTitle); ?><i class="fas fa-angle-right"></i>
						</a>
					</div>

				<?php endif; ?>

				<?php if ($form_id) : ?>
					<div class="home-hero__form-id"><?php initGravityForm($form_id); ?></div>
				<?php endif; ?>

			</div>
		</div>
	</section>
<?php endif; ?>