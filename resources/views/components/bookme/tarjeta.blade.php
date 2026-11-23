@props(['titulo', 'descripcion'])

<div data-aos="fade-up" class="text-center px-4 py-2">
    <div class="mx-auto mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-orange-100 text-[#ff6b00] font-bold text-xs">
        BK
    </div>
    <h2 class="text-base font-bold text-gray-900 mb-2">{{ $titulo }}</h2>
    <p class="text-xs text-gray-500 leading-relaxed max-w-xs mx-auto">{{ $descripcion }}</p>

    @isset($pie)
        <div class="mt-3">
            {{ $pie }}
        </div>
    @endisset
</div>
