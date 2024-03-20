<?php
  class WPTailwind_Classic_Setup {
    public function __construct() {
        add_action('after_setup_theme', array($this, 'theme_setup'));
        add_action('wp_enqueue_scripts', array($this, 'theme_scripts'));
    }

    public function theme_setup() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ));
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'wptailwind-classic'),
        ));
    }

    public function theme_scripts() {
        wp_enqueue_style('wptailwind-classic-style', get_stylesheet_uri());
    }
  }

new WPTailwind_Classic_Setup();
