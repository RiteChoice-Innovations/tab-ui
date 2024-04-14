<div {{$attributes->merge([
    'class' => 'flex flex-col space-y-1.5 p-6'
])}}>
    @if($slot)
        <div>
            {{$slot}}
        </div>
    @endif
</div>