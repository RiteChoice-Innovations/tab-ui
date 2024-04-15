<div x-data="{ modalOpen: false }"
     @keydown.escape.window="modalOpen = false"
     class="relative z-50 w-auto h-auto">
    {{$slot}}
</div>