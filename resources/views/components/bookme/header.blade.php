<header class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        <div class="flex items-center gap-10">
            <a href="{{ route('home') }}" class="flex items-center gap-2 text-xl font-extrabold text-gray-900">
                <span class="flex items-center justify-center w-7 h-7 rounded-sm bg-[#ff6b00] text-white text-sm">
                    <i class="bi bi-bookmark-fill"></i>
                </span>
                <span>Book me</span>
            </a>

            <x-navbar />
        </div>

        <div class="hidden md:flex items-center gap-6">
            <a href="#demo" class="text-sm font-medium text-gray-600 hover:text-gray-900">Demo</a>
            <a href="#signup" class="px-4 py-2 rounded-sm bg-[#ff6b00] hover:bg-[#e66000] text-white text-sm font-semibold transition">
                Login / Sign up
            </a>
        </div>
    </div>
</header>
