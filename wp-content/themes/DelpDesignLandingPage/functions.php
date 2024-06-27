<?php
add_theme_support('post-thumbnails');
add_theme_support( 'menus' );

function td_laadEigenCSS() {
    $pathVanTheme = get_template_directory_uri();
    // Debugging - Print the path
    error_log("Theme Path: " . $pathVanTheme);
    // Check if the CSS file exists
    if (file_exists(get_template_directory() . '/dist/css/styles.css')) {
        error_log("CSS file exists.");
    } else {
        error_log("CSS file does not exist.");
    }
    wp_enqueue_style("eigencss", $pathVanTheme . "/dist/css/styles.css");
    wp_enqueue_script("eigenjs", $pathVanTheme . "/dist/js/main.js");  
    wp_enqueue_script('bootstrap-js', $pathVanTheme . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js');

    // emailjs

    wp_localize_script('custom-script', 'emailjs_config', array(
        'user_id' => 'VB6hnEqEIq71Pygt1' // Replace with your actual USER ID
    ));

}
add_action("wp_enqueue_scripts", "td_laadEigenCSS");

function admin_style()
{
	wp_enqueue_style('admin-styles', get_template_directory_uri() . '/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


//Registratie Menu's
function td_registreer_mogelijke_menus()
{
	register_nav_menus(
		array(
			'main-menu' => 'main-menu',
		)
	);
}
add_action('init', 'td_registreer_mogelijke_menus');


//Ordenen van het dashboard menu
//Maak menu item aan.
function add_content_menu_item() {
    add_menu_page(
        __('Content', 'textdomain'), // Paginatitel
        __('Content', 'textdomain'), // Menutitel
        'manage_options', // Capaciteit
        'content-menu', // Menu slug
        '', // Callback functie - leeg laten om standaard WP gedrag te gebruiken
        'dashicons-admin-post', // Icon URL
        5 // Positie in menu
    );
}
add_action('admin_menu', 'add_content_menu_item');


function register_custom_post_types() {
    $args_txt_img = array(
        'labels' => array(
            'name' => __('titel', 'textdomain'),
            'singular_name' => __('titel', 'textdomain'),
        ),
        'public' => true,
        'show_in_menu' => 'content-menu', // Parent menu slug 'content-menu' where it should appear
    );
    register_post_type('title_hero', $args_txt_img);

    $args_head = array(
        'labels' => array(
            'name' => __('Head', 'textdomain'),
            'singular_name' => __('head', 'textdomain'),
        ),
        'public' => true,
        'show_in_menu' => 'content-menu', // Parent menu slug 'content-menu' where it should appear
    );
    register_post_type('head', $args_head);

    $args_quote = array(
        'labels' => array(
            'name' => __('Quotes', 'textdomain'),
            'singular_name' => __('Quote', 'textdomain'),
        ),
        'public' => true,
        'show_in_menu' => 'content-menu', // Parent menu slug 'content-menu' where it should appear
    );
    register_post_type('quote', $args_quote);

    $args_txt_img = array(
        'labels' => array(
            'name' => __('tekst & afbeelding', 'textdomain'),
            'singular_name' => __('tekst & afbeelding', 'textdomain'),
        ),
        'public' => true,
        'show_in_menu' => 'content-menu', // Parent menu slug 'content-menu' where it should appear
    );
    register_post_type('txt-img', $args_txt_img);
}
add_action('init', 'register_custom_post_types');



function remove_default_post_type_menu_items() {
    remove_menu_page('edit.php?post_type=qoute'); 
    remove_menu_page('edit.php?post_type=head'); 
    remove_menu_page('edit.php?post_type=content-menu'); 

}
add_action('admin_menu', 'remove_default_post_type_menu_items', 999);



?>
