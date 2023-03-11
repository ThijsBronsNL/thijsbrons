<section <?php if($id): ?> id="<?php echo e($id); ?>" <?php endif; ?> class="relative flex items-center justify-center h-screen <?php echo e($bg_color); ?>">
    <div class="container">
        <div class="flex flex-col justify-center items-center">
            <div class="flex flex-col justify-center items-center text-center">
                <?php if($image && in_array('image', $content_items)): ?>
                    <div class="relative w-32 md:w-52 h-32 md:h-52 mb-8 bg-secondary rounded-full">
                        <?php echo wp_get_attachment_image( $image['ID'], isset($size), "", ["class" => "w-full h-full absolute inset-0 object-cover object-center rounded-full"] ); ?>

                    </div>
                <?php endif; ?>
                <?php if($title && in_array('title', $content_items)): ?>
                    <<?php echo e($heading); ?>><?php echo highlightedWord($highlighted_title, $title); ?></<?php echo e($heading); ?>>
                <?php endif; ?>
                <?php if($content && in_array('content', $content_items)): ?>
                    <div class="mt-8 max-w-3xl"><?php echo $content; ?></div>
                <?php endif; ?>
                <?php if($buttons && in_array('buttons', $content_items)): ?>
                    <div class="flex flex-wrap gap-6 mt-8">
                        <?php $__currentLoopData = $buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => ''.e($button['type']).'','href' => ''.e($button['link']['url']).'','target' => ''.e($button['link']['target']).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => ''.e($button['type']).'','href' => ''.e($button['link']['url']).'','target' => ''.e($button['link']['target']).'']); ?><?php echo $button['link']['title']; ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section><?php /**PATH /Users/thijsbrons/Sites/thijsbrons/web/app/themes/thijsbrons/resources/views/blocks/header.blade.php ENDPATH**/ ?>