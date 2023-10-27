<x-ui.section>
    <x-text.base>
        @kt($page->text())
    </x-text.base>
    @if ($page->button()->isNotEmpty())
        <div class="flex justify-center">
            <a href="{{ $page->link() }}"><x-buttons.principal>{{ $page->button() }}</x-buttons.principal></a>
        </div>
    @endif
</x-ui.section>