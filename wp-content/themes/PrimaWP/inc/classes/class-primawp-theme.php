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
        Menus::get_instance();

        //set hooks
        $this->set_hooks();
    }

    protected function set_hooks() {
        //Actions
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme() {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', array(
            'header-text'   => [ 'site-title', 'site-description' ],
            'height'        => 100,
            'width'         => 400,
            'flex-width'    => true,
            'flex-height'   => true
        ));
        add_theme_support('custom-background', array(
            'default-color'     => '#fff',
            // 'default-image'     => get_template_directory_uri .
        ));
        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'automatic-feed-links');

        add_theme_support(
            'html5',
            [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style'
            ]
        );

        add_editor_style();

        add_theme_support(
            'wp-block-styles'
        );
        add_theme_support( 'align-wide');

        global $content_width;
        if( !isset($content_width ) ) {
            $content_width = 1240;
        }
    }
 }