<?php
/*
 * Plugin Name:       Landscape Post Types
 * Plugin URI:        
 * Description:       Adds a new Post Type into WordPress.
 * Version:           1.0.0
 * Requires at least: 5.3
 * Requires PHP:      5.6
 * Author:            Luciano Nicacio
 * Author URI:        http://lucianonicacio.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       pdev
 * Domain Path:       /public/lang
 */
  if(!defined('ABSPATH')) die();



// Register new Custom Post Type
function landscape_service_post_type() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Services', 'landscape' ),
		'name_admin_bar'        => __( 'Services', 'landscape' ),
		'archives'              => __( 'Archive', 'landscape' ),
		'attributes'            => __( 'Attributes', 'landscape' ),
		'parent_item_colon'     => __( 'Parent Service', 'landscape' ),
		'all_items'             => __( 'All Services', 'landscape' ),
		'add_new_item'          => __( 'Add Service', 'landscape' ),
		'add_new'               => __( 'Add Service', 'landscape' ),
		'new_item'              => __( 'New Service', 'landscape' ),
		'edit_item'             => __( 'Edit Service', 'landscape' ),
		'update_item'           => __( 'Update Service', 'landscape' ),
		'view_item'             => __( 'View Service', 'landscape' ),
		'view_items'            => __( 'View Service', 'landscape' ),
		'search_items'          => __( 'Search Service', 'landscape' ),
		'not_found'             => __( 'Not found', 'landscape' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'landscape' ),
		'featured_image'        => __( 'Featured Image', 'landscape' ),
		'set_featured_image'    => __( 'Save Featured Image', 'landscape' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'landscape' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'landscape' ),
		'insert_into_item'      => __( 'Insert in Service', 'landscape' ),
		'uploaded_to_this_item' => __( 'Add in Service', 'landscape' ),
		'items_list'            => __( 'Services List', 'landscape' ),
		'items_list_navigation' => __( 'Navigate to Services', 'landscape' ),
		'filter_items_list'     => __( 'Filter Services', 'landscape' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'landscape' ),
		'description'           => __( 'Services for landscape Website', 'landscape' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'landscape_services', $args );

}
add_action( 'init', 'landscape_service_post_type', 0 );
?>