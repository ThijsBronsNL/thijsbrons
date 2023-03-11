<section <?php if($id): ?> id="<?php echo e($id); ?>" <?php endif; ?> class="relative <?php echo e($bg_color); ?> <?php echo e($pt); ?> <?php echo e($pb); ?>">
    <div class="container">
        <div class="flex flex-col gap-8 md:gap-16">
            <?php if($title && in_array('title', $content_items)): ?>
                <<?php echo e($heading); ?>><?php echo highlightedWord($highlighted_title, $title); ?></<?php echo e($heading); ?>>
            <?php endif; ?>
            <div class="grid grid-cols-1 lg:grid-cols-10 justify-center items-center gap-4">
                <?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="lg:col-span-2 flex flex-col gap-8 justify-center items-center bg-secondary p-8 lg:p-12 w-full h-full">
                        <div class="relative w-28 h-28">
                            <?php echo wp_get_attachment_image( $icon['image']['ID'], isset($size), "", ["class" => "w-full h-full abolute inset-0 object-cover object-center"] ); ?>

                        </div>
                        <h6><?php echo e($icon['title']); ?></h6>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section><?php /**PATH /Users/thijsbrons/Sites/thijsbrons/web/app/themes/thijsbrons/resources/views/blocks/icons.blade.php ENDPATH**/ ?>