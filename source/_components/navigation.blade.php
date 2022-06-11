@props(['page'])

<a href="/" class="font-montserrat text-lg font-bold">
    Moustapha <span class="text-cyan-700">Sissokho</span>
</a>

<!-- Desktop navigation -->
<nav class="hidden ml-auto sm:flex gap-10">
    <ul class="flex gap-5">
        <li>
            <x-desktop-nav-link href="/" :isActive="$page->linkIsActive('')">
                Home
            </x-desktop-nav-link>
        </li>
        <li>
            <x-desktop-nav-link href="/work" :isActive="$page->linkIsActive('work')">
                Work
            </x-desktop-nav-link>
        </li>
        <li>
            <x-desktop-nav-link href="/contact" :isActive="$page->linkIsActive('contact')">
                Contact
            </x-desktop-nav-link>
        </li>
    </ul>
</nav>

<!-- Mobile navigation -->
<nav class="ml-auto flex gap-10 sm:hidden" x-data="{ open: false }">
    <!-- Menu trigger -->
    <button class="absolute top-3 right-5" x-ref="btn" x-on:click="open = true">
        <x-icons.hamburger />
    </button>

    <!-- Close button -->
    <button class="absolute top-5 right-5 z-20" x-cloak x-show="open" x-transition x-on:click="open = false">
        <x-icons.close />
    </button>

    <!-- Navigation links -->
    <ul class="absolute inset-0 h-screen z-10 flex flex-col justify-center items-center gap-10 bg-pink-600" x-cloak
        x-show="open" x-transition x-trap.inert.noscroll="open">
        <li>
            <x-mobile-nav-link href="/">Home</x-mobile-nav-link>
        </li>
        <li>
            <x-mobile-nav-link href="/work">Work</x-mobile-nav-link>
        </li>
        <li>
            <x-mobile-nav-link href="/contact">Contact</x-mobile-nav-link>
        </li>
    </ul>
</nav>
