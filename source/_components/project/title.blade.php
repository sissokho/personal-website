@props(['slug', 'status'])

<h2 class="text-center lg:text-left">
    @if ($slug)
        <a href="/work/{{ $slug }}" class="text-3xl text-slate-700 font-bold hover:text-cyan-700">
            {{ $slot }}
        </a>
    @else
        <span class="text-3xl text-slate-700 font-bold">
            {{ $slot }}
        </span>
    @endif

    @if ($status)
        <span class="text-sm font-medium text-pink-600 ml-2">
            {{ $status }}
        </span>
    @endif
</h2>
