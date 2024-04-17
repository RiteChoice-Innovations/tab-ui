@php
    $theme = config('tab-ui.theme.card');
    $class = $theme::make()->render()['root'];
@endphp
<div {{$attributes->merge([
    'class' => $class
])}}>
    {{$slot}}
</div>