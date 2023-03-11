<section <?php if($id): ?> id="<?php echo e($id); ?>" <?php endif; ?> class="relative <?php echo e($pt); ?> <?php echo e($pb); ?> <?php echo e($bg_color); ?>">
    <div class="container">
        <div>
            <?php if($title && in_array('title', $content_items)): ?>
                <<?php echo e($heading); ?>><?php echo highlightedWord($highlighted_title, $title); ?></<?php echo e($heading); ?>>
            <?php endif; ?>
            <?php if($content && in_array('content', $content_items)): ?>
                <div class="mt-8 md:mt-16 max-w-xl"><?php echo $content; ?></div>
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
        <?php if($projects): ?>
            <?php $__currentLoopData = $projects['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($project['url']); ?>">
                    <div class="relative bg-gradient pt-[40%] group overflow-hidden mt-8 md:mt-16">
                        <?php echo wp_get_attachment_image( $project["featured_image"], isset($size), "", ["class" => "absolute inset-0 w-full h-full object-center object-cover transition ease-in-out duration-300 group-hover:scale-[1.1]"] ); ?>

                        <div class="relative z-20 px-6 md:px-20 pb-6 md:pb-20 flex flex-col gap-1 md:gap-8">
                            <h1><?php echo e($project['title']); ?></h1>
                            <h5><?php echo e($project['subtitle']); ?></h5>
                            <div class="hidden md:flex gap-4">
                                <?php $__currentLoopData = $project['category']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="group button button-primary"><?php echo e($item->name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</section><?php /**PATH /Users/thijsbrons/Sites/thijsbrons/web/app/themes/thijsbrons/resources/views/blocks/projects.blade.php ENDPATH**/ ?>