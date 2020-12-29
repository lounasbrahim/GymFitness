<?php
/** ===============================================================================
  Plugin Name: Gymfitness - Class Post Type
  Plugin URI: 
  Description: Add Class Post Type into Wordpress
  Version: 1.0.0
  Author: Lounas Ibrahim
  Author URI: #
  Text Domain: gymfitness
  License: GPLv2 or later
  =============================================================================== */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
// Register new Custom Post Type
function gymfitness_class_post_type() {

	$labels = array(
		'name'                  => _x( 'Classes', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Class', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Classes', 'gymfitness' ),
		'name_admin_bar'        => __( 'Classes', 'gymfitness' ),
		'archives'              => __( 'Archive', 'gymfitness' ),
		'attributes'            => __( 'Attributes', 'gymfitness' ),
		'parent_item_colon'     => __( 'Parent Class', 'gymfitness' ),
		'all_items'             => __( 'All Classes', 'gymfitness' ),
		'add_new_item'          => __( 'Add Class', 'gymfitness' ),
		'add_new'               => __( 'Add Class', 'gymfitness' ),
		'new_item'              => __( 'New Class', 'gymfitness' ),
		'edit_item'             => __( 'Edit Class', 'gymfitness' ),
		'update_item'           => __( 'Update Class', 'gymfitness' ),
		'view_item'             => __( 'View Class', 'gymfitness' ),
		'view_items'            => __( 'View Class', 'gymfitness' ),
		'search_items'          => __( 'Search Class', 'gymfitness' ),
		'not_found'             => __( 'Not found', 'gymfitness' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'gymfitness' ),
		'featured_image'        => __( 'Featured Image', 'gymfitness' ),
		'set_featured_image'    => __( 'Save Featured Image', 'gymfitness' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'gymfitness' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'gymfitness' ),
		'insert_into_item'      => __( 'Insert in Class', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Add in Class', 'gymfitness' ),
		'items_list'            => __( 'Classes List', 'gymfitness' ),
		'items_list_navigation' => __( 'Navigate to Classes', 'gymfitness' ),
		'filter_items_list'     => __( 'Filter Classes', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Class', 'gymfitness' ),
		'description'           => __( 'Classes for GymFitness Website', 'gymfitness' ),
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
	register_post_type( 'gymfitness_classes', $args );

}
add_action( 'init', 'gymfitness_class_post_type', 0 );