<?php



// custom post configuration
function my_first_post_type()
{
	add_theme_support('post-thumbnails');
	$args = array(


		'labels' => array(

			'name' => 'Resources',
			'singular_name' => 'Resource',
		),
		'hierarchical' => true,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'custom-fields'),
		'taxonomies' => array('category'),
		//'rewrite' => array('slug' => 'resources'),	

	);


	register_post_type('Resources', $args);


}
add_action('init', 'my_first_post_type');
// End custom post configuration

// Removes items from 
function remove_admin_items() {
    
    // Remove the 'Posts' menu
    remove_menu_page('edit.php');

    // Remove the 'Themes' submenu 
    remove_submenu_page('themes.php', 'themes.php');
}

// Hook the function to the admin_menu action hook
add_action('admin_menu', 'remove_admin_items');

function enqueue_my_styles()
{
	// Enqueue your stylesheet here
	wp_register_style('my-custom-css', get_template_directory_uri() . '/slider/styles/style.css', array(), false, 'all');
	wp_enqueue_style('my-custom-css');
}

// Hook into the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'enqueue_my_styles');

//Theme options
add_theme_support('menus');

register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
		'resource-menu' => 'Resource Menu Location',
		'webdev-resource-menu' => 'Webdev Resource Menu Location',
	)
);