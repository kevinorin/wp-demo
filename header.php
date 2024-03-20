<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="sticky top-0 z-50 grid grid-cols-2 md:grid-cols-3 bg-white shadow-md py-5 md:py-0 px-5 md:px-10 items-center transition-all duration-500">
        <!-- Logo -->
        <div class="hidden md:flex text-2xl font-bold">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } else {
                echo '<a href="' . esc_url(home_url('/')) . '" rel="home">' . get_bloginfo('name') . '</a>';
            }
            ?>
        </div>

        <!-- Placeholder for Navigation Menu -->
        <div class="flex flex-col items-center md:items-start space-x-4 md:space-x-0 md:flex-row justify-between flex-grow transition-all duration-500">
            <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'flex space-x-4',
                'container'      => 'nav',
                'container_class'=> 'transition-transform duration-500',
            )); ?>
        </div>

        <!-- User Menu and Search (simplified version) -->
        <div class="flex items-center space-x-4 justify-end text-gray-500 cursor-pointer">
          <?php
            // Display the user navigation menu
            wp_nav_menu(array(
                'theme_location' => 'user_nav', // Use the 'user_nav' menu location
                'menu_class' => 'hidden md:inline', // Add classes for styling (hides on smaller screens)
                'container' => false, // Remove the outer container
                'link_before' => '', // Text before each link
                'link_after' => '', // Text after each link
                'depth' => 1, // Limit the depth of the menu
            ));
          ?>
        </div>
    </header>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        window.addEventListener('scroll', function() {
            // Implement show/hide logic for search or any element based on scroll position
        });
    });
    </script>

    <?php wp_footer(); ?>
  </body>
</html>
