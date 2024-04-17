@php use RiteChoiceInnovations\TabUi\Theme\Button; @endphp
@props([
    'variant' => 'solid',
    'color' => 'primary',
    'rounded' => 'xl',
    'size' => 'md'
])
@php
    $theme = config('tab-ui.theme.button');
        $class = $theme::make()
        ->color($color)
        ->variant($variant)
        ->rounded($rounded)
        ->size($size)
        ->render();
@endphp

<button {{ $attributes->merge(['type' => 'submit', 'class' => $class]) }}>
    {{ $slot }}
</button>
