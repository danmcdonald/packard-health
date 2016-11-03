<?php

// Provider cpt
function jaio_provider_cpt() {
	$labels = array(
		'name'                  => _x( 'Providers', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Provider', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Providers', 'text_domain' ),
		'name_admin_bar'        => __( 'Provider', 'text_domain' ),
		'archives'              => __( 'Provider Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Provider:', 'text_domain' ),
		'all_items'             => __( 'All Providers', 'text_domain' ),
		'add_new_item'          => __( 'Add New Provider', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into provider', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this provider', 'text_domain' ),
		'items_list'            => __( 'Providers list', 'text_domain' ),
		'items_list_navigation' => __( 'Providers list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter providers list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Provider', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'provider', $args );

}
add_action( 'init', 'jaio_provider_cpt', 0 );

// Behaviour Health Team cpt
function jaio_health_professional_cpt() {
	$labels = array(
		'name'                  => _x( 'Health Professionals', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Health Professional', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Behaviour Health Team', 'text_domain' ),
		'name_admin_bar'        => __( 'Health Professional', 'text_domain' ),
		'archives'              => __( 'Professional Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Professional:', 'text_domain' ),
		'all_items'             => __( 'All Professionals', 'text_domain' ),
		'add_new_item'          => __( 'Add New Professional', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into professional', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this professional', 'text_domain' ),
		'items_list'            => __( 'Professionals list', 'text_domain' ),
		'items_list_navigation' => __( 'Professionals list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter professionals list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Behaviour Health Professionals', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'health_professional', $args );

}
add_action( 'init', 'jaio_health_professional_cpt', 0 );

// Outreach Team Professional cpt
function jaio_outreach_professional_cpt() {
	$labels = array(
		'name'                  => _x( 'Outreach Team', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Outreach Professional', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Outreach Team', 'text_domain' ),
		'name_admin_bar'        => __( 'Outreach Professional', 'text_domain' ),
		'archives'              => __( 'Professional Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Professional:', 'text_domain' ),
		'all_items'             => __( 'All Professionals', 'text_domain' ),
		'add_new_item'          => __( 'Add New Professional', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into professional', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this professional', 'text_domain' ),
		'items_list'            => __( 'Professionals list', 'text_domain' ),
		'items_list_navigation' => __( 'Professionals list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter professionals list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Outreach Team Professionals', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'outreach_pro', $args );

}
add_action( 'init', 'jaio_outreach_professional_cpt', 0 );

// Paitent Advocate cpt
function jaio_patient_advocate_cpt() {
	$labels = array(
		'name'                  => _x( 'Patient Advocates', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Patient Advocate', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Patient Advocates', 'text_domain' ),
		'name_admin_bar'        => __( 'Patient Advocate', 'text_domain' ),
		'archives'              => __( 'Advocate Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Patient Advocate:', 'text_domain' ),
		'all_items'             => __( 'All Advocates', 'text_domain' ),
		'add_new_item'          => __( 'Add New Advocate', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into advocate', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this advocate', 'text_domain' ),
		'items_list'            => __( 'Advocates list', 'text_domain' ),
		'items_list_navigation' => __( 'Advocates list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter advocates list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Patient Advocate Team', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'patient_advocate', $args );

}
add_action( 'init', 'jaio_patient_advocate_cpt', 0 );