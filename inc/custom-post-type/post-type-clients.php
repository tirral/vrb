<?php

/**
 * This file registers the Clients custom post type
 *
 * @package    	VRB_toolbox
 * @link        http://tirrallab.com
 * Author:      tirral
 * License URI: MIT
 */



// Register the Clients custom post type
function vrb_toolbox_register_clients() {

	$slug = apply_filters( 'thetirral_clients_rewrite_slug', 'clients' );

	$labels = array(
		'name'                  => _x( 'Clients', 'Post Type General Name', 'vrb_toolbox' ),
		'singular_name'         => _x( 'Clients', 'Post Type Singular Name', 'vrb_toolbox' ),
		'menu_name'             => __( 'Clients', 'vrb_toolbox' ),
		'name_admin_bar'        => __( 'Clients', 'vrb_toolbox' ),
		'archives'              => __( 'Item Archives', 'vrb_toolbox' ),
		'parent_item_colon'     => __( 'Parent Item:', 'vrb_toolbox' ),
		'all_items'             => __( 'All Clients', 'vrb_toolbox' ),
		'add_new_item'          => __( 'Add New Clients', 'vrb_toolbox' ),
		'add_new'               => __( 'Add New Clients', 'vrb_toolbox' ),
		'new_item'              => __( 'New Clients', 'vrb_toolbox' ),
		'edit_item'             => __( 'Edit Clients', 'vrb_toolbox' ),
		'update_item'           => __( 'Update Clients', 'vrb_toolbox' ),
		'view_item'             => __( 'View Clients', 'vrb_toolbox' ),
		'search_items'          => __( 'Search Clients', 'vrb_toolbox' ),
		'not_found'             => __( 'Not found', 'vrb_toolbox' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'vrb_toolbox' ),
		'featured_image'        => __( 'Featured Image', 'vrb_toolbox' ),
		'set_featured_image'    => __( 'Set featured image', 'vrb_toolbox' ),
		'remove_featured_image' => __( 'Remove featured image', 'vrb_toolbox' ),
		'use_featured_image'    => __( 'Use as featured image', 'vrb_toolbox' ),
		'insert_into_item'      => __( 'Insert into item', 'vrb_toolbox' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'vrb_toolbox' ),
		'items_list'            => __( 'Items list', 'vrb_toolbox' ),
		'items_list_navigation' => __( 'Items list navigation', 'vrb_toolbox' ),
		'filter_items_list'     => __( 'Filter items list', 'vrb_toolbox' ),
	);

	$args = array(
		'label'                 => __( 'Clients', 'vrb_toolbox' ),
		'description'           => __( 'A post type for your clients', 'vrb_toolbox' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail'),
		'taxonomies'            => array( 'clients_tupes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 26,
		'menu_icon'             => 'dashicons-flag',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite' 				=> array( 'slug' => $slug ),
	);
	register_post_type( 'clients', $args );
}

add_action( 'init', 'vrb_toolbox_register_clients', 0 );

// Register the Clients taxonomy
	add_action( 'init', 'create_clients_tupes' );
	function create_clients_tupes() {
		register_taxonomy(
			'clients_tupes',
			'clients',
			array(
				'label' => __( 'Clients_tupes' ),
				'rewrite' => array( 'slug' => 'clients_tupes' ),
				'hierarchical' => true,
			)
		);
	}
