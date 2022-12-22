<?php 

/**
 * Function: Custom posts types
 * 
 * @package Darío Elizondo
 * 
 */ 


// Register Proyects Post Type

function proyects() {

	$labels = array(
		'name'                  => _x( 'Proyects', 'Post Type General Name', 'darioelizondo' ),
		'singular_name'         => _x( 'Proyect', 'Post Type Singular Name', 'darioelizondo' ),
		'menu_name'             => __( 'Proyects', 'darioelizondo' ),
		'name_admin_bar'        => __( 'Proyects', 'darioelizondo' ),
		'archives'              => __( 'Proyect Archives', 'darioelizondo' ),
		'attributes'            => __( 'Proyect Attributes', 'darioelizondo' ),
		'parent_item_colon'     => __( 'Parent proyect:', 'darioelizondo' ),
		'all_items'             => __( 'All proyects', 'darioelizondo' ),
		'add_new_item'          => __( 'Add New proyect', 'darioelizondo' ),
		'add_new'               => __( 'Add New', 'darioelizondo' ),
		'new_item'              => __( 'New proyect', 'darioelizondo' ),
		'edit_item'             => __( 'Edit proyect', 'darioelizondo' ),
		'update_item'           => __( 'Update proyect', 'darioelizondo' ),
		'view_item'             => __( 'View proyect', 'darioelizondo' ),
		'view_items'            => __( 'View proyects', 'darioelizondo' ),
		'search_items'          => __( 'Search proyect', 'darioelizondo' ),
		'not_found'             => __( 'Not found', 'darioelizondo' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'darioelizondo' ),
		'featured_image'        => __( 'Featured Image', 'darioelizondo' ),
		'set_featured_image'    => __( 'Set featured image', 'darioelizondo' ),
		'remove_featured_image' => __( 'Remove featured image', 'darioelizondo' ),
		'use_featured_image'    => __( 'Use as featured image', 'darioelizondo' ),
		'insert_into_item'      => __( 'Insert into item', 'darioelizondo' ),
		'uploaded_to_this_item' => __( 'Uploaded to this proyect', 'darioelizondo' ),
		'items_list'            => __( 'Proyects list', 'darioelizondo' ),
		'items_list_navigation' => __( 'Proyects list navigation', 'darioelizondo' ),
		'filter_items_list'     => __( 'Filter proyects list', 'darioelizondo' ),
	);
	$rewrite = array(
		'slug'                  => 'proyects',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Proyect', 'darioelizondo' ),
		'description'           => __( 'Proyects for Dario Elizondo', 'darioelizondo' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-media-code',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'proyects',
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'proyects', $args );

}
add_action( 'init', 'proyects', 0 );