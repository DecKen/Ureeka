<?php 	
	add_action('init', 'project_books_init');  

	/*-- Custom Post Init Begin --*/
	function project_books_init()
	{
	  $labels = array(
		'name' => _x('Books', 'post type general name'),
		'singular_name' => _x('Book', 'post type singular name'),
		'add_new' => _x('Add New', 'book'),
		'add_new_item' => __('Add New Book'),
		'edit_item' => __('Edit Book'),
		'new_item' => __('New Book'),
		'view_item' => __('View Book'),
		'search_items' => __('Search Books'),
		'not_found' =>  __('No books found'),
		'not_found_in_trash' => __('No books found in Trash'),
		'parent_item_colon' => '',
		'menu_name' => 'Book'

	  );

	 $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments')
	  );
	  // The following is the main step where we register the post.
	  register_post_type('book',$args);

	  // Initialize New Taxonomy Labels
	  $labels = array(
		'name' => _x( 'Genre', 'taxonomy general name' ),
		'singular_name' => _x( 'Genre', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Genre' ),
		'all_items' => __( 'All Genre' ),
		'parent_item' => __( 'Parent Genre' ),
		'parent_item_colon' => __( 'Parent Genre:' ),
		'edit_item' => __( 'Edit Genre' ),
		'update_item' => __( 'Update Genre' ),
		'add_new_item' => __( 'Add New Genre' ),
		'new_item_name' => __( 'New Genre Name' ),
	  );
		// Custom taxonomy for Project Tags
		register_taxonomy('book-genre',array('book'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'book-genre' ),
	  ));

	}
	/*-- Custom Post Init Ends --*/
?>