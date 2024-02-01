<?php

/**
 * Services Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */



$services_block = get_field('services_block');
?>

<?php if ($services_block) : ?>
	<?php
	$sectionTitle = $services_block['title'];
	if (!$sectionTitle) {
		$sectionTitle = 'Your Title Here';
	}
	$subtitle = $services_block['subtitle'];
	$services_list = $services_block['services_list'];

	$service = new WP_Query(array(
		'post_type' => 'service',
		'posts_per_page' => -1,
		'post__in' => $services_list,
		'orderby' => 'post__in',
		'post_status' => 'publish',
	));
	?>

	<section class="services-block">
		<div class="container">
			<?php if ($subtitle) : ?>
				<div class="subtitle" data-aos="fade-up"><?php echo $subtitle ?></div>
			<?php endif; ?>
			<?php if ($sectionTitle) : ?>
				<h2 class="title" data-aos="fade-up"><?php echo $sectionTitle ?></h2>
			<?php endif; ?>

			<div data-aos="fade-up" class="services__slider swiper-container swiper">
				<div class="swiper-wrapper">
					<?php if ($services_list) : ?>
						<?php initPostsViewPortfolio($service, 'post-templates/service-item'); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="services-pagination"></div>
		</div>

	</section>
<?php endif; ?>