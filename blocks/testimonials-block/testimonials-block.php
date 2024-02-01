<?php

/**
 * Testimonials Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */



$testimonials_block = get_field('testimonials_block');
?>

<?php if ($testimonials_block) : ?>
	<?php
	$sectionTitle = $testimonials_block['title'];
	if (!$sectionTitle) {
		$sectionTitle = 'Your Title Here';
	}
	$subtitle = $testimonials_block['subtitle'];
	$overlay = $testimonials_block['overlay'];
	$testimonials_list = $testimonials_block['testimonials_list'];

	$condition = new WP_Query(array(
		'post_type' => 'testimonial',
		'posts_per_page' => -1,
		'post__in' => $testimonials_list,
		'orderby' => 'post__in',
		'post_status' => 'publish',
	));
	?>

	<section class="testimonials-block">
		<div class="testimonials-block__overlay" style="background-image: url(<?php echo $overlay['url'] ?>);">
		</div>
		<div class="container">
			<?php if ($subtitle) : ?>
				<div data-aos="fade-up" class="subtitle"><?php echo $subtitle ?></div>
			<?php endif; ?>
			<?php if ($sectionTitle) : ?>
				<h2 data-aos="fade-up" class="title"><?php echo $sectionTitle ?></h2>
			<?php endif; ?>
			<div data-aos="fade-up" class="testimonials__slider swiper">
				<div class="swiper-wrapper">
					<?php if ($testimonials_list) : ?>
						<?php initPostsViewPortfolio($condition, 'post-templates/testimonials-item'); ?>
					<?php endif; ?>
				</div>
			</div>
			<div data-aos="fade-up" class="testimonials-pagination"></div>
		</div>
	</section>
<?php endif; ?>