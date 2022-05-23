@extends('_layouts.main')

@section('body')
    <div class="max-w-7xl mx-auto flex flex-col gap-10 md:flex-row md:gap-14">
        <div
            class="w-80 h-96 shrink-0 rounded-lg relative mx-auto before:-z-10 before:block before:absolute before:inset-0 before:translate-x-6 before:translate-y-6 before:bg-pink-300 before:rounded-lg before:border-2 before:border-slate-700 md:ml-5">
            <img src="/assets/images/me.jpg"
                class="block w-full h-full rounded-lg shadow-xl shadow-slate-900/50 border-2 border-slate-700"
                alt="My profile photo">
        </div>

        <div>
            <h1 class="text-pink-600 font-play text-xl tracking-wide text-center md:text-left">
                Mouhamadou Moustapha Sissokho
            </h1>
            <h2 class="text-2xl text-center md:text-left">Web Developer</h2>

            <div class="space-y-4 text-slate-600 tracking-wider">
                <p class="mt-10">
                    Hi, I'm Moustapha. A web developer from Senegal working mostly with
                    <x-link href="https://laravel.com/">Laravel</x-link>,
                    <x-link href="https://tailwindcss.com/">Tailwind CSS</x-link>,
                    <x-link href="https://laravel-livewire.com/">Livewire</x-link> and
                    <x-link href="https://alpinejs.dev/">Alpine.js</x-link>.
                    I have been using this stack for 1+ year. I do also use
                    <x-link href="https://jigsaw.tighten.com/">Jigsaw</x-link> for building static sites.
                </p>
                <p>I have worked on some interesting projects including a seach engine and a recruiting platform.</p>
                <p>
                    Outside of writing code I enjoy learning new things, reading blog posts, browsing tech twitter (with an
                    heavy emphasis on the PHP & Laravel community) and writing blog posts about web development.
                </p>
                <p>
                    Currently, I'm learning about testing and TDD. I also spend some time maintaining softwares that i have
                    built for the Check4Decision research project.
                </p>
                <p>
                    If you want to reach out, you can send me an email at
                    <span class="text-pink-700">siskomouhamed@gmail.com</span> or contact me on
                    <x-link href="https://www.linkedin.com/in/mouhamadou-moustapha-sissokho-548a55125/">LinkedIn</x-link>.
                </p>
            </div>
        </div>
    </div>
@endsection
