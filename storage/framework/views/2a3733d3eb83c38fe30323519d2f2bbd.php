<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-6 py-10">

<h1 class="text-4xl font-bold  mb-8">Artikel</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 self-center">

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">

            <img src="<?php echo e($post['image']); ?>" class="w-full h-48 object-cover">

            <div class="p-5">
                <p class="text-sm text-gray-500 mb-2">
                    <?php echo e($post['date']); ?>

                </p>

                <h2 class="text-xl font-semibold mb-2">
                    <?php echo e($post['title']); ?>

                </h2>

                <p class="text-gray-600 text-sm mb-4">
                    <?php echo e($post['excerpt']); ?>

                </p>

                <a href="#" class="text-blue-500 hover:underline text-sm font-medium">
                    Baca Selengkapnya →
                </a>
            </div>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/shinomiya/coding/pwl/yoga/digitaprint/resources/views/blog.blade.php ENDPATH**/ ?>