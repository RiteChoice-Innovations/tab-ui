@php
    $theme = config('tab-ui.theme.card');
    $class = $theme::make()->render()['footer'];
@endphp
<div {{$attributes->merge([
    'class' => $class
])}}>
    @if($slot)
        <div>
            {{$slot}}
        </div>
    @endif
</div>