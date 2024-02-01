<?php /* Template name: Contact Template */
get_header();
$contact_template = get_field('contact_template');
$show_form_block = $contact_template['show_form_block'];
$form_block = $contact_template['form_block_group'];
$show_map = $contact_template['show_map'];
$map = $contact_template['map_group'];

$show_information_block = $contact_template['show_information_block'];
$information_group = $contact_template['information_group'];
?>

<main>
	<div class="template__title">
		<h1><?php the_title(); ?></h1>
	</div>

	<?php if ($show_form_block) : ?>
		<?php
		$title_form = $form_block['title_form'];
		$form_id = $form_block['form_id'];
		$title_list = $form_block['title_list'];
		$list_information = $form_block['list_information'];

		?>
		<section class="form-block">
			<div class="container">
				<div class="form-block__box"> <?php if ($form_id) : ?>
						<div class="form-block__form">
							<h2><?php echo	$title_form ?></h2>
							<div class="form-block__id"><?php initGravityForm($form_id); ?>
							</div>
						</div>
						<div class="form-block__inf">
							<h2 class="form-block__inf-title"> <?php echo $title_list ?></h2>
							<?php if ($list_information) : ?>
								<ul>
									<?php foreach ($list_information as $item) {
																						$icon = $item['icon'];
																						$title = $item['title'];
																						$link = $item['link'];

									?> <li>
											<i class="<?php echo $icon ?>"></i>
											<div class="form-block__inf-box">
												<h3> <?php echo $title ?></h3>
												<?php if ($link) : ?>
													<div class="home-hero__form-link">
														<?php
																							$btnLink = $link['url'];
																							$btnTitle = $link['title'];
																							$btnTarget = $link['target'] ? $link['target'] : '_self';

														?>
														<a href="<?php echo esc_url($btnLink); ?>" target="<?php echo esc_attr($btnTarget); ?>">
															<?php echo esc_html($btnTitle); ?>
														</a>
													</div>
												<?php endif; ?>
											</div>
										</li> <?php } ?>
								</ul>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($show_information_block) : ?>
		<?php $information_text = $information_group['information_text']; ?>
		<section class="inf-block">
			<div class="container"> <?php if ($information_text) : ?>
					<div class="inf-block__text">
						<?php echo $information_text ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($show_map) : ?>
		<?php $map_iframe = $map['map_iframe']; ?>
		<section class="map-block">
			<?php if ($map_iframe) : ?>
				<div class="map-block__iframe">
					<?php echo $map_iframe ?>
				</div>
			<?php endif; ?>
		</section>
	<?php endif; ?>

</main>
<?php get_footer(); ?>