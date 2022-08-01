<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    @include('_partials.head')
</head>

<body class="min-h-screen flex flex-col bg-white font-monserrat antialiased tracking-wide relative">
    <header class="p-5 border-b border-slate-200 sm:px-10 md:px-16">
        <div class="flex items-center max-w-7xl mx-auto">
            <x-navigation :page="$page" />
        </div>
    </header>

    <main class="py-14 px-5 flex-1 sm:px-10 md:px-16">
        @yield('body')
    </main>

    <footer class="p-5 bg-cyan-900 text-slate-200 sm:px-10 md:px-16">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col gap-3 sm:flex-row sm:justify-between sm:items-center">
                <p class="text-center" x-data>
                    Copyright &copy; <span x-text="new Date().getFullYear()"></span> Mouhamadou Moustapha Sissokho
                </p>
                <!-- Github profile -->
                <ul class="flex justify-center gap-5">
                    <li>
                        <a href="{{ $page->github }}" target="_blank" class="group" aria-label="View my Github profile">
                            <x-icons.github aria-hidden="true" class="w-8 h-8 text-slate-300 group-hover:text-white" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ $page->twitter }}" target="_blank" class="group" aria-label="Follow me on Twitter">
                            <x-icons.twitter aria-hidden="true" class="w-8 h-8 text-slate-300 group-hover:text-white" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ $page->linkedin }}" target="_blank" class="group" aria-label="View my Linkedin profile">
                            <x-icons.linkedin aria-hidden="true" class="w-8 h-8 text-slate-300 group-hover:text-white" />
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-2">
                <p class="text-center text-sm">
                    Built with
                    <a href="https://jigsaw.tighten.com/" target="_blank" class="underline decoration-dotted underline-offset-4">
                        Jigsaw
                    </a>,
                    <a href="https://tailwindcss.com/" target="_blank" class="underline decoration-dotted underline-offset-4">
                        Tailwind CSS
                    </a>
                    & <a href="https://alpinejs.dev/" target="_blank" class="underline decoration-dotted underline-offset-4">
                        Alpine.js
                    </a>
                </p>
            </div>
        </div>
    </footer>
</body>

</html>
