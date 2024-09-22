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

    public function get_menu_id( $location ) {
        //Get all the locations.
        $locations = get_nav_menu_locations();

        //Get object id by location
        $menu_id = $locations[ $location ];

        return ! empty($menu_id) ? $menu_id : '';
    }

    public function get_child_menu_items( $menus, $parent_id ) {
        $child_menus = [];
        // echo "<pre>";
        // echo "Menus";
        // print_r($menu);
        // echo "</pre>";
        if(!empty( $menus ) && is_array($menus) ) {
            foreach ($menus as $menu ) {
                if( intval( $menu->menu_item_parent) === $parent_id ) {
                    array_push( $child_menus, $menu );
                }
            }
        }
        //  echo "<pre>";
        // echo "Menus";
        // print_r($child_menus);
        // echo "</pre>";
        return $child_menus;
    }
}