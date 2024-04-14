@props([
    'title'=>'',
    'description'=>'',
])

<div {{$attributes->merge([
    'class' => 'flex flex-col space-y-1.5 p-6'
])}}>
    @if($title)
        <h3 class="text-2xl font-semibold leading-none tracking-tight">{{ $title }}</h3>
    @endif
    @if($description)
        <p class="text-sm text-slate-500">
            {{ $description }}
        </p>
    @endif
    @if($slot)
        <div>
            {{$slot}}
        </div>
    @endif
</div>