<a href="#" class="font-montserrat text-lg font-bold">
    Moustapha <span class="text-pink-700">Sissokho</span>
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
        <li><a class="font-bold text-3xl text-white sm:text-black sm:font-normal sm:text-base sm:hover:text-pink-700 sm:transition-colors"
                href="#">Home</a></li>
        <li><a class="font-bold text-3xl text-white sm:text-black sm:font-normal sm:text-base sm:hover:text-pink-700 sm:transition-colors"
                href="#">Work</a></li>
        <li><a class="font-bold text-3xl text-white sm:text-black sm:font-normal sm:text-base sm:hover:text-pink-700 sm:transition-colors"
                href="#">Blog</a></li>
    </ul>

    <a href="https://github.com/sissokho" target="_blank" class="text-slate-500 transition-colors hover:text-black">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 24 24"
            style=" fill: currentColor;">
            <path
                d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.6,5,2.5,9.3,6.9,10.7v-2.3c0,0-0.4,0.1-0.9,0.1c-1.4,0-2-1.2-2.1-1.9 c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1c0.4,0,0.7-0.1,0.9-0.2 c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6c0,0,1.4,0,2.8,1.3 C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4c0.7,0.8,1.2,1.8,1.2,3 c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v3.3c4.1-1.3,7-5.1,7-9.5C22,6.1,16.9,1.4,10.9,2.1z">
            </path>
        </svg>
    </a>
</nav>
