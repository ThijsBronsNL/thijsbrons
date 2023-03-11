<section <?php if($id): ?> id="<?php echo e($id); ?>" <?php endif; ?> class="relative <?php echo e($bg_color); ?> <?php echo e($pt); ?> <?php echo e($pb); ?>">
    <div class="container">
        <div class="flex items-center justify-center">
            <div class="flex flex-col gap-8 md:gap-16">
                <?php if($title && in_array('title', $content_items)): ?>
                    <<?php echo e($heading); ?> class="<?php echo e($cta_text == true ? "cta-text" : ""); ?>"><?php echo highlightedWord($highlighted_title, $title); ?></<?php echo e($heading); ?>>
                <?php endif; ?>
                <?php if($link && in_array('link', $content_items)): ?>
                    <a class="link w-fit inline-flex items-center gap-4 group transition ease-in-out duration-300" href="<?php echo e($link['url']); ?>" target="<?php echo e($link['target']); ?>">
                        <?php echo e($link['title']); ?>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="url(#gradient)" class="w-12 md:w-[84px] h-12 md:h-[84px] transition ease-in-out duration-300 group-hover:rotate-45 gradient">
                          <defs>
                                    <linearGradient id="gradient">
                                        <stop stop-color="#0575E6" ffset="0" />
                                        <stop stop-color="#00F260" offset="1" />
                                    </linearGradient>
                            </defs>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section><?php /**PATH /Users/thijsbrons/Sites/thijsbrons/web/app/themes/thijsbrons/resources/views/blocks/text.blade.php ENDPATH**/ ?>