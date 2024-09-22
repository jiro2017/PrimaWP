<?php
/**
 * Set up the Assets for our theme
 * 
 * @package PrimaWP
 */

namespace PrimaWP_THEME\Inc;

use PrimaWP_THEME\Inc\Traits\Singleton;

class Menus {

    use Singleton;
    protected function __construct() {
        $this->set_hooks();
    }

    protected function set_hooks() {
        add_action( 'init', [$this, 'register_menus']);
    }
    
    public function register_menus() {
      register_nav_menus(
            array(
                'primawp_header-menu'       => esc_html__('Header Menu'),
                'primawp_footer-menu'        => esc_html__('Footer Menu')
            )
        );
    }
}