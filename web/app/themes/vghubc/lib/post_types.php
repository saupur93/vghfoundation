<?php

// Post types
function custom_posts_types() {
	register_post_type('themes_post',
		array('labels' => array(
			'name' => __('Themes'), /* This is the Title of the Group */
			'singular_name' => __('Theme'), /* This is the individual type */
			'all_items' => __('All Themes'), /* the all items menu item */
			'add_new' => __('Add New Theme'), /* The add new menu item */
			'add_new_item' => __('Add New Theme'), /* Add New Display Title */
			'edit' => __( 'Edit' ), /* Edit Dialog */
			'edit_item' => __('Edit Themes'), /* Edit Display Title */
			'new_item' => __('New Theme'), /* New Display Title */
			'view_item' => __('View Theme'), /* View Display Title */
			'search_items' => __('Search Theme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __('This is the Theme post type' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 20, /* this is what order you want it to appear in on the left hand side menu */
			'has_archive' => 'themess-archive', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => array('slug'=>'themes'),
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array('title', 'editor', 'author', 'revisions', 'sticky', 'excerpt','thumbnail')
	 	) /* end of options */
	); /* end of register post type */

}
add_action( 'init', 'custom_posts_types');
