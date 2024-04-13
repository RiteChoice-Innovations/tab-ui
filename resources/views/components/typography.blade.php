@props(['variant' => 'body1', 'tag' => 'p', 'value' => ''])
@php
$classes = [
'h1' => 'scroll-m-20 text-4xl font-extrabold tracking-tight lg:text-5xl',
'h2' => 'scroll-m-20 pb-2 text-3xl font-semibold tracking-tight first:mt-0',
'h3' => 'scroll-m-20 text-2xl font-semibold tracking-tight',
'h4' => 'scroll-m-20 text-xl font-semibold tracking-tight',
'h5' => 'scroll-m-20 text-lg font-semibold tracking-tight',
'h6' => 'scroll-m-20 text-base font-semibold tracking-tight',
'p' => 'leading-7 [&:not(:first-child)]:mt-6',
'blockquote' => 'mt-6 border-l-2 pl-6 italic',
'code' => 'relative rounded bg-slate-300 px-[0.3rem] py-[0.2rem] font-mono text-sm font-semibold',
'lead' => 'text-xl',
'large' => 'text-lg font-semibold',
'small' => 'text-sm font-medium leading-none',
'caption' => 'text-xs',
'overline' => 'text-xs uppercase',
];
$class = $classes[$variant] ?? $classes['body1'];
$tag = strtolower(str($variant)->startsWith('h') ? $variant : $tag);
@endphp

<{{ $tag }} {!!  $attributes->merge(['class' => $class]) !!}>
    {!! $value ?? $slot !!}
</{{ $tag }}>