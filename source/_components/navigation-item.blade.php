<li>
    <a {{ $attributes->class([
        'font-bold text-3xl text-white sm:text-slate-500 sm:text-base sm:hover:text-cyan-900'
    ]) }}">
        {{ $slot }}
    </a>
</li>
