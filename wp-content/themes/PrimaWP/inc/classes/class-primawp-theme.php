<?php
/**
 * Bootstraps the them
 * 
 * @package PrimaWP
 */

namespace PrimaWP_THEME\Inc;

use \PrimaWP_THEME\Inc\Traits\Singleton;

class PrimaWP_THEME {
    use Singleton;

    protected function __construct() {
        //load class
        Assets::get_instance();

        //set hooks
        $this->set_hooks();
    }

    protected function set_hooks() {
        //Actions
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme() {
        // add_theme_support('title-tag');
        add_theme_support('custom-logo', array(
            'header-text'   => [ 'site-title', 'site-description' ],
            'height'        => 100,
            'width'         => 400,
            'flex-width'    => true,
            'flex-height'   => true
        ));
    }
 }