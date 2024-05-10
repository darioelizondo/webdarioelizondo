<?php 

/**
 * Javascripts
 * 
 * @package Darío Elizondo
 * 
 */ 

// Libs
wp_register_script( 'anime.js', TDU . '/third/anime.min.js', array(), '3.2.1', true );
wp_register_script( 'typeit.js', TDU . '/third/typeit.min.js', array( 'jquery' ), '8.7.1', true );

// App
wp_register_script( 'darioelizondo.viewport', TDU . '/javascripts/production/darioelizondo.viewport.js', array( 'jquery' ), '1.0', true );
wp_register_script( 'darioelizondo.animated-path-cover', TDU . '/javascripts/production/darioelizondo.animated-path-cover.js', array( 'jquery' ), '1.0', true );
wp_register_script( 'darioelizondo.logo', TDU . '/javascripts/production/darioelizondo.logo.js', array( 'jquery' ), '1.0', true );
wp_register_script( 'darioelizondo.menu', TDU . '/javascripts/production/darioelizondo.menu.js', array( 'jquery' ), '1.0', true );
wp_register_script( 'darioelizondo.cover', TDU . '/javascripts/production/darioelizondo.cover.js', array( 'jquery' ), '1.0', true );
wp_register_script( 'darioelizondo.socle', TDU . '/javascripts/production/darioelizondo.socle.js', array( 'jquery' ), '1.0', true );
wp_enqueue_script_module( 'darioelizondo.about-me', TDU . '/javascripts/production/darioelizondo.about-me.js', array( 'jquery' ), '1.0', true );
wp_enqueue_script_module( 'darioelizondo.isInViewport', TDU . '/javascripts/production/darioelizondo.isInViewport.js', array( 'jquery' ), '1.0', true );
