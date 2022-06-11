@extends('_layouts.main')

@section('body')
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl text-center font-bold tracking-wide md:text-left">
            <span class="inline-block bg-pink-600 text-white px-2 py-1"
                style="border-radius: 91% 9% 90% 10% / 29% 82% 18% 71%">
                Contact
            </span>
        </h1>
        <p class="text-lg text-slate-700 font-bold text-center mt-2 md:text-left">Please, feel free to reach out.</p>

        <ul class="mt-16 space-y-2">
            <ul class="mt-16 space-y-2">
                <li>
                    <x-contact-link href="mailto:siskomouhamed@gmail.com">
                        <x-icons.mail />
                        <span>siskomouhamed@gmail.com</span>
                    </x-contact-link>
                </li>
                <li>
                    <x-contact-link href="https://github.com/sissokho">
                        <x-icons.github />
                        <span>Github</span>
                    </x-contact-link>
                </li>
                <li>
                    <x-contact-link href="https://www.linkedin.com/in/mouhamadou-moustapha-sissokho-548a55125/">
                        <x-icons.linkedin />
                        <span>Linkedin</span>
                    </x-contact-link>
                </li>
                <li>
                    <x-contact-link href="https://twitter.com/mm_sissokho">
                        <x-icons.twitter />
                        <span>Twitter</span>
                    </x-contact-link>
                </li>
            </ul>
        </ul>
    </div>
@endsection
