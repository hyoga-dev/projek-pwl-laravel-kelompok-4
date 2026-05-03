<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'Yoga Print'); ?></title>

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <?php echo $__env->make('components.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main class="flex-1 max-w-6xl mx-auto w-full px-4  mt-5 md:mt-20 ">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html><?php /**PATH /home/shinomiya/coding/pwl/yoga/digitaprint/resources/views/layouts/app.blade.php ENDPATH**/ ?>