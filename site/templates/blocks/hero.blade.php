@php
    $image = $page->picture_avif()->toFile();
    $image2 = $page->picture_jpg()->toFile();
@endphp

<div class="bg-cover bg-center min-h-screen flex items-center bg-zinc-900 relative" style="background-image: url('{{ $image->url() }}'), url('{{ $image2->url() }}');">
    <div class="container mx-auto space-y-10 px-5">
        <div>
            <h1 class="text-white text-lg md:text-2xl font-bold">
                {{ $page->title() }}
            </h1>
            <h2 class="text-white text-4xl md:text-8xl xl:text-9xl font-bold">
                {{ $page->heading() }}
            </h2>
        </div>
        <div class="md:flex bg-zinc-900 w-3/4 md:w-1/2 items-center shadow-2xl border-b-2 border-pink-500 mx-auto md:mx-0">
            <div class="w-full md:w-2/6 relative group">
                @if ($video = $page->video()->toFile())
                    <a href="{{ $video->url() }}" data-fancybox>
                @endif
                    <picture>
                        @if ($image = $page->cover()->toFile())
                            <source class="w-full" srcset="{{ $image->url() }}" type="image/avif">
                        @endif
                        @if ($image = $page->cover2()->toFile())
                            <img class="w-full" src="{{ $image->url() }}" alt="Portada">
                        @endif
                    </picture>
                    <div class="text-white absolute w-full h-full flex items-center justify-center top-0">
                        <div class="w-12 h-12 border border-white group-hover:border-pink-500 rounded-full flex items-center justify-center text-xl group-hover:bg-pink-500 transition duration-300">
                            <i class="lni lni-play"></i>
                        </div>
                    </div>
                  </a>
            </div>
            <div class="w-full md:w-4/6 p-5 text-white prose-xs md:prose-sm">
                @kt($page->text())
            </div>
        </div>
    </div>
    <div class="text-white absolute bottom-32 -right-14 md:right-0  flex items-center space-x-3 transform rotate-90 animate-pulse">
        <div class="tracking-widest">Continua</div>
        <svg class="w-16 md:w-24" viewBox="0 0 129 23" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M123.129 13.25L0.75 13.25L0.749999 10.25L123.129 10.25L116.143 3.26473C115.558 2.67894 115.558 1.7292 116.143 1.14341C116.729 0.557625 117.679 0.557625 118.265 1.14341L127.811 10.6894C128.396 11.2751 128.396 12.2249 127.811 12.8107L118.265 22.3566C117.679 22.9424 116.729 22.9424 116.143 22.3566C115.558 21.7708 115.558 20.8211 116.143 20.2353L123.129 13.25Z" fill="white"/>
        </svg>
    </div>
</div>

