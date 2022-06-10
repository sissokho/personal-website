@props(['page'])

<a href="/" class="font-montserrat text-lg font-bold">
    Moustapha <span class="text-cyan-700">Sissokho</span>
</a>

<nav class="ml-auto flex gap-10" x-data="{ open: false }">
    <button class="absolute top-5 right-20 sm:hidden" x-ref="btn" x-on:click="open = true">
        <!-- Hamburger icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <button class="absolute top-5 right-5 text-white z-20" x-cloak x-show="open" x-transition x-on:click="open = false">
        <!-- Close icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Navigation links -->
    <ul class="absolute inset-0 h-screen z-10 flex flex-col justify-center items-center gap-10 bg-pink-600 sm:static sm:flex-row sm:h-auto sm:gap-5 sm:bg-white"
        x-cloak x-show="open || window.getComputedStyle($refs.btn, null).display === 'none'" x-transition
        x-trap.inert.noscroll="open">
        <x-navigation-item href="/">Home</x-navigation-item>
        <x-navigation-item href="/work">Work</x-navigation-item>
        <x-navigation-item>Blog</x-navigation-item>
    </ul>
</nav>
