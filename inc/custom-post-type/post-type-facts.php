<?php

/**
 * This file registers the Facts custom post type
 *
 * @package    	VRB_Toolbox
 * @link        http://tirrallab.com
 * Author:      tirral
 * License URI: MIT
 */


// Register the Facts custom post type
function vrb_toolbox_register_facts() {

	$slug = apply_filters( 'thetirral_clients_rewrite_slug', 'facts' );


	$labels = array(
		'name'                  => _x( 'Facts', 'Post Type General Name', 'vrb_toolbox' ),
		'singular_name'         => _x( 'Facts', 'Post Type Singular Name', 'vrb_toolbox' ),
		'menu_name'             => __( 'Facts', 'vrb_toolbox' ),
		'name_admin_bar'        => __( 'Facts', 'vrb_toolbox' ),
		'archives'              => __( 'Item Archives', 'vrb_toolbox' ),
		'parent_item_colon'     => __( 'Parent Item:', 'vrb_toolbox' ),
		'all_items'             => __( 'All Facts', 'vrb_toolbox' ),
		'add_new_item'          => __( 'Add New Facts', 'vrb_toolbox' ),
		'add_new'               => __( 'Add New Facts', 'vrb_toolbox' ),
		'new_item'              => __( 'New Facts', 'vrb_toolbox' ),
		'edit_item'             => __( 'Edit Facts', 'vrb_toolbox' ),
		'update_item'           => __( 'Update Facts', 'vrb_toolbox' ),
		'view_item'             => __( 'View Facts', 'vrb_toolbox' ),
		'search_items'          => __( 'Search Facts', 'vrb_toolbox' ),
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
		'label'                 => __( 'Facts', 'vrb_toolbox' ),
		'description'           => __( 'A post type for your facts', 'vrb_toolbox' ),
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'taxonomies'            => array( 'facts_tupes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 26,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite' 				=> array( 'slug' => $slug ),
	);
	register_post_type( 'facts', $args );

}

add_action( 'init', 'vrb_toolbox_register_facts', 0 );



// Register the Facts taxonomy
	add_action( 'init', 'create_facts_tupes' );

	function create_facts_tupes() {
		register_taxonomy(
			'facts_tupes',
			'facts',
			array(
				'label' => __( 'Facts_tupes' ),
				'rewrite' => array( 'slug' => 'facts_tupes' ),
				'hierarchical' => true,
			)
		);
	}
