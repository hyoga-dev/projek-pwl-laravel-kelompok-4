<?php $__env->startSection('content'); ?>
    <div class="text-center">
        <h1 class="text-3xl font-bold mb-4">
            <?php echo e($namaWebsite); ?>

        </h1>

        <p class="text-lg text-gray-600 mb-6">
            <?php echo e($tagline); ?>

        </p>

        <button class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-700">
            Order Sekarang
        </button>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/shinomiya/coding/pwl/yoga/digitaprint/resources/views/welcome.blade.php ENDPATH**/ ?>