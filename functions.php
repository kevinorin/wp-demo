<?php
// Add CSS and JS files
  function wptailwind_classic_scripts() {
      wp_enqueue_style('wptailwind-classic-style', get_stylesheet_uri());
      wp_enqueue_script('wptailwind-classic-header', get_template_directory_uri() . '/assets/js/header.js', array(), '1.0', true);

  }
  add_action('wp_enqueue_scripts', 'wptailwind_classic_scripts');

  // Add Navigation Support
  function wptailwind_classic_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'wptailwind-classic'),
    ));
  }
  add_action('after_setup_theme', 'wptailwind_classic_setup');


  require get_template_directory() . '/inc/class-theme-setup.php';
