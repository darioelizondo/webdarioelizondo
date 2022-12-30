<?php 

 /**
 * Function: Image Config 
 *
 * @package Darío Elizondo
 * 
 */ 



/**
 * Add Image Sizes
 */
function darioelizondo_add_image_sizes() {
	add_image_size( 'proyect-item', 500, 665, true );
}
add_action( 'init', 'darioelizondo_add_image_sizes' );

/**
 * Add Image to Post
 */
function darioelizondo_add_image_to_post() {	
	add_theme_support( 'post-thumbnails' );
}
add_action( 'init', 'darioelizondo_add_image_to_post' );

/**
 * Add Mime Type
 *
 * @param  array $mimes Mimes.
 * @return array */
function darioelizondo_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'darioelizondo_mime_types' );

