@extends('_layouts.main')

@section('title', 'Home')

@section('body')
<div class="max-w-7xl mx-auto flex flex-col gap-10 md:flex-row md:gap-14">
    <div class="w-72 h-72 shrink-0 relative mx-auto md:ml-5">
        <img src="/assets/images/me.jpeg" width="320" height="320" decoding="async"
            class="block w-full h-full rounded-lg shadow-md" alt="My profile picture">
    </div>

    <div>
        <h1 class="text-2xl text-center font-bold tracking-wide md:text-left">
            <span class="inline-block bg-pink-600 text-white px-3 py-2"
                style="border-radius: 91% 9% 90% 10% / 29% 82% 18% 71%">
                Mouhamadou Moustapha Sissokho
            </span>
        </h1>

        <div class="space-y-4 text-slate-600 text-lg tracking-wider">
            <p class="mt-10">
                Hello, I am Moustapha. I am PHP / Laravel developer based in Senegal with 4+ years
                of
                experience
                building web applications, websites and APIs.
            </p>
            <p>
                I am experienced with Laravel, Livewire, Alpine.js and Tailwind CSS.
            </p>
            <p>
                I get excited about opportunities where I can work with creative and smart people to build exciting
                products.
            </p>
            <p>
                If you're interested in working together or getting in touch, feel free to contact me on
                <x-link href="{{ $page->linkedin }}" target="_blank">
                    Linkedin
                </x-link>
                or
                <x-link href="{{ $page->twitter }}" target="_blank">
                    Twitter
                </x-link>
            </p>
        </div>
    </div>
</div>
@endsection
