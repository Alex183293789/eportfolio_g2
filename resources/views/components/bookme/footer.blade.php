<footer class="bg-white pt-12 pb-16">
    <div class="container mx-auto px-6">
        <div class="border-t border-gray-200 pt-12 flex flex-col md:flex-row justify-between items-start md:items-center gap-8">
            <div class="max-w-xs">
                <a href="{{ route('home') }}" class="flex items-center gap-2 text-lg font-extrabold text-gray-900 mb-3">
                    <span class="flex items-center justify-center w-6 h-6 rounded-sm bg-[#ff6b00] text-white text-xs">
                        <i class="bi bi-bookmark-fill"></i>
                    </span>
                    <span>Book me</span>
                </a>
                <p class="text-xs text-gray-500 leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>

            <ul class="flex flex-wrap gap-8 text-sm font-semibold text-gray-700">
                <li><a href="#solution" class="hover:text-[#ff6b00] transition">Solution</a></li>
                <li><a href="#pricing" class="hover:text-[#ff6b00] transition">Pricing</a></li>
                <li><a href="#contact" class="hover:text-[#ff6b00] transition">Contact</a></li>
                <li><a href="#demo" class="hover:text-[#ff6b00] transition">Demo</a></li>
            </ul>
        </div>

        <div class="mt-10 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-gray-400">
            <p>©copyright 2024</p>
            <div>
                <x-bookme.tarjeta titulo="Book me" descripcion="Lorem ipsum dolor sit amet">
                    <x-slot:pie>
                        <span class="text-[11px] text-gray-400">MIT License</span>
                    </x-slot:pie>
                </x-bookme.tarjeta>
            </div>
        </div>
    </div>
</footer>
