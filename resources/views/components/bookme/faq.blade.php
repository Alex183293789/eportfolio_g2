@props(['pregunta', 'respuesta'])

<div x-data="{ abierto: false }" class="border-b border-gray-200 py-4">
    <button @click="abierto = !abierto" type="button" class="w-full flex justify-between items-center text-left text-sm font-medium text-gray-700 hover:text-gray-900">
        <span>{{ $pregunta }}</span>
        <span class="text-gray-400 text-lg font-normal" x-text="abierto ? '−' : '+'">+</span>
    </button>
    <div x-show="abierto" class="mt-3 text-xs text-gray-500 leading-relaxed">
        {{ $respuesta }}
    </div>
</div>
