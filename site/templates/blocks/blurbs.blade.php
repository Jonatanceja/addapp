<x-ui.section>
    <div class="container mx-auto px-5 grid grid-cols-1 md:grid-cols-4 gap-5 md:gap-8">
        @foreach ($page->blurbs()->toStructure() as $item)
        <div class="dark:text-white hover:text-white text-center space-y-5 dark:bg-zinc-800 bg-zinc-100 p-5 rounded-md hover:bg-pink-500 transition duration-300 transform md:hover:scale-110 border-b-8 border-b-pink-500 group shadow-xl">
            <h3 class="text-lg dark:text-zinc-600 text-zinc-300 font-bold group-hover:text-pink-300">Jedox AIssisted™</h3>
            @if ($icon = $item->icon()->toFile())
                <img class="mx-auto h-16 group-hover:hidden" src="{{ $icon->url() }}" alt="Icono">
            @endif
            @if ($icon = $item->hover()->toFile())
                <img class="mx-auto h-16 hidden group-hover:block" src="{{ $icon->url() }}" alt="Icono">
            @endif
            <h4 class="font-bold text-lg">{{ $item->heading() }}</h4>
            <div class="prose prose-sm dark:text-white group-hover:text-white">
                @kt($item->text())
            </div>
        </div>
        @endforeach
    </div>

</x-ui.section>