<?php
/**
 * All basic functions 
 * 
 * @package PrimaWP
 */
if( !defined( 'PrimaWP_DIR_PATH' ) ) {
    define("PrimaWP_DIR_PATH", untrailingslashit( get_template_directory() ) );
}

if( !defined( 'PrimaWP_DIR_URI' ) ) {
    define("PrimaWP_DIR_URI", untrailingslashit( get_template_directory_uri() ));
}

require_once PrimaWP_DIR_PATH."/inc/helpers/autoloader.php";
// wp_die( PrimaWP_DIR_PATH."/inc/helpers/autoloader.php"
// );
//gets the theme instance
\PrimaWP_THEME\Inc\PrimaWP_THEME::get_instance();

// //add theme support
// add_theme_support('title-tag');

// function PrimaWP_register_scripts() {
//     //register css
//     wp_register_style(
//         'stylesheet', 
//         get_template_directory_uri().'/style.css',
//         [],
//         filemtime( get_template_directory() . '/style.css'),
//         'all'
//     );


//     //register javascript
//     wp_register_script(
//         'main-javascript',
//         get_template_directory_uri().'/inc/assets/main.js',
//         [],
//         filemtime( get_template_directory() . '/inc/assets/src/main.js'),
//         false
//     );

//     wp_enqueue_style('stylesheet');
//     wp_enqueue_script('main-javascript');
// }

// add_action('wp_enqueue_scripts', 'PrimaWP_register_scripts');
?>