<x-ui.section>
    <div class="container max-w-5xl mx-auto px-5 grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-8">
        @foreach ($page->blurbs()->toStructure() as $item)
        <div class="dark:text-white hover:text-zinc-900 dark:hover-text-white space-y-5 dark:bg-zinc-800/30 bg-white/50 p-5 rounded-md hover:bg-white/90 dark:hover:bg-black/50 transition duration-300 transform md:hover:scale-110 border-b-8 border-b-pink-500 group shadow-xl backdrop-blur-sm">
            <div class="text-lg dark:text-white text-zinc-300 font-bold group-hover:text-pink-300 text-center">
                <img class="mx-auto" src="/images/jedox.png" alt="Jedox Logo">
            </div>
            @if ($icon = $item->icon()->toFile())
                <img class="mx-auto h-16 dark:hidden group-hover:block" src="{{ $icon->url() }}" alt="Icono">
            @endif
            @if ($icon = $item->hover()->toFile())
                <img class="mx-auto h-16 hidden dark:block group-hover:hidden" src="{{ $icon->url() }}" alt="Icono">
            @endif
            <h4 class="font-bold text-lg text-center dark:text-white">{{ $item->heading() }}</h4>
            <div class="prose prose-sm dark:text-white dark:group-hover:text-white">
                @kt($item->text())
            </div>
        </div>
        @endforeach
    </div>
</x-ui.section>