@php
    $theme = config('tab-ui.theme.card');
    $class = $theme::make()->render()['content'];
@endphp
<div {{$attributes->merge([
    'class' => $class
])}}>
    {{$slot}}
</div>