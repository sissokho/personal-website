@extends('_layouts.main')

@section('body')
    <div class="max-w-7xl mx-auto flex flex-col gap-10 md:flex-row md:gap-14">
        <div class="w-80 h-80 shrink-0 rounded-lg relative mx-auto md:ml-5">
            <img src="/assets/images/me.jpg" class="block w-full h-full rounded-full" alt="My profile photo">
        </div>

        <div>
            <h2 class="text-lg text-center font-bold tracking-wide md:text-left">
                <span class="inline-block bg-pink-600 text-white px-2 py-1 "
                    style="border-radius: 91% 9% 90% 10% / 29% 82% 18% 71%">
                    Web Developer
                </span>
            </h2>
            <h1 class="text-cyan-700 font-bold text-4xl text-center mt-2 md:text-left">Mouhamadou Moustapha Sissokho</h1>

            <div class="space-y-4 text-slate-600 text-lg tracking-wider">
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
                    <span class="text-cyan-900">siskomouhamed@gmail.com</span> or contact me on
                    <x-link href="https://www.linkedin.com/in/mouhamadou-moustapha-sissokho-548a55125/">LinkedIn</x-link>.
                </p>
            </div>
        </div>
    </div>
@endsection
