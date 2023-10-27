<x-ui.section>
    <div class="container max-w-6xl mx-auto px-5 grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-8">
        @foreach ($page->blurbs()->toStructure() as $item)
        <div class="dark:text-white text-zinc-900 space-y-5">
            <h4 class="font-bold text-lg">{{ $item->heading() }}</h4>
            <div class="h-1 w-10 bg-pink-500"></div>
            <div class="prose dark:prose-invert group-hover:text-white">
                @kt($item->text())
            </div>
        </div>
        @endforeach
    </div>
</x-ui.section>