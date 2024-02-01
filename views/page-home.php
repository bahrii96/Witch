<?php /* Template name: Home Page */
get_header();
$main_template = get_field('main_template');

if ($main_template) {
	$sidebar_position = $main_template['sidebar_position'];
	$sidebar_background = $main_template['sidebar_background'];
	$sidebar_text_color = $main_template['sidebar_text_color'];
	$sidebar_text = $main_template['sidebar_text'];
	$main_container_background = $main_template['main_container_background'];
	$main_container_text_color = $main_template['main_container_text_color'];
	$main_container_text = $main_template['main_container_text'];

	$grid = '';
	switch ($sidebar_position) {
		case 'left':
			$grid = 'left';
			break;
		case 'right':
			$grid = 'right';
			break;
		case 'remove':
			$grid = 'remove';
			break;
	}
};
?>
<main>
	<div class="container container-home <?php echo $grid ? $grid : '' ?>">
		<div class="sidebar" style="background-color: <?php echo $sidebar_background ?>;">
			<?php if ($sidebar_text) : ?>
				<div class="sidebar__text" style="color: <?php echo $sidebar_text_color ?>;">
					<?php echo $sidebar_text ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="main-content" style="background-color: <?php echo $main_container_background ?>;">
			<?php if ($main_container_text) : ?>
				<div class="main-content__text" style="color: <?php echo $main_container_text_color ?>;">
					<?php echo $main_container_text ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>