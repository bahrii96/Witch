<?php

if (!function_exists('initBlocksEnqueue')) {
	function initBlocksEnqueue()
	{
		$str = file_get_contents('blocks.json', get_stylesheet_directory());
		$jsonBlocks = json_decode($str, true);
		foreach ($jsonBlocks as $blocks) {
			foreach ($blocks as $block) {
				require_once(get_stylesheet_directory() . '/blocks/' . $block['name'] . '/' . $block['name'] . '-acf.php');
			}
		}
	}
}

initBlocksEnqueue();
