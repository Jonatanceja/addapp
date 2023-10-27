<div x-data="{ scrolled: false, isMenuOpen: false }" @scroll.window="scrolled = window.scrollY > 0">
    <header :class="{ 'dark:bg-zinc-950 bg-white shadow-lg transition ease-in-out duration-300 text-zinc-900 dark:text-white': scrolled, 'bg-transparent': !scrolled }" class="p-5 flex items-center fixed w-full z-50 text-white">
        <x-ui.logo class="h-10 flex-none" />

        <!-- Botón para abrir/cerrar el menú en dispositivos móviles -->
        <button @click="isMenuOpen = !isMenuOpen" class="md:hidden w-full flex justify-end">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Menú de navegación -->
        <nav :class="{ 'hidden': !isMenuOpen }" class="top-16 md:top-0 left-0 absolute md:relative w-full md:flex md:flex-1 md:items-center md:justify-end md:space-x-5 bg-zinc-900 md:bg-transparent p-10 md:p-0 space-y-5 md:space-y-0">
            <ul class="text-center md:space-x-3 space-y-3 md:space-y-0 md:flex">
                @foreach ($site->children()->listed() as $subpage)
                    <li class="font-bold tracking-wide border-b-2 border-b-transparent hover:border-b-pink-500"><a href="{{ $subpage->url() }}">{{ $subpage->title() }}</a></li>
                @endforeach
            </ul>
            <div class="flex justify-center">
                <x-buttons.principal>Solicita una demo</x-buttons.principal>
            </div>
        </nav>
    </header>
</div>

