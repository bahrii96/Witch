<?php /* Template name: Services Page */
get_header();
$services_template = get_field('services_template');

if ($services_template) {
	$hero_group = $services_template['hero_group'];
	$advice_group = $services_template['advice_group'];
	$services_group = $services_template['services_group'];
	$regression_group = $services_template['regression_group'];
	$training_group = $services_template['training_group'];
	$contact_group = $services_template['contact_group'];
};
?>
<main class="services-page">
	<?php if ($hero_group) :
		$overlay = $hero_group['overlay'];
		$title = $hero_group['title'];
		$caption = $hero_group['caption'];
		$block_id = $hero_group['block_id'];

	?>
		<section class="hero-block" id="<?php echo $block_id ?>">
			<div class="container">
				<?php if ($overlay) : ?>
					<div class="hero-block__overlay" style="background-image: url(<?php echo $overlay['url'] ?>);"></div>
				<?php endif; ?>
				<?php if ($title) : ?>
					<h1 data-aos="fade-up">
						<?php echo $title ?>
					</h1>
				<?php endif; ?>
				<?php if ($caption) : ?>
					<div class="hero-block__caption">
						<ul>
							<?php foreach ($caption as $item) {
								$title = $item['title'];
								$link = $item['link'];
							?>

								<?php if ($link) { ?>
									<li class="hover">
										<a href="<?php echo $link ?>"><?php echo $title ?> </a>
									</li>
								<?php } else { ?>
									<li>
										<?php echo $title ?>
									</li>
								<?php	}; ?>
							<?php } ?>
						</ul>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($advice_group) :
		$caption = $advice_group['caption'];
		$title = $advice_group['title'];
		$description = $advice_group['description'];
		$button = $advice_group['button'];
		$block_id = $advice_group['block_id'];
	?>

		<section class="advice-block" id="<?php echo $block_id ?>">
			<div class="container">
				<div class="advice-block__group">
					<?php if ($title) : ?>
						<h2>
							<?php echo $title ?>
						</h2>
					<?php endif; ?>
					<?php if ($description) : ?>
						<div class="advice-block__description description">
							<?php echo $description ?>
						</div>
					<?php endif; ?>
					<?php if ($caption) : ?>
						<div class="advice-block__caption">
							<?php echo $caption ?>
						</div>
					<?php endif; ?>
				</div>
				<?php if ($button) : ?>
					<div class="advice-block__btn">
						<?php echo initLinkHref($button, 'btn', true) ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($services_group) :
		$list = $services_group['list'];

	?>
		<section class="services-block">

			<?php if ($list) : ?>
				<?php foreach ($list as $item) {
					$image = $item['image'];
					$title = $item['title'];
					$image_right = $item['image_right'];
					$description = $item['description'];
					$link = $item['button'];
					$block_id = $item['block_id'];
				?>

					<div class="container">
						<div class="services-block__item <?php echo $image_right ? "right" : "" ?>" id="<?php echo $block_id ?>">
							<?php if ($image) : ?>
								<div class="services-block__img" data-aos="<?php echo $image_right ? 'fade-left' : 'fade-right'; ?>">

									<?php echo wp_get_attachment_image($image, 'full'); ?>
								</div>
							<?php endif; ?>
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
								<?php if ($link) : ?>
									<div class="services-block__btn">
										<?php echo initLinkHref($link, 'btn', true) ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="services-block__line"></div>
				<?php
				} ?>
			<?php endif; ?>

		</section>
	<?php endif; ?>

	<?php if ($regression_group) :
		$description = $regression_group['description'];
		$advice_title = $regression_group['advice_title'];
		$advice_description = $regression_group['advice_description'];
		$advice_caption = $regression_group['advice_caption'];
		$button = $regression_group['button'];
		$block_id = $regression_group['block_id'];
	?>
		<section class="regression-block" id="<?php echo $block_id ?>">
			<div class="container">
				<div class="regression-block__left">
					<?php if ($description) : ?>
						<div class="regression-block__description description">
							<?php echo $description ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="regression-block__group">
					<div class="regression-block__group-box">
						<?php if ($advice_title) : ?> <h2 class="regression-block__title">
								<?php echo $advice_title ?>
							</h2>
						<?php endif; ?>
						<?php if ($advice_description) : ?>
							<div class="regression-block__description description">
								<?php echo $advice_description ?>
							</div>
						<?php endif; ?>
						<?php if ($advice_caption) : ?>
							<div class="regression-block__caption">
								<?php echo $advice_caption ?>
							</div>
						<?php endif; ?>
					</div>
					<?php if ($button) : ?>
						<div class="regression-block__link">
							<?php echo initLinkHref($button, 'btn', true) ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($training_group) :
		$image = $training_group['image'];
		$title = $training_group['title'];
		$description = $training_group['description'];
		$link = $training_group['button'];
		$block_id = $training_group['block_id'];

	?>
		<section class="meditation-block" id="<?php echo $block_id ?>">
			<div class="container">
				<?php if ($image) : ?>
					<div class="meditation-block__img" data-aos="fade-right">
						<?php echo wp_get_attachment_image($image, 'full'); ?>
					</div>
				<?php endif; ?>
				<div class="meditation-block__group">
					<?php if ($title) : ?>
						<h2>
							<?php echo $title ?>
						</h2>
					<?php endif; ?>
					<?php if ($description) : ?>
						<div class="meditation-block__description description">
							<?php echo $description ?>
						</div>
					<?php endif; ?>
					<?php if ($link) : ?>
						<div class="meditation-block__btn">
							<?php echo initLinkHref($link, 'btn', true) ?>
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