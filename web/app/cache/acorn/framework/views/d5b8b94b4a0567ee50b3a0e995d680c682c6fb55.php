<article <?php (post_class('relative w-full h-full')); ?>>
    <div class="relative bg-gradient pt-[40%] group overflow-hidden">
        <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'large', false, ['class' => 'absolute inset-0 w-full h-full object-center object-cover transition ease-in-out duration-300 group-hover:scale-[1.1]']); ?>

        <div class="relative z-20 px-8 md:px-20 pb-8 md:pb-20 flex flex-col gap-8">
            <h1><?php echo e($project['title']); ?></h1>
            <h5><?php echo e(get_field('subtitle', get_the_ID())); ?></h5>
        </div>
    </div>
</article><?php /**PATH /Users/thijsbrons/Sites/thijsbrons/web/app/themes/thijsbrons/resources/views/partials/content-projects.blade.php ENDPATH**/ ?>