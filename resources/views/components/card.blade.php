@props(['title'=>'', 'description'=>'', 'content'=>'', 'footer'=>''])

<div class="rounded-lg border bg-card text-card-foreground shadow-sm">
<x-slot name="header">
    <div class="flex flex-col space-y-1.5 p-6">
        @if($title)
            <h3 class="text-2xl font-semibold leading-none tracking-tight">{{ $title }}</h3>
        @endif
        @if($description)
            <p class="text-sm text-muted-foreground">
                {{ $description }}
            </p>
            @endif
    </div>
</x-slot>

<x-slot name="content">
    <div class="p-6 pt-0">
        {{ $content }}
    </div>
</x-slot>

<x-slot name="footer">
    <div class="flex items-center p-6 pt-0">{{ $footer }}</div>
</x-slot>
    {{ $slot }}
</div>
