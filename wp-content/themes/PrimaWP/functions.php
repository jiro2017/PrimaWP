<?php
/**
 * All basic functions 
 * 
 * @package PrimaWP
 */
if( !defined( 'PrimaWP_DIR_PATH' ) ) {
    define("PrimaWP_DIR_PATH", untrailingslashit( get_template_directory() ) );
}
require_once PrimaWP_DIR_PATH."/inc/helpers/autoload.php";

echo "<pre>";
echo PrimaWP_DIR_PATH;
echo "</pre>";
add_theme_support('title-tag');

function PrimaWP_register_scripts() {
    //register css
    wp_register_style(
        'stylesheet', 
        get_template_directory_uri().'/style.css',
        [],
        filemtime( get_template_directory() . '/style.css'),
        'all'
    );


    //register javascript
    wp_register_script(
        'main-javascript',
        get_template_directory_uri().'/inc/assets/main.js',
        [],
        filemtime( get_template_directory() . '/inc/assets/src/main.js'),
        false
    );

    wp_enqueue_style('stylesheet');
    wp_enqueue_script('main-javascript');
}

add_action('wp_enqueue_scripts', 'PrimaWP_register_scripts');
?>