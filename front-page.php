<?php get_header(); ?>

<?php get_template_part('atoms/banner'); ?>

<?php
$args = array(
    'post_type' => 'post', // Assuming your posts are of type 'post'
    'posts_per_page' => -1, // Retrieve all posts
);

$query = new WP_Query($args);

if ($query->have_posts()) :
?>
    <main class="w-full mx-auto px-5 lg:px-20">
        <section class="py-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php
                      $title = get_the_title();
                      $location = get_field('location'); // Assuming you're using ACF for custom fields
                      $nightly_rate = get_field('nightly_rate'); // Assuming you're using ACF for custom fields
                      $cleaning_fee = get_field('cleaning_fee'); // Assuming you're using ACF for custom fields
                      $thumbnail = get_the_post_thumbnail_url(); // Get the featured image URL
                    ?>

                    <div class="overflow-hidden cursor-pointer transition transform duration-200 ease-out group">
                        <img class="w-full rounded-xl" src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>" />
                        <div class="px-3 py-4">
                            <div class="flex text-base items-center justify-between">
                                <h3 class="grow font-bold truncate"><?php echo $title; ?></h3>
                                <span class="material-symbols-outlined text-md text-black">star</span> 5.0
                            </div>

                            <p class="text-gray-700 text-base truncate my-2"><?php echo $location; ?></p>

                            <div class="flex text-base lg:text-sm xl:text-base items-center justify-between">
                                <p class="flex items-center">
                                    <span class="material-symbols-outlined text-blue-600 mr-1">nights_stay</span>
                                    <span class="font-bold">$<?php echo $nightly_rate; ?></span>
                                    <span class="pl-1 font-normal">night</span>
                                </p>
                                <p class="flex items-center">
                                    <span class="material-symbols-outlined text-green-600 mr-1">cleaning</span>
                                    <span class="text-gray-700">$<?php echo $cleaning_fee; ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
    </main>
<?php
    wp_reset_postdata();
else :
    echo 'No posts found';
endif;
?>

<?php get_footer(); ?>
