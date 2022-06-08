<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }} - Moustapha Sissokho</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Play:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
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

    <footer class="p-5 bg-slate-900 text-slate-200">
        <p class="text-center" x-data>
            &copy; <span x-text="new Date().getFullYear()"></span> Mouhamadou Moustapha Sissokho
        </p>
        <p class="text-center text-sm mt-2">
            Built with
            <a href="https://jigsaw.tighten.com/" target="_blank" class="text-pink-400">Jigsaw</a>,
            <a href="https://tailwindcss.com/" target="_blank" class="text-pink-400">Tailwind</a> CSS
            & <a href="https://alpinejs.dev/" target="_blank" class="text-pink-400">Alpine.js</a>
        </p>
    </footer>
</body>

</html>
