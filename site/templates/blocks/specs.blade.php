@php
    $image = $page->picture_avif()->toFile();
    $image2 = $page->picture_jpg()->toFile();
@endphp

<section class="py-24 md:min-h-screen flex items-center bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-pink-500/30 dark:from-pink-500 dark:via-zinc-900 via-white  dark:to-zinc-900 to-white">
    <div class="container max-w-4xl mx-auto relative font-bold px-5">
        <h3 class="dark:text-white text-zinc-900 text-3xl text-center">{{ $page->heading() }}</h3>
        <picture>
            <source srcset="{{ $image->url() }}" type="image/avif">
            <img src="{{ $image2->url() }}" alt="Jedox AIssited">
        </picture>
        @foreach ($page->specs()->toStructure() as $item)
    @if ($loop->index === 0)
        <div class="text-white bg-blue-500/50 px-5 py-2 rounded flex backdrop-blur-sm absolute top-14 md:top-20 left-3 w-40 md:w-56 font-bold hover:bg-pink-500/50 transition duration-300 transform hover:scale-105 items-center text-xs md:text-base">
    @elseif ($loop->index === 1)
        <div class="text-white bg-blue-500/50 px-5 py-2 rounded flex backdrop-blur-sm absolute top-32 md:top-64 left-6 md:left-10 w-40 md:w-56 font-bold hover:bg-pink-500/50 transition duration-300 transform hover:scale-105 items-center text-xs md:text-base">
    @elseif ($loop->index === 2)
        <div class="text-white bg-blue-500/50 px-5 py-2 rounded flex backdrop-blur-sm absolute top-16 md:top-24 right-3 w-40 md:w-56 font-bold hover:bg-pink-500/50 transition duration-300 transform hover:scale-105 items-center text-xs md:text-base">
    @elseif ($loop->index === 3)
        <div class="text-white bg-blue-500/50 px-5 py-2 rounded flex backdrop-blur-sm absolute top-36 md:top-72 right-6 md:right-12 w-40 md:w-56 font-bold hover:bg-pink-500/50 transition duration-300 transform hover:scale-105 items-center text-xs md:text-base">
    @endif
    @if ($icon = $item->icon()->toFile())
        <img class="h-6 md:h-10 mr-2" src="{{ $icon->url() }}" alt="icono">  
    @endif
    {{ $item->text() }}
</div>
@endforeach
    </div>
</section>