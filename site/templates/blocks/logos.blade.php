<x-ui.section>
    <div class="container mx-auto text-zinc-900 dark:text-white space-y-20">
        <div class="space-y-5">
            <h4 class="text-4xl font-bold text-center">Confian en nosotros</h4>
            <div class="h-1 w-32 bg-pink-500 mx-auto"></div>
        </div>
        <x-ui.swiper>
            @foreach ($page->companies()->toStructure() as $item)
                <div class="swiper-slide space-y-5 px-5">
                    <div>
                        @if ($logo = $item->logo()->toFile())  
                        <img class="h-12 mx-auto" src="{{ $logo->url() }}" alt="">
                        @endif
                    </div>
                    <h5 class="font-bold text-2xl">{{ $item->name() }}</h5>
                    <x-text.base_left>
                        @kt($item->text())
                    </x-text.base_left>
                </div>                
            @endforeach
        </x-ui.swiper>
    </div>
</x-ui.section>