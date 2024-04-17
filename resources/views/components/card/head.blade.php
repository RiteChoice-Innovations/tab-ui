@props([
    'title'=>'',
    'description'=>'',
])

@php
    $theme = config('tab-ui.theme.card');
    $class = $theme::make()->render();
@endphp

<div {{$attributes->merge([
    'class' => $class['head']
])}}>
    @if($title)
        <h3 class="{{$class['title']}}">{{ $title }}</h3>
    @endif
    @if($description)
        <p class="{{$class['description']}}">
            {{ $description }}
        </p>
    @endif
    @if($slot)
        <div>
            {{$slot}}
        </div>
    @endif
</div>