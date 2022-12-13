<?php 

/**
 * Javascripts
 * 
 * @package Darío Elizondo
 * 
 */ 

// Libs
wp_register_script( 'anime.js', TDU . '/third/anime.min.js', array(), '3.2.1', true );

// App
wp_register_script( 'darioelizondo.animated-path-cover', TDU . '/javascripts/darioelizondo.animated-path-cover.js', array('jquery'), '1.0', true );
wp_register_script( 'darioelizondo.logo', TDU . '/javascripts/darioelizondo.logo.js', array('jquery'), '1.0', true );
