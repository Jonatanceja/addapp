<x-ui.section>
    @if ($icon = $page->icon()->toFile())
        <img class="mx-auto w-14 animate-pulse" src="{{ $icon->url() }}" alt="Icono de IA">
    @endif
    <x-text.base>
        @kt($page->text())
    </x-text.base>
</x-ui.section>