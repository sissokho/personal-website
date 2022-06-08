<li>
    <a {{ $attributes->class([
        'font-bold text-3xl text-white sm:text-black sm:font-normal sm:text-base sm:hover:text-pink-700 sm:transition-colors'
    ]) }}">
        {{ $slot }}
    </a>
</li>
