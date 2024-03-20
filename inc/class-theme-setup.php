<?php
  class WPTailwind_Classic_Setup {
    public function __construct() {
        add_action('after_setup_theme', array($this, 'theme_setup'));
        add_action('wp_enqueue_scripts', array($this, 'theme_scripts'));
        add_action('customize_register', array($this, 'customize_register'));
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

    public function customize_register($wp_customize) {
      // Customize Banner
      $wp_customize->add_section('wptailwind_classic_banner_section', array(
          'title'    => __('Banner', 'wptailwind-classic'),
          'priority' => 30,
      ));

      $wp_customize->add_setting('wptailwind_classic_banner_image', array(
          'default' => '',
      ));
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'wptailwind_classic_banner_image', array(
          'label'    => __('Banner Image', 'wptailwind-classic'),
          'section'  => 'wptailwind_classic_banner_section',
          'settings' => 'wptailwind_classic_banner_image',
      )));

      $wp_customize->add_setting('wptailwind_classic_banner_text', array(
          'default' => '',
      ));
      $wp_customize->add_control('wptailwind_classic_banner_text', array(
          'label'    => __('Banner Text', 'wptailwind-classic'),
          'section'  => 'wptailwind_classic_banner_section',
          'type'     => 'text',
      ));

      $wp_customize->add_setting('wptailwind_classic_banner_link', array(
          'default' => '',
      ));
      $wp_customize->add_control('wptailwind_classic_banner_link', array(
          'label'    => __('Banner Link', 'wptailwind-classic'),
          'section'  => 'wptailwind_classic_banner_section',
          'type'     => 'text',
      ));

      // Customize Copyright 
      $wp_customize->add_section('wptailwind_classic_copyright_section', array(
          'title'    => __('Copyright', 'wptailwind-classic'),
          'priority' => 30,
      ));

      $wp_customize->add_setting('wptailwind_classic_copyright_text', array(
          'default'           => '',
          'sanitize_callback' => 'sanitize_text_field',
      ));

      $wp_customize->add_control('wptailwind_classic_copyright_text', array(
          'label'    => __('Copyright Text', 'wptailwind-classic'),
          'section'  => 'wptailwind_classic_copyright_section',
          'type'     => 'text',
      ));
    }
  }

new WPTailwind_Classic_Setup();
