<?php
/**
 * eqconnect functions and definitions
 *
 * @package eqconnect
 */

/****************************************************/
/*                       Hooks                       /
/****************************************************/

/* Enqueue scripts and styles */
add_action('wp_enqueue_scripts', 'eqconnect_scripts');

/* Add Menus */
add_action('init', 'eqconnect_custom_menu');

/* Dashboard Config */
add_action('wp_dashboard_setup', 'eqconnect_dashboard_widget');

/* Dashboard Style */
add_action('admin_head', 'eqconnect_custom_fonts');

/* Remove Default Menu Items */
add_action('admin_menu', 'eqconnect_remove_menus');

/* Change Posts Columns */
add_filter('manage_posts_columns', 'eqconnect_manage_columns');

/* Reorder Admin Menu */
add_filter('custom_menu_order', 'eqconnect_reorder_menu');
add_filter('menu_order', 'eqconnect_reorder_menu');

/* Remove Comments Link */
add_action('wp_before_admin_bar_render', 'eqconnect_manage_admin_bar');

/* Remove Admin Bar */
add_action('after_setup_theme', 'eqconnect_remove_admin_bar');


/****************************************************/
/*                     Functions                     /
/****************************************************/

function eqconnect_scripts() {
	wp_enqueue_style( 'eqconnect-style', get_stylesheet_uri() );
	wp_enqueue_script( 'eqconnect-core-js', get_template_directory_uri() . '/inc/js/compiled.js', array('jquery'), true);
	wp_enqueue_script( 'eqconnect-owl-js', get_template_directory_uri() . '/inc/js/owl.carousel.min.js', array('jquery'), true);
}

function eqconnect_custom_menu() {
	register_nav_menus(array(
		'main-menu' => __( 'Main Menu' )
	));
}

function eqconnect_dashboard_widget() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'eqconnect Support', 'eqconnect_dashboard_help');
}

function eqconnect_dashboard_help() {
	echo file_get_contents(__DIR__ . "/admin-settings/dashboard.html");
}

function eqconnect_custom_fonts() {
	echo '<style type="text/css">' . file_get_contents(__DIR__ . "/admin-settings/style-admin.css") . '</style>';

	if(function_exists('acf_add_options_page')) {
		acf_add_options_page(array(
			'page_title' 	=> 'Theme Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'site-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
	}
}

function eqconnect_remove_menus(){
	remove_menu_page( 'edit-comments.php' ); //Comments
}

function eqconnect_manage_columns($columns) {
	unset($columns["comments"]);
	return $columns;
}

function eqconnect_reorder_menu() {
    return array(
		'index.php',                        // Dashboard
		'separator1',                       // --Space--
		'edit.php',                         // Posts
		'edit.php?post_type=page',          // Pages
		'upload.php',                       // Media
		'separator2',                       // --Space--
		'themes.php',                       // Appearance
		'plugins.php',                      // Plugins
		'users.php',                        // Users
		'tools.php',                        // Tools
		'options-general.php',              // Settings
		'wpcf7',                            // Contact Form 7
   );
}

function eqconnect_manage_admin_bar(){
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
}
 
function eqconnect_remove_admin_bar() {
	show_admin_bar(false);
}
