<?php

//Use this file for wp menus, sidebars, image sizes, loadup scripts.



//enqueue scripts and styles *use production assets. Dev assets are located in  /css and /js
function loadup_scripts() {
    wp_enqueue_script( 'slick-js', get_template_directory_uri().'/js/slick.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'sidr-js', get_template_directory_uri().'/js/jquery.sidr.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'theme-js', get_template_directory_uri().'/js/mesh.js', array('jquery'), '1.0.0', true );

     wp_enqueue_style( 'slick-css', get_template_directory_uri().'/css/slick.css', true );
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri().'/css/slick-theme.css', true );
    wp_enqueue_style( 'sidr-css', get_template_directory_uri().'/css/jquery.sidr.bare.css', true );
}
add_action( 'wp_enqueue_scripts', 'loadup_scripts' );

// Add Thumbnail Theme Support
add_theme_support('post-thumbnails');
add_image_size('background-fullscreen', 1800, 1200, true);
add_image_size('short-banner', 1800, 800, true);

add_image_size('large', 700, '', true); // Large Thumbnail
add_image_size('medium', 250, '', true); // Medium Thumbnail
add_image_size('small', 120, '', true); // Small Thumbnail
add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');



//Register WP Menus
register_nav_menus(
    array(
        'main_nav' => 'Header and breadcrumb trail heirarchy',
        'social_nav' => 'Social menu used throughout',
        'footer_nav' => 'Footer navigation heirarchy',
        // 'site_map' = 'Site map for pages included in site',
    )
);

// Register Widget Area for the Sidebar
register_sidebar( array(
    'name' => __( 'Primary Widget Area', 'Sidebar' ),
    'id' => 'primary-widget-area',
    'description' => __( 'The primary widget area', 'Sidebar' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
) );

// Function that will return our Wordpress menu
function list_menu($atts, $content = null) {
    extract(shortcode_atts(array(  
        'menu'            => '', 
        'container'       => 'div', 
        'container_class' => '', 
        'container_id'    => '', 
        'menu_class'      => 'menu', 
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'depth'           => 0,
        'walker'          => '',
        'theme_location'  => ''), 
        $atts));
 
 
    return wp_nav_menu( array( 
        'menu'            => $menu, 
        'container'       => $container, 
        'container_class' => $container_class, 
        'container_id'    => $container_id, 
        'menu_class'      => $menu_class, 
        'menu_id'         => $menu_id,
        'echo'            => false,
        'fallback_cb'     => $fallback_cb,
        'before'          => $before,
        'after'           => $after,
        'link_before'     => $link_before,
        'link_after'      => $link_after,
        'depth'           => $depth,
        'walker'          => $walker,
        'theme_location'  => $theme_location));
}
//Create the shortcode
add_shortcode("listmenu", "list_menu");








?>
