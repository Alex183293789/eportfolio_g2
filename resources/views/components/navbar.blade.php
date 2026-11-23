<nav x-data="{ abierto: false }" class="relative">
    <button @click="abierto = !abierto" type="button" class="md:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100 focus:outline-hidden" aria-label="Abrir menú">
        <i class="bi text-2xl" :class="abierto ? 'bi-x-lg' : 'bi-list'"></i>
    </button>

    <ul class="hidden md:flex items-center gap-8 font-medium text-gray-700">
        <li>
            <a href="{{ route('home') }}" class="hover:text-indigo-600 transition {{ request()->routeIs('home') ? 'text-indigo-600 font-bold' : '' }}">Inicio</a>
        </li>
        <li>
            <a href="{{ route('evidencias.index') }}" class="hover:text-indigo-600 transition {{ request()->routeIs('evidencias.*') ? 'text-indigo-600 font-bold' : '' }}">Evidencias</a>
        </li>
        <li>
            <a href="{{ route('perfil') }}" class="hover:text-indigo-600 transition {{ request()->routeIs('perfil') ? 'text-indigo-600 font-bold' : '' }}">Perfil</a>
        </li>
        <li>
            <a href="{{ route('acerca') }}" class="px-4 py-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 transition">Acerca</a>
        </li>
    </ul>

    <div x-show="abierto" @click.away="abierto = false" class="md:hidden absolute right-0 mt-3 w-56 rounded-xl bg-white shadow-lg border border-gray-200 py-3 px-4 z-50">
        <ul class="flex flex-col gap-3 font-medium text-gray-700">
            <li><a href="{{ route('home') }}" class="block py-1 hover:text-indigo-600">Inicio</a></li>
            <li><a href="{{ route('evidencias.index') }}" class="block py-1 hover:text-indigo-600">Evidencias</a></li>
            <li><a href="{{ route('perfil') }}" class="block py-1 hover:text-indigo-600">Perfil</a></li>
            <li class="pt-2 border-t border-gray-100"><a href="{{ route('acerca') }}" class="block text-center py-2 rounded-lg bg-indigo-600 text-white">Acerca</a></li>
        </ul>
    </div>
</nav>
