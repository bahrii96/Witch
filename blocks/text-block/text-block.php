<?php

/**
 * About Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */



$text_block = get_field('text_block');
?>

<?php if ($text_block) : ?>
	<?php
	$sectionTitle = $text_block['title'];
	if (!$sectionTitle) {
		$sectionTitle = 'Your Title Here';
	}
	$description = $text_block['description'];
	$background_color = $text_block['background_color'];
	?>

	<section class="text-block" style="<?php echo $background_color ? 'background-color: ' . $background_color . ' ' : ''; ?>">
		<?php if ($sectionTitle) : ?>
			<h2 class="text-block__title"><?php echo $sectionTitle; ?></h2>
		<?php endif; ?>
		<?php if ($description) : ?>
			<div class="text-block__description"><?php echo $description; ?></div>
		<?php endif; ?>
	</section>
<?php endif; ?>