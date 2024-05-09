@props(['variant' => 'body1', 'tag' => 'p', 'value' => ''])
@php
    $theme = config('tab-ui.theme.typography');
    $class =$theme::make()->variant($variant)->render();
    $tag = strtolower(str($variant)->startsWith('h') ? $variant : $tag);
@endphp

<{!!  $tag !!} {!!  $attributes->merge(['class' => $class]) !!}>
@if($value)
    {!! $value !!}
@endif
{{ $slot }}
</{!!  $tag !!}>