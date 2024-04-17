@php use RiteChoiceInnovations\TabUi\Theme\Button; @endphp
@props([
    'variant' => 'solid',
    'color' => 'primary',
    'rounded' => 'sm',
    'size' => 'xs',
    'tag' => 'span',
    'value' => ''
])
@php
    $theme = config('tab-ui.theme.badge');
        $class = $theme::make()
        ->color($color)
        ->variant($variant)
        ->rounded($rounded)
        ->size($size)
        ->render();
@endphp

<{!!  $tag !!} {!!  $attributes->merge(['class' => $class]) !!}>
{!! $value ?? $slot !!}
</{!!  $tag !!}>
