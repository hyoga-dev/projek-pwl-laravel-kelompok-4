<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class=" flex   md:mt-[30px]">

        <div class="flex flex-1 md:gap-[100px] flex-col md:flex-row">
        <div class="left order-2 ">

                <h1 class="text-4xl font-bold mb-4">
                    <?php echo e($heroContent->title); ?>

                </h1>

                <p class="text-lg text-gray-600 mb-6">
                    <?php echo e($heroContent->tagline); ?>

                </p>

                <div class="kel mb-5 bg-cyan-950 w-max text-white px-1 py-0.5 block">
                    <p class=""><?php echo e($websiteInfo->namaKelompok); ?> <span><?php echo e($websiteInfo->semester); ?></span></p>
                </div>

            <button class="bg-blue-500 text-xl text-white px-6 py-2 rounded hover:bg-blue-700 w-max mt-10">
                Order Sekarang
            </button>
        </div>

        <div class="right order-1 md:order-3 ">
            <div class="thumbnail overflow-hidden h-[400px] md:h-[500px] w-full md:w-md rounded-tl-[100px] rounded-br-[100px]">
               <img src="<?php echo e(asset('images/thub.png')); ?>" alt="logo" class="w-full h-full object-cover">
            </div>
        </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/shinomiya/coding/pwl/yoga/digitaprint/resources/views/home.blade.php ENDPATH**/ ?>