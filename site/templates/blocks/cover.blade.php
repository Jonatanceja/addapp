@php
    $image = $page->picture_avif()->toFile();
    $image2 = $page->picture_jpg()->toFile();
@endphp

<div class="bg-cover bg-center min-h-screen flex items-center bg-zinc-900 relative z-0" style="background-image: url('{{ $image->url() }}'), url('{{ $image2->url() }}');">
    <div class="container mx-auto space-y-10 px-5 z-20">
        <div>
            <h1 class="text-white text-4xl md:text-8xl xl:text-9xl font-bold">
                {{ $page->heading() }}
            </h1>
        </div>
    </div>
    <div class="text-white absolute bottom-32 -right-14 md:right-0 flex items-center space-x-3 transform rotate-90 animate-pulse z-20">
        <div class="tracking-widest">Continua</div>
        <svg class="w-16 md:w-24" viewBox="0 0 129 23" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M123.129 13.25L0.75 13.25L0.749999 10.25L123.129 10.25L116.143 3.26473C115.558 2.67894 115.558 1.7292 116.143 1.14341C116.729 0.557625 117.679 0.557625 118.265 1.14341L127.811 10.6894C128.396 11.2751 128.396 12.2249 127.811 12.8107L118.265 22.3566C117.679 22.9424 116.729 22.9424 116.143 22.3566C115.558 21.7708 115.558 20.8211 116.143 20.2353L123.129 13.25Z" fill="white"/>
        </svg>
    </div>
    <div class="absolute inset-0 bg-black/30 z-10 w-full h-full"></div>
</div>

