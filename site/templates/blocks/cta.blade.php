@php
$bg = $page->background_avif()->toFile();
$bg2 = $page->background_jpg()->toFile();
$image = $page->picture_avif()->toFile();
$image2 = $page->picture_jpg()->toFile();
@endphp

<section class="bg-cover bg-center min-h-screen flex items-center bg-zinc-900 -mt-64 pt-72 pb-24 px-5" style="background-image: url('{{ $bg->url() }}'), url('{{ $bg2->url() }}');">

    <div class="container min-h-6xl mx-auto bg-gradient-to-b from-black/50 to-pink-500/50 p-5 md:p-20 rounded-lg backdrop-blur-sm grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 items-center">
        <div class="space-y-5">
            <div class="prose text-white prose-h2:text-white prose-blockquote:text-white prose-blockquote:text-xl prose-strong:text-pink-500 prose-h2:text-3xl prose-zinc prose-blockquote:border-pink-500 prose-hr:border-2 prose-hr:border-pink-500 prose-hr:w-32 prose-hr:mx-auto">
                @kt($page->text())
            </div>
            <x-buttons.principal>Solicita una Demo</x-buttons.principal>
        </div>
        <picture class="transform md:translate-x-20 md:translate-y-6 md:scale-110 overflow-hidden">
            <source srcset="{{ $image->url() }}" type="image/avif">
            <img src="{{ $image2->url() }}" alt="Jedox AIssited">
        </picture>
    </div>
</section>