@props(['variant' => 'body1', 'htmlTag' => 'p'])
@php
$classes = [
'h1' => 'text-4xl font-bold mb-4',
'h2' => 'text-3xl font-bold mb-3',
'h3' => 'text-2xl font-bold mb-2',
'h4' => 'text-xl font-bold mb-2',
'h5' => 'text-lg font-bold mb-1',
'h6' => 'text-base font-bold mb-1',
'subtitle1' => 'text-lg mb-4',
'subtitle2' => 'text-md mb-3',
'body1' => 'text-base mb-4',
'body2' => 'text-sm mb-3',
'button' => 'text-base font-semibold px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600',
'caption' => 'text-xs text-gray-500',
'overline' => 'text-xs uppercase text-gray-500',
];
$class = $classes[$variant] ?? $classes['body1'];
$htmlTag = strtolower(str($variant)->startsWith('h') ? $variant : $htmlTag);
@endphp

<{{ $htmlTag }} {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</{{ $htmlTag }}>