<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    @include('_partials.head')
</head>

<body class="min-h-screen flex flex-col bg-white font-monserrat antialiased tracking-wide relative">
    <header class="p-5 border-b border-slate-200">
        <div class="flex items-center max-w-7xl mx-auto">
            <x-navigation :page="$page" />
        </div>
    </header>

    <main class="py-14 px-5 flex-1">
        @yield('body')
    </main>

    <footer class="p-5 bg-cyan-900 text-slate-200">
        <p class="text-center" x-data>
            &copy; <span x-text="new Date().getFullYear()"></span> Mouhamadou Moustapha Sissokho
        </p>
        <p class="text-center text-sm mt-2">
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
    </footer>
</body>

</html>
