<?php 

//Add Custom Post Types and Custom Taxonomies

// CPTs ----------------------------------------------------------

// Register Grants Custom Post Type
function grants() {

	$labels = array(
		'name'                  => _x( 'Grants', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Grant', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Grants', 'text_domain' ),
		'name_admin_bar'        => __( 'Grants', 'text_domain' ),
		'archives'              => __( 'Grants', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Grants', 'text_domain' ),
		'add_new_item'          => __( 'Add New Grant', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
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
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Grant', 'text_domain' ),
		'description'           => __( 'Grants Database', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'custom-fields', ),
		'taxonomies'            => array( 'program_area', 'region_served', 'award_year' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'grant', $args );

}
add_action( 'init', 'grants', 0 );

//Taxonomies ---------------------------------------------

// Register Program Area Custom Taxonomy
function program_area_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Program Areas', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Program Area', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Program Areas', 'text_domain' ),
		'all_items'                  => __( 'All Program Areas', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Program Area', 'text_domain' ),
		'add_new_item'               => __( 'Add New Program Area', 'text_domain' ),
		'edit_item'                  => __( 'Edit Program Area', 'text_domain' ),
		'update_item'                => __( 'Update Program Area', 'text_domain' ),
		'view_item'                  => __( 'View Program Area', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
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
	register_taxonomy( 'program_area', array( 'grant' ), $args );

}
add_action( 'init', 'program_area_taxonomy', 0 );

// Register Region Served Custom Taxonomy
function region_served_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Region', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Region', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Regions Served', 'text_domain' ),
		'all_items'                  => __( 'All Regions', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Region', 'text_domain' ),
		'add_new_item'               => __( 'Add New Region', 'text_domain' ),
		'edit_item'                  => __( 'Edit Region', 'text_domain' ),
		'update_item'                => __( 'Update Region', 'text_domain' ),
		'view_item'                  => __( 'View Region', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
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
	register_taxonomy( 'region_served', array( 'grant' ), $args );

}
add_action( 'init', 'region_served_taxonomy', 0 );

// Register Year Custom Taxonomy
function award_year_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Award Year', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Award Year', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Award Years', 'text_domain' ),
		'all_items'                  => __( 'All Award Years', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Award Year', 'text_domain' ),
		'add_new_item'               => __( 'Add New Award Year', 'text_domain' ),
		'edit_item'                  => __( 'Edit Award Year', 'text_domain' ),
		'update_item'                => __( 'Update Award Year', 'text_domain' ),
		'view_item'                  => __( 'View Award Year', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
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
	register_taxonomy( 'award_year', array( 'grant' ), $args );

}
add_action( 'init', 'award_year_taxonomy', 0 );

?>