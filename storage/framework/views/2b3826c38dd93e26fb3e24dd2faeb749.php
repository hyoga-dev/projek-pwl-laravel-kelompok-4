<nav class="bg-slate-950 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="font-bold text-lg">Yoga Printing</h1>

        <button id="menu-btn" class="md:hidden focus:outline-none">
            ☰
        </button>

        <ul id="menu" class="hidden md:flex gap-4 md:items-center absolute md:static bg-slate-950 left-0 top-16 w-full md:w-auto p-4 md:p-0">
           <li><a href="/" class="block px-3 py-2 rounded-md transition-all duration-300 hover:bg-slate-800 hover:text-white">Home</a></li>
<li><a href="/about" class="block px-3 py-2 rounded-md transition-all duration-300 hover:bg-slate-800 hover:text-white">About</a></li>
<li><a href="/blog" class="block px-3 py-2 rounded-md transition-all duration-300 hover:bg-slate-800 hover:text-white">Artikel</a></li>
<li><a href="/contact" class="block px-3 py-2 rounded-md transition-all duration-300 hover:bg-slate-800 hover:text-white">Contact</a></li>
        </ul>
    </div>
</nav>

<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script><?php /**PATH /home/shinomiya/coding/pwl/yoga/digitaprint/resources/views/components/navbar.blade.php ENDPATH**/ ?>