@extends('_layouts.main')

@section('body')
    <div class="max-w-3xl mx-auto">
        <h1 class="text-slate-800 font-play font-bold text-4xl tracking-wide text-center md:text-left">
            {{ $page->title }}</h1>

        <!-- Technologies used -->
        <div class="flex gap-2 justify-center flex-wrap mt-5 md:justify-start">
            <span class="text-sm text-pink-700/75 tracking-wider border border-pink-700/75 px-2 rounded-full">Laravel</span>
            <span class="text-sm text-pink-700/75 tracking-wider border border-pink-700/75 px-2 rounded-full">Livewire</span>
            <span
                class="text-sm text-pink-700/75 tracking-wider border border-pink-700/75 px-2 rounded-full">Alpine.js</span>
            <span class="text-sm text-pink-700/75 tracking-wider border border-pink-700/75 px-2 rounded-full">CSS/SASS</span>
        </div>

        <!-- Content -->
        <article
            class="markdown mt-16 prose prose-slate md:prose-lg prose-a:text-pink-700 prose-a:underline prose-a:decoration-2 prose-a:underline-offset-4 prose-a:transition-all hover:prose-a:text-pink-800 hover:prose-a:decoration-4 prose-img:max-w-full prose-img:h-auto prose-img:block prose-img:mx-auto prose-img:shadow-lg prose-img:shadow-slate-400 max-w-none">
            {!! (new TightenCo\Jigsaw\Parsers\MarkdownParser())->parse($page->getContent()) !!}
        </article>
    </div>
@endsection
