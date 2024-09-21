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
    }

    protected function setup_hooks() {
        //Actions
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme() {
        add_theme_support('title-tag');
    }
 }