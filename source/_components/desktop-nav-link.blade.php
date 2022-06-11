@props(['isActive'])

<a {{ $attributes }} @class([
    'font-bold',
    'text-slate-500' => !$isActive,
    'text-cyan-900' => $isActive,
    'hover:text-cyan-900',
])>
    {{ $slot }}
</a>
