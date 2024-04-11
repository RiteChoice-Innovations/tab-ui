@props(['variant' => 'primary', 'size' => 'md'])
@php
$baseClasses = "inline-flex items-center justify-center whitespace-nowrap rounded-xl text-sm font-medium
ring-offset-white disabled:pointer-events-none disabled:opacity-65
transition-colors focus-visible:outline-none focus-visible:ring-2
focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:pointer-events-none
disabled:opacity-50 dark:ring-offset-slate-950 dark:focus-visible:ring-slate-300";

$variants = [
'primary' => 'bg-gray-900 text-slate-50 hover:bg-gray-900/80 dark:bg-slate-50 dark:text-gray-500
dark:hover:bg-slate-100',
'danger' => 'bg-red-500 text-slate-50 hover:bg-red-500/90 dark:bg-red-900 dark:text-slate-50 dark:hover:bg-red-900/90',
"outline"=>
"border border-slate-200 bg-white hover:bg-slate-100 hover:text-slate-900 dark:border-slate-800 dark:bg-slate-950
dark:hover:bg-slate-800 dark:hover:text-slate-50",
"secondary"=>
"bg-slate-100 text-slate-900 hover:bg-slate-100/80 dark:bg-slate-800 dark:text-slate-50 dark:hover:bg-slate-800/80",
"ghost"=> "hover:bg-slate-100 hover:text-slate-900 dark:hover:bg-slate-800 dark:hover:text-slate-50",
"link"=> "text-slate-900 underline-offset-4 hover:underline dark:text-slate-50",
];
$sizes = [
"md"=> "h-10 px-4 py-2",
"sm"=> "h-9 rounded-md px-3",
"xs"=> "h-6 rounded-md px-1",
"lg"=> "h-11 rounded-md px-8",
"icon"=> "h-10 w-10",
];

$class = "$baseClasses $variants[$variant] $sizes[$size] ";
@endphp


<button {{ $attributes->merge(['type' => 'submit',
    'class' => $class]) }}>
    {{ $slot }}
</button>
