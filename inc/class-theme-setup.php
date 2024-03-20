<?php
  class WPTailwind_Classic_Setup {
      public function __construct() {
          add_action('after_setup_theme', array($this, 'theme_setup'));
      }

      public function theme_setup() {
          add_theme_support('title-tag');
          // Additional theme supports here
      }
  }

  new WPTailwind_Classic_Setup();
