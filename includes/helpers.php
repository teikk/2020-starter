<?php

/**
 * Plik zawiera podstawowe funkcje, które będą używane w każdym motywie
 */

function teik_get_logo() {
	$logo = get_theme_mod( 'custom_logo' );
	return $logo;
}

/**
 * Returns URI to given asset
 */
function teik_asset($path) {
	return ASSETS_PATH . $path;
}

function teik_svg($path) {
	if(file_exists($path)) {
		return file_get_contents($path);
	} else {
		$path = TEIK_THEME_DIR .'dist/images/'.$path;
		return file_get_contents($path);
	}
}
/**
 * @param Timber\Image image object
 */
function teik_image_tag($image, $size = 'medium') {
	if(empty($size)) {
		$size = 'medium';
	}
	if(!$image->ID) {
		$image = get_field('default_images','option');
		$image = $image['featured_image'];
		$image = new \Timber\Image($image);
	} else {
		// return '<img src="'. ASSETS_PATH . 'images/default-blog.jpg' .'" alt="Default post image">';
	}
	return get_image_tag($image->ID, $image->alt, $image->title, 'none', $size);
}

function teik_controller($name = '') {
	$c = '\teik\Theme\Controllers\\'.$name.'Controller';
	return $c::instance();
}