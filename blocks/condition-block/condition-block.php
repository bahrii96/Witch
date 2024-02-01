<?php

/**
 * Condition Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */



$condition_block = get_field('condition_block');
?>

<?php if ($condition_block) : ?>
	<?php
	$sectionTitle = $condition_block['title'];
	if (!$sectionTitle) {
		$sectionTitle = 'Your Title Here';
	}
	$subtitle = $condition_block['subtitle'];
	$caption = $condition_block['caption'];
	$image = $condition_block['image'];
	$condition_list = $condition_block['condition_list'];

	$condition = new WP_Query(array(
		'post_type' => 'condition',
		'posts_per_page' => -1,
		'post__in' => $condition_list,
		'orderby' => 'post__in',
		'post_status' => 'publish',
	));
	?>

	<section class="condition-block">
		<div class="container">
			<?php if ($subtitle) : ?>
				<div data-aos="fade-up" class="subtitle"><?php echo $subtitle ?></div>
			<?php endif; ?>
			<?php if ($sectionTitle) : ?>
				<h2 data-aos="fade-up" class="title"><?php echo $sectionTitle ?></h2>
			<?php endif; ?>
			<?php if ($caption) : ?>
				<div data-aos="fade-up" class="condition-block__caption"><?php echo $caption ?></div>
			<?php endif; ?>

			<div data-aos="fade-up" class="condition-block__box">
				<div class="condition-block__img">
					<?php echo wp_get_attachment_image($image, 'full'); ?>
				</div>
				<?php if ($condition_list) : ?> <ul>
						<?php initPostsViewPortfolio($condition, 'post-templates/condition-item'); ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>