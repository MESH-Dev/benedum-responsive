<?php 

//Add Custom Post Types and Custom Taxonomies

// CPTs ----------------------------------------------------------

// Register Grants Custom Post Type
function grants_CPT() {

	$labels = array(
		'name'                  => _x( 'Grants', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Grant', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Grants', 'text_domain' ),
		'name_admin_bar'        => __( 'Grants', 'text_domain' ),
		'archives'              => __( 'Grant Archives', 'text_domain' ),
		'attributes'            => __( 'Grant Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Grant:', 'text_domain' ),
		'all_items'             => __( 'All Grants', 'text_domain' ),
		'add_new_item'          => __( 'Add New Grant', 'text_domain' ),
		'add_new'               => __( 'Add Grant', 'text_domain' ),
		'new_item'              => __( 'New Grant', 'text_domain' ),
		'edit_item'             => __( 'Edit Grant', 'text_domain' ),
		'update_item'           => __( 'Update Grant', 'text_domain' ),
		'view_item'             => __( 'View Grant', 'text_domain' ),
		'view_items'            => __( 'View Grants', 'text_domain' ),
		'search_items'          => __( 'Search Grant', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Grant', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Grant', 'text_domain' ),
		'items_list'            => __( 'Grant list', 'text_domain' ),
		'items_list_navigation' => __( 'Grants list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Grants list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Grant', 'text_domain' ),
		'description'           => __( 'Post type for single Grants', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', ),
		'taxonomies'            => array( 'program_area', ' region_served', ' year' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'grants', $args );

}
//add_action( 'init', 'grants_CPT', 0 );

//Taxonomies ---------------------------------------------

// Register Program Area Custom Taxonomy
function program_area_tax() {

	$labels = array(
		'name'                       => _x( 'Program Areas', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Program Area', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Program Area', 'text_domain' ),
		'all_items'                  => __( 'All Program Areas', 'text_domain' ),
		'parent_item'                => __( 'Parent Program Area', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Program Area:', 'text_domain' ),
		'new_item_name'              => __( 'New Program Area', 'text_domain' ),
		'add_new_item'               => __( 'Add New Program Area', 'text_domain' ),
		'edit_item'                  => __( 'Edit Program Area', 'text_domain' ),
		'update_item'                => __( 'Update Program Area', 'text_domain' ),
		'view_item'                  => __( 'View Program Areas', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Program Areas', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Program Areas', 'text_domain' ),
		'search_items'               => __( 'Search Program Areas', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Program Areas', 'text_domain' ),
		'items_list'                 => __( 'Program Areas list', 'text_domain' ),
		'items_list_navigation'      => __( 'Program Areas list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'program_area', array( 'grants' ), $args );

}
//add_action( 'init', 'program_area_tax', 0 );

// Register Region Served Custom Taxonomy
function region_served_tax() {

	$labels = array(
		'name'                       => _x( 'Years', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Region Served', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Region Served', 'text_domain' ),
		'all_items'                  => __( 'All Years', 'text_domain' ),
		'parent_item'                => __( 'Parent Region Served', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Region Served:', 'text_domain' ),
		'new_item_name'              => __( 'New Region Served', 'text_domain' ),
		'add_new_item'               => __( 'Add New Region Served', 'text_domain' ),
		'edit_item'                  => __( 'Edit Region Served', 'text_domain' ),
		'update_item'                => __( 'Update Region Served', 'text_domain' ),
		'view_item'                  => __( 'View Years', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Years', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Years', 'text_domain' ),
		'search_items'               => __( 'Search Years', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Years', 'text_domain' ),
		'items_list'                 => __( 'Years list', 'text_domain' ),
		'items_list_navigation'      => __( 'Years list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'region_served', array( 'grants' ), $args );

}
//add_action( 'init', 'region_served_tax', 0 );

// Register Year Custom Taxonomy
function year_tax() {

	$labels = array(
		'name'                       => _x( 'Years', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Year', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Year', 'text_domain' ),
		'all_items'                  => __( 'All Years', 'text_domain' ),
		'parent_item'                => __( 'Parent Year', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Year:', 'text_domain' ),
		'new_item_name'              => __( 'New Year', 'text_domain' ),
		'add_new_item'               => __( 'Add New Year', 'text_domain' ),
		'edit_item'                  => __( 'Edit Year', 'text_domain' ),
		'update_item'                => __( 'Update Year', 'text_domain' ),
		'view_item'                  => __( 'View Years', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Years', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Years', 'text_domain' ),
		'search_items'               => __( 'Search Years', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Years', 'text_domain' ),
		'items_list'                 => __( 'Years list', 'text_domain' ),
		'items_list_navigation'      => __( 'Years list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'year', array( 'grants' ), $args );

}
//add_action( 'init', 'year_tax', 0 );

?>