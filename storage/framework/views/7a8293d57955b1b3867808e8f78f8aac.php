<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>
<h1 class="text-4xl font-bold  mb-8">Tim Kami</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 ">

    <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-white shadow-lg rounded-2xl p-6  hover:scale-105 transition">

            <img 
                src="<?php echo e(asset($member['foto'])); ?>" 
                alt="<?php echo e($member['nama']); ?>"
                class="w-24 h-24 mx-auto rounded-full object-cover mb-4"
            >

            <h2 class="text-xl font-semibold mt-7">
                <?php echo e($member['nama']); ?>

            </h2>

            <p class="text-gray-500 text-sm">
                NIM: <?php echo e($member['nim']); ?>

            </p>

            <p class="mt-2 text-gray-700 font-medium">
                <?php echo e($member['peran']); ?>

            </p>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/shinomiya/coding/pwl/yoga/digitaprint/resources/views/about.blade.php ENDPATH**/ ?>