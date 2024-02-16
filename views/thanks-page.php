<?php /* Template name: Thanks Page */
get_header();
$thanks_title = get_field('thanks_title');
$thanks_description = get_field('thanks_description');
$thanks_overlay = get_field('thanks_overlay');

?>
<main class="thanks-page">
	<section class="thanks">
		<div class="container">
			<?php if ($thanks_overlay) : ?>
				<div class="thanks__overlay" style="background-image: url(<?php echo $thanks_overlay['url'] ?>);"></div>
			<?php endif; ?>
			<?php if ($thanks_title) : ?>
				<h2>
					<?php echo $thanks_title ?>
				</h2>
			<?php endif; ?>
			<?php if ($thanks_description) : ?>
				<div class="thanks__caption description">
					<?php echo $thanks_description ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>