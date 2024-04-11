<div class="rounded-xl bg-white shadow-xl shadow-slate-300/10 dark:bg-slate-700/50 dark:shadow-slate-900">
    @if(isset($header))
    <div class="flex flex-col space-y-1.5 p-6">
        @if(isset($title))
        <h3 class="text-2xl font-semibold leading-none tracking-tight">{{ $title }}</h3>
        @endif
        @if(isset($description))
        <p class="text-sm">
            {{ $description }}
        </p>
        @endif
        {{ $header }}
    </div>
    @endif

    @if(isset($content))
    <div class="p-6">
        {{ $content }}
    </div>
    @endif

    <div>
        {{ $slot }}
    </div>

    @if(isset($footer))
    <div class="flex items-center p-6 pt-0">{{ $footer }}</div>
    @endif
</div>