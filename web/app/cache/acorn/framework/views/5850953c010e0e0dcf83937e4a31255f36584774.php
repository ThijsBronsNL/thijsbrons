<section <?php if($id): ?> id="<?php echo e($id); ?>" <?php endif; ?> class="relative flex items-center justify-center overflow-hidden <?php echo e($pt); ?> <?php echo e($pb); ?>">
    <div class="w-full md:my-8 py-4 text-2xl md:text-3xl lg:text-4xl font-semibold space-y-4 md:space-y-6 <?php echo e($bg_color); ?>">
        <div class="relative bg-white transform -rotate-3 py-8 flex text-black">
            <div class="animate-marquee whitespace-nowrap flex items-center">
                <?php $__currentLoopData = $word_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $word): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="mx-4 md:mx-6"><?php echo $word['text']; ?></span>
                    <?php if($custom_seperator): ?>
                        <div class="h-6 w-6 mt-1"><?php echo $seperator; ?></div>
                    <?php else: ?>
                        <span class="h-2 w-2 bg-white block"></span>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="absolute top-8 delay-300 animate-marquee2 whitespace-nowrap flex items-center">
                <?php $__currentLoopData = $word_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $word): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="mx-4 md:mx-6"><?php echo $word['text']; ?></span>
                    <?php if($custom_seperator): ?>
                        <div class="h-6 w-6 mt-1"><?php echo $seperator; ?></div>
                    <?php else: ?>
                        <span class="h-2 w-2 bg-black block"></span>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="h-full w-5 bg-white absolute -right-4 top-0 rotate-0"></div>
            <div class="h-full w-5 bg-white absolute -left-4 top-0 rotate-0"></div>
        </div>
    </div>
</section><?php /**PATH /Users/thijsbrons/Sites/thijsbrons/web/app/themes/thijsbrons/resources/views/blocks/word-slider.blade.php ENDPATH**/ ?>