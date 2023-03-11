<?php
  $footer = get_field('footer', 'option');
?>

<footer class="relative">
  <div class="container border-t border-white/10 text-[#F0F2F5]">
    <div class="flex items-center justify-between py-8">
      <span>&copy; <?= date('Y') ?> <?php if($footer['text']): ?> <?php echo e($footer['text']); ?> <?php endif; ?></span>
      <?php if($footer['socials']): ?>
        <div class="flex gap-2">
          <?php $__currentLoopData = $footer['socials']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="p-4 border-gradient" href="<?php echo e($social['url']); ?>">
              <?php echo $social['svg']; ?>

            </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</footer>
<?php /**PATH /Users/thijsbrons/Sites/thijsbrons/web/app/themes/thijsbrons/resources/views/sections/footer.blade.php ENDPATH**/ ?>