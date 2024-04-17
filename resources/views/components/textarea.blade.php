@props([
    'disabled' => false,
    'variant' => 'outlined',
    'color' => 'primary',
    'rounded' => 'md',
    'label' => '',
    'helpText' => '',
])

@php
    $name = $attributes->get('name');
    $id = $attributes->get('id');
    $hasError = (boolean) $errors->get($name);
    $theme = config('tab-ui.theme.input');
     $color = $hasError ? 'negative' : $color;
    $class = $theme::make()->variant($variant)->color($color)->rounded($rounded)->render();
@endphp
<div>
    @if($label)
        <x-tab-ui::label :for="$id ?? $name" :value="$label"/>
    @endif

    <textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $class]) !!}>{{$value ?? $slot
    }}</textarea>

    @if($helpText)
        <x-tab-ui::typography variant="caption" :value="$helpText" class="mt-2"/>
    @endif

    @if($hasError)
        <x-tab-ui::input-error :for="$name" class="mt-2"/>
    @endif
</div>
