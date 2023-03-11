<?php

function create_projects() {
	register_post_type( 'projects', [
		'labels' => array(
			'name' => __( 'Projecten' ),
			'singular_name' => __( 'Project' ),
			'add_new' => __('Nieuw project', ' projects'),
			'add_new_item' => __('Nieuw project'),
			'edit_item' => __('Bewerk project'),
			'new_item' => __('Nieuw project'),
			'view_item' => __('Bekijk project'),
			'search_items' => __('Zoek project(en)'),
			'not_found' =>  __('Geen project(en) gevonden'),
			'not_found_in_trash' => __('Geen project(en) gevonden'),
			'parent_item_colon' => ''
		),
		'public' => true,
		'has_archive' => false,
		'public' => true,
		'show_ui' => true,
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'show_in_rest' => true,
		'supports' => array('title','thumbnail','revisions', 'page-attributes'),
		'rewrite' => array( 'slug' => 'projecten', 'with_front' => false ),
		'menu_icon' => 'dashicons-open-folder',
	]);

	register_taxonomy( 'projects-categories', 'projects', array(
		"hierarchical" => true,
		'show_in_rest' => true,
		'labels' => array(
			'name' => 'Categorieën',
			'add_new_item' => 'Nieuwe categorie'
		),
	));
}

add_action( 'init', 'create_projects' );
