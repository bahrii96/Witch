<?php

/**
 * Testimonials Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$popup_block_title = get_field('popup_block_title');
$popup_block_id = get_field('popup_block_id');
$show_title_in_popup = get_field('show_title_in_popup');
?>
<?php if ($popup_block_title) : ?>
	<a data-fancybox class="popup-button""><?php echo $popup_block_title; ?></a>
	<div class=" hidden">
		<?php if ($popup_block_id) : ?>
			<div class="header-form-popup modal button-popup">
				<?php if ($show_title_in_popup) : ?>
					<div class="button-popup__title"></div>
				<?php endif; ?>
				<?php initGravityForm($popup_block_id); ?>
			</div>
		<?php endif; ?>
		</div>
	<?php endif; ?>