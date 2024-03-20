<?php
  function wptailwind_classic_scripts() {
      wp_enqueue_style('wptailwind-classic-style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'wptailwind_classic_scripts');

  require get_template_directory() . '/inc/class-theme-setup.php';
