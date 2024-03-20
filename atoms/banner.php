<div class="relative h-[300px] sm:h-[400px] lg:h-[500px] xl:h-[600px] 2xl:h-[700px] overflow-hidden">
    <?php $banner_image = get_theme_mod('banner_image'); ?>
    <?php if ($banner_image) : ?>
        <img src="<?php echo esc_url($banner_image); ?>" class="object-cover" alt="Banner Image">
    <?php endif; ?>
    <div class="absolute top-[30%] w-full text-center min-h-28">
        <p class="text-sm sm:text-lg font-bold py-10"><?php echo get_theme_mod('banner_text'); ?></p>
        <a href="<?php echo esc_url(get_theme_mod('banner_link')); ?>" class="text-red-500 bg-white/60 backdrop-blur-sm px-10 py-4 shadow-md rounded-full font-bold my-3 hover:shadow-xl active:scale-90 transition duration-150">I&rsquo;m flexible</a>
    </div>
</div>
