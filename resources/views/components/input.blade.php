@props([
    'disabled' => false,
    'color' => 'blue',
    'label' => '',
    'helpText' => '',
])

@php
$name = $attributes->get('name');
$id = $attributes->get('id');
$hasError = (boolean) $errors->get($name);

    $class = "border-gray-300 dark:border-gray-700
dark:bg-gray-900 dark:text-gray-300 focus:border-{$color}-500 dark:focus:border-{$color}-600
focus:ring-{$color}-500
dark:focus:ring-{$color}-600 rounded-md shadow-sm file:border-0 file:bg-transparent file:text-sm
file:font-medium placeholder:text-slate-400";

@endphp
<div>
    @if($label)
        <x-tab-ui::label :for="$id ?? $name" :value="$label"/>
    @endif

    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $class]) !!}>

    @if($helpText)
        <x-tab-ui::typography variant="caption" :value="$helpText" class="mt-2"/>
    @endif

   @if($hasError)
        <x-tab-ui::input-error :for="$name" class="mt-2"/>
   @endif
</div>
