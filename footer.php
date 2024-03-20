<footer>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-10 px-10 md:px-32 py-14 bg-gray-100">
        <?php
        // Define an array of footer menu locations
        $footer_menu_locations = array('footer_1', 'footer_2', 'footer_3', 'footer_4');

        // Loop through each footer menu location
        foreach ($footer_menu_locations as $location_name) {
            // Get the menu ID assigned to this location
            $menu_id = get_nav_menu_locations()[$location_name];

            // Retrieve the menu object
            $menu_object = wp_get_nav_menu_object($menu_id);

            // Check if a menu is assigned to this location and if it has items
            if ($menu_object && ($menu_items = wp_get_nav_menu_items($menu_id))) {
                echo '<div class="space-y-4 text-xs text-gray-800">';
                echo '<h5 class="font-bold">' . $menu_object->name . '</h5>';

                // Loop through each menu item
                foreach ($menu_items as $item) {
                    echo '<p>' . $item->title . '</p>';
                }

                echo '</div>';
            }
        }
        ?>
    </div>
    <p>&copy; <?php echo date('Y'); ?> WPTailwind Classic. All rights reserved.</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>
