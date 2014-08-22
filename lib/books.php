<?php 	
	add_action('init', 'project_books_init');  

	/*-- Custom Post Init Begin --*/
	function project_books_init()
	{
	  $labels = array(
		'name' => _x('Books', 'post type general name', 'ureeka'),
		'singular_name' => _x('Book', 'post type singular name', 'ureeka'),
		'add_new' => _x('Add New', 'book', 'ureeka'),
		'add_new_item' => __('Add New Book', 'ureeka'),
		'edit_item' => __('Edit Book', 'ureeka'),
		'new_item' => __('New Book', 'ureeka'),
		'view_item' => __('View Book', 'ureeka'),
		'search_items' => __('Search Books', 'ureeka'),
		'not_found' =>  __('No books found', 'ureeka'),
		'not_found_in_trash' => __('No books found in Trash', 'ureeka'),
		'parent_item_colon' => '',
		'menu_name' => __('Book', 'ureeka')

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
		'name' => _x( 'Genre', 'taxonomy general name', 'ureeka'),
		'singular_name' => _x( 'Genre', 'taxonomy singular name', 'ureeka' ),
		'search_items' =>  __( 'Search Genre', 'ureeka'),
		'all_items' => __( 'All Genre', 'ureeka' ),
		'parent_item' => __( 'Parent Genre', 'ureeka' ),
		'parent_item_colon' => __( 'Parent Genre:', 'ureeka' ),
		'edit_item' => __( 'Edit Genre', 'ureeka' ),
		'update_item' => __( 'Update Genre', 'ureeka' ),
		'add_new_item' => __( 'Add New Genre', 'ureeka' ),
		'new_item_name' => __( 'New Genre Name', 'ureeka' ),
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