<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-6 py-12">

    <h1 class="text-4xl font-bold text-center mb-10">
        Hubungi Kami 
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

        <div class="space-y-6">
            <h2 class="text-xl font-semibold">Informasi Kontak</h2>

            <div>
                <p class="text-gray-600">Email:</p>
                <p class="font-medium">yoga.printing@yey.mail</p>
            </div>

            <div>
                <p class="text-gray-600">Telepon:</p>
                <p class="font-medium">+62 812-3456-7890</p>
            </div>

            <div>
                <p class="text-gray-600">Alamat:</p>
                <p class="font-medium">Indonesia</p>
            </div>

            <div>
                <p class="text-gray-600 mb-2">Sosial Media:</p>
                <div class="flex gap-4">
                    <a href="#" class="text-blue-500 hover:underline">Instagram</a>
                    <a href="#" class="text-blue-500 hover:underline">Twitter</a>
                    <a href="#" class="text-blue-500 hover:underline">LinkedIn</a>
                </div>
            </div>
        </div>

        <div class="bg-white shadow rounded-2xl p-6">
            <h2 class="text-xl font-semibold mb-4">Kirim Pesan</h2>

            <form>
                <div class="mb-4">
                    <label class="block text-sm mb-1">Nama</label>
                    <input type="text" class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="mb-4">
                    <label class="block text-sm mb-1">Email</label>
                    <input type="email" class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="mb-4">
                    <label class="block text-sm mb-1">Pesan</label>
                    <textarea rows="4" class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                </div>

                <button type="submit" 
                    class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">
                    Kirim Pesan
                </button>
            </form>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/shinomiya/coding/pwl/yoga/digitaprint/resources/views/contact.blade.php ENDPATH**/ ?>