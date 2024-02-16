<?php /* Template name: Home Page */
get_header();
$main_template = get_field('main_template');

if ($main_template) {
	$hero_group = $main_template['hero_group'];
	$about_me_group = $main_template['about_me_group'];
	$runes_group = $main_template['runes_group'];
	$services_group = $main_template['services_group'];
	$question_answer_group = $main_template['question-answer_group'];
	$testimonials_group = $main_template['testimonials_group'];
	$training_group = $main_template['training_group'];
	$contact_group = $main_template['contact_group'];
};
?>
<main class="home-page">
	<?php if ($hero_group) :
		$overlay = $hero_group['overlay'];
		$subtitle = $hero_group['subtitle'];
		$title = $hero_group['title'];
		$button = $hero_group['button'];
		$caption_first = $hero_group['caption_first'];
		$caption_second = $hero_group['caption_second'];
		$block_id = $hero_group['block_id'];
	?>
		<section class="hero-block" id="<?php echo $block_id ?>">
			<?php if ($overlay) : ?>
				<div class="hero-block__overlay" style="background-image: url(<?php echo $overlay['url'] ?>);"></div>
			<?php endif; ?>
			<div class="container">
				<?php if ($subtitle) : ?>
					<div class="hero-block__subtitle">
						<?php echo $subtitle ?>
					</div>
				<?php endif; ?>
				<?php if ($title) : ?>
					<h1 data-aos="fade-up">
						<?php echo $title ?> </h1>
				<?php endif; ?>

				<div class="hero-block__bottom">
					<?php if ($button) : ?>
						<div class="hero-block__btn">
							<?php echo initLinkHref($button, 'btn', true) ?>
						</div>
					<?php endif; ?>
					<div class="hero-block__caption">
						<?php if ($caption_first) : ?>
							<span><?php echo $caption_first ?></span>
						<?php endif; ?>
						<?php if ($caption_second) : ?>
							<span><?php echo $caption_second ?></span>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($about_me_group) :
		$image = $about_me_group['image'];
		$title = $about_me_group['title'];
		$description = $about_me_group['description'];
		$block_id = $about_me_group['block_id'];
	?>
		<section class="about-block" id="<?php echo $block_id ?>">
			<div class="container">
				<?php if ($image) : ?>
					<div class="about-block__img" data-aos="fade-right">
						<?php echo wp_get_attachment_image($image, 'full'); ?>
					</div>
				<?php endif; ?>
				<div class="about-block__group">
					<?php if ($title) : ?>
						<h2>
							<?php echo $title ?>
						</h2>
					<?php endif; ?>
					<?php if ($description) : ?>
						<div class="about-block__description description">
							<?php echo $description ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($runes_group) :
		$image = $runes_group['image'];
		$image_logo = $runes_group['image-logo'];
		$title = $runes_group['title'];
		$description = $runes_group['description'];
		$block_id = $runes_group['block_id'];
	?>
		<section class="runes-block" id="<?php echo $block_id ?>">
			<div class="container">
				<div class="runes-block__group">
					<?php if ($title) : ?>
						<h2>
							<?php echo $title ?>
						</h2>
					<?php endif; ?>
					<?php if ($description) : ?>
						<div class="runes-block__description description">
							<?php echo $description ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="runes-block__group-img">
					<?php if ($image_logo) : ?>
						<div class="runes-block__img-logo" data-aos="fade-left">
							<?php echo wp_get_attachment_image($image_logo, 'full'); ?>
						</div>
					<?php endif; ?>
					<?php if ($image) : ?>
						<div class="runes-block__img" data-aos="fade-left">
							<?php echo wp_get_attachment_image($image, 'full'); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>


	<?php if ($services_group) :
		$overlay = $services_group['overlay'];
		$image = $services_group['image'];
		$title = $services_group['title'];
		$description = $services_group['description'];
		$button = $services_group['button'];
		$block_id = $services_group['block_id'];
	?>
		<section class="services-block" id="<?php echo $block_id ?>">
			<?php if ($overlay) : ?>
				<div class="services-block__overlay" style="background-image: url(<?php echo $overlay['url'] ?>);"></div>
			<?php endif; ?>
			<div class="container">
				<div class="services-block__box">
					<div class="services-block__group">
						<?php if ($title) : ?>
							<h2>
								<?php echo $title ?>
							</h2>
						<?php endif; ?>
						<?php if ($description) : ?>
							<div class="services-block__description description">
								<?php echo $description ?>
							</div>
						<?php endif; ?>
						<?php if ($button) : ?>
							<div class="services-block__link">
								<?php echo initLinkHref($button, 'btn') ?>
							</div>
						<?php endif; ?>
					</div>
					<?php if ($image) : ?>
						<div class="services-block__img">
							<?php echo wp_get_attachment_image($image, 'full'); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>


	<?php if ($question_answer_group) :
		$image = $question_answer_group['image'];
		$title = $question_answer_group['title'];
		$list = $question_answer_group['list'];
		$block_id = $question_answer_group['block_id'];
	?>
		<section class="question-block" id="<?php echo $block_id ?>">
			<div class="container">
				<?php if ($image) : ?>
					<div class="question-block__img" data-aos="fade-right">
						<?php echo wp_get_attachment_image($image, 'full'); ?>
					</div>
				<?php endif; ?>

				<div class="question-block__group">
					<?php if ($title) : ?>
						<h2>
							<?php echo $title ?>
						</h2>
					<?php endif; ?>
					<div class="question-block__list" id="accordion">
						<?php foreach ($list as $item) {
							$title = $item['title'];
							$description = $item['description'];
						?>
							<div class="group question-block__item">
								<h3>
									<?php echo $title ?>
									<svg width="24.000000" height="13.200012" viewBox="0 0 24 13.2" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<defs>
											<linearGradient id="paint_linear_1_122_0" x1="2.008361" y1="10.865185" x2="23.463644" y2="4.046860" gradientUnits="userSpaceOnUse">
												<stop stop-color="#9A7932" />
												<stop offset="0.271667" stop-color="#E3DA95" />
												<stop offset="0.546667" stop-color="#F3F2BC" />
												<stop offset="1.000000" stop-color="#997832" />
											</linearGradient>
										</defs>
										<path id="arrow_down-[#339]" d="M24 1.66815L22.3128 0L11.9844 9.91348L10.8828 8.85587L10.8888 8.86172L1.7124 0.053894L0 1.69687C2.53561 4.13168 9.61679 10.9284 11.9844 13.2C13.7436 11.5128 12.0288 13.1582 24 1.66815Z" fill="url(#paint_linear_1_122_0)" fill-opacity="1.000000" fill-rule="evenodd" />
									</svg>
								</h3>
								<div class="group question-block__item-desc">
									<p><?php echo $description ?></p>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>

			</div>
		</section>
	<?php endif; ?>


	<?php if ($testimonials_group) :
		$title = $testimonials_group['title'];
		$list = $testimonials_group['list'];
		$block_id = $testimonials_group['block_id'];
	?>
		<section class="testimonials-block" id="<?php echo $block_id ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2>
						<?php echo $title ?>
					</h2>
				<?php endif; ?>
				<div class="swiper mySwiper">
					<div class="swiper-wrapper">
						<?php foreach ($list as $item) {
							$image = $item['image'];
						?>
							<div class="swiper-slide">
								<div class="grid-image" data-fancybox="gallery" data-src="<?php echo wp_get_attachment_image_src($image, 'full')[0]; ?>">
									<?php echo wp_get_attachment_image($image, 'full'); ?>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($training_group) :
		$title = $training_group['title'];
		$description = $training_group['description'];
		$button = $training_group['button'];
		$block_id = $training_group['block_id'];
	?>
		<section class="training-block" id="<?php echo $block_id ?>">
			<div class="container">
				<div class="training-block__group">
					<?php if ($title) : ?>
						<h2 class="training-block__title">
							<?php echo $title ?>
						</h2>
					<?php endif; ?>
					<?php if ($description) : ?>
						<div class="training-block__description description">
							<?php echo $description ?>
						</div>
					<?php endif; ?>
					<?php if ($button) : ?>
						<div class="training-block__link">
							<?php echo initLinkHref($button, 'btn', true) ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($contact_group) :
		$overlay = $contact_group['overlay'];
		$title = $contact_group['title'];
		$description = $contact_group['description'];
		$form_id = $contact_group['form_id'];
		$block_id = $contact_group['block_id'];
	?>
		<section class="contact-block" id="<?php echo $block_id ?>">
			<div class="contact-block__overlay" style="background-image: url(<?php echo $overlay['url'] ?>);"></div>
			<div class="container">
				<div class="contact-block__group">
					<?php if ($title) : ?>
						<h2>
							<?php echo $title ?>
						</h2>
					<?php endif; ?>
					<?php if ($description) : ?>
						<div class="contact-block__description description">
							<?php echo $description ?>
						</div>
					<?php endif; ?>
					<?php if ($form_id) : ?>
						<div class="contact-block__form">
							<?php echo do_shortcode($form_id); ?>
							<div class="form-box"></div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
</main>
<?php get_footer(); ?>