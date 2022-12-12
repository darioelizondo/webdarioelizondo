<?php 

/**
 * Functions: Stylesheets
 * 
 * @package Darío Elizondo
 * 
 */

 function add_darioelizondo_stylesheets() {
 	wp_enqueue_style( 'stylesheets', TDU . '/stylesheets/stylesheets.css', '1.0' );
 }

 add_action( 'wp_enqueue_scripts' , 'add_darioelizondo_stylesheets', 100 );