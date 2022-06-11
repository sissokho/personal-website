@extends('_layouts.main')

@section('body')
    <div class="max-w-7xl mx-auto flex flex-col gap-10 md:flex-row md:gap-14">
        <div class="w-80 h-80 shrink-0 rounded-lg relative mx-auto md:ml-5">
            <img src="/assets/images/me.jpeg" width="320" height="320" decoding="async"
                class="block w-full h-full rounded-full" alt="My profile picture">
        </div>

        <div>
            <h2 class="text-lg text-center font-bold tracking-wide md:text-left">
                <span class="inline-block bg-pink-600 text-white px-2 py-1"
                    style="border-radius: 91% 9% 90% 10% / 29% 82% 18% 71%">
                    Web Developer
                </span>
            </h2>
            <h1 class="text-cyan-700 font-bold text-4xl text-center mt-2 md:text-left">Mouhamadou Moustapha Sissokho</h1>

            <div class="space-y-4 text-slate-600 text-lg tracking-wider">
                <p class="mt-10">
                    Hi, I'm Moustapha. I am a PHP developer and I live in Senegal.
                </p>
                <p>
                    I have been working as a web developer since 2018, first at our university and later in a project called
                    <x-link href="https://check4decision.univ-thies.sn/">Check4Decision</x-link> directed by one of my
                    former university teacher.
                </p>
                <p>
                    I love to work with the <x-link href="https://laravel.com/">Laravel framework</x-link> and <x-link
                        href="https://laravel-livewire.com/">Livewire</x-link>. For front-end development I often work with
                    <x-link href="https://alpinejs.dev/">Alpine.js</x-link> and <x-link href="https://tailwindcss.com/">
                        Tailwind CSS</x-link>. I also use <x-link href="https://jigsaw.tighten.com/">Jigsaw</x-link> to
                    build static websites.
                </p>
                <p>
                    Outside of writing code, I enjoy learning new things, reading blog posts and browsing tech twitter (with
                    an heavy emphasis on the PHP & Laravel community).
                </p>
                <p>
                    If you want to reach out, you can send me an email at <span
                        class="text-cyan-900">siskomouhamed@gmail.com</span> or contact me on <x-link
                        href="https://www.linkedin.com/in/mouhamadou-moustapha-sissokho-548a55125/">LinkedIn</x-link>.
                </p>
            </div>
        </div>
    </div>
@endsection
