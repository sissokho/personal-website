@props(['isActive'])

<a {{ $attributes }} @class([
    'font-bold text-base after:block after:h-1 after:w-7 after:bg-cyan-700 after:rounded-full after:transition-transform after:origin-left hover:text-cyan-700 ',
    'text-slate-600 after:scale-0 hover:after:scale-100' => !$isActive,
    'text-cyan-700 after:scale-100' => $isActive,
])>
    {{ $slot }}
</a>
