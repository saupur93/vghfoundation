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
			'has_archive' => 'themes-archive', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => true,
			"show_in_rest" => true,
			'rewrite' => array('slug'=>'themes'),
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array('title', 'editor', 'author', 'revisions', 'sticky', 'excerpt','thumbnail', 'page-attributes')
	 	) /* end of options */
	); /* end of register post type */

	register_post_type('signature_events',
		array('labels' => array(
			'name' => __('Signature Events'), /* This is the Title of the Group */
			'singular_name' => __('Signature Event'), /* This is the individual type */
			'all_items' => __('All Signature Events'), /* the all items menu item */
			'add_new' => __('Add New Signature Event'), /* The add new menu item */
			'add_new_item' => __('Add New Signature Event'), /* Add New Display Title */
			'edit' => __( 'Edit' ), /* Edit Dialog */
			'edit_item' => __('Edit Signature Events'), /* Edit Display Title */
			'new_item' => __('New Signature Event'), /* New Display Title */
			'view_item' => __('View Signature Event'), /* View Display Title */
			'search_items' => __('Search Signature Event'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __('This is the Signature Event post type' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */
			'has_archive' => 'signature-events-archive', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => true,
			'rewrite' => array('slug'=>'signature-events'),
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array('title', 'editor', 'author', 'revisions', 'sticky', 'excerpt','thumbnail', 'page-attributes')
	 	) /* end of options */
	); /* end of register post type */


	register_post_type('call_to_action',
		array('labels' => array(
			'name' => __('Call To Actions'), /* This is the Title of the Group */
			'singular_name' => __('Call To Action'), /* This is the individual type */
			'all_items' => __('All Call To Actions'), /* the all items menu item */
			'add_new' => __('Add New Call To Action'), /* The add new menu item */
			'add_new_item' => __('Add New Call To Action'), /* Add New Display Title */
			'edit' => __( 'Edit' ), /* Edit Dialog */
			'edit_item' => __('Edit Call To Actions'), /* Edit Display Title */
			'new_item' => __('New Call To Action'), /* New Display Title */
			'view_item' => __('View Call To Action'), /* View Display Title */
			'search_items' => __('Search Call To Action'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __('This is the Call To Action post type' ), /* Custom Type Description */
			'public' => false,
			'publicly_queryable' => false,
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */
			'has_archive' => 'cta-archive', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => array('slug'=>'cta'),
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array('title', 'editor', 'author', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
}
add_action( 'init', 'custom_posts_types');
