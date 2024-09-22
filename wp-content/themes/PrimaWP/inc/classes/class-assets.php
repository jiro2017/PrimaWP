<?php
/**
 * Set up the Assets for our theme
 * 
 * @package PrimaWP
 */

namespace PrimaWP_THEME\Inc;

use PrimaWP_THEME\Inc\Traits\Singleton;

class Assets {

    use Singleton;
    protected function __construct() {
        $this->set_hooks();
    }

    protected function set_hooks() {
        add_action( 'wp_enqueue_scripts', [$this, 'register_scripts']);
        add_action( 'wp_enqueue_scripts' , [$this, 'register_styles']);
    }
    
    public function register_styles() {
        // echo PrimaWP_DIR_URI .'/style.css';
        wp_register_style(
            'stylesheet', 
            PrimaWP_DIR_URI .'/style.css',
            [],
            filemtime( PrimaWP_DIR_PATH . '/style.css'),
            'all'
        );
        wp_enqueue_style('stylesheet');
    }

    public function register_scripts() {
        // echo PrimaWP_DIR_URI.'/inc/assets/main.js';
        wp_register_script(
            'main-javascript',
            PrimaWP_DIR_URI.'/inc/assets/main.js',
            [],
            filemtime( PrimaWP_DIR_PATH . '/inc/assets/main.js'),
            false
        );
        wp_enqueue_script('main-javascript');
        
        wp_register_script(
            'footer-javascript',
            PrimaWP_DIR_URI.'/inc/assets/footerscript.js',
            [],
            filemtime( PrimaWP_DIR_PATH . '/inc/assets/footerscript.js'),
            true
        );
        wp_enqueue_script('footer-javascript');
    }
}