@extends('_layouts.main')

@section('title', "Project")

@section('body')
<div class="max-w-3xl mx-auto">
    <h1 class="text-slate-800 font-play font-bold text-4xl tracking-wide text-center md:text-left">
        {{ $page->title }}
    </h1>

    <!-- Technologies used -->
    <div class="flex gap-2 justify-center flex-wrap mt-5 md:justify-start">
        @foreach ($page->technologies as $technology)
        <span class="bg-pink-200/50 font-bold text-pink-900 tracking-wider px-2 rounded-sm">
            {{ $technology }}
        </span>
        @endforeach
    </div>

    <!-- Content -->
    <article class="markdown mt-16 prose prose-slate md:prose-lg prose-a:text-cyan-700 prose-a:underline prose-a:decoration-cyan-600 prose-a:decoration-2 prose-a:underline-offset-4 hover:prose-a:text-cyan-900 hover:prose-a:decoration-cyan-800 prose-img:max-w-full prose-img:h-auto prose-img:block prose-img:mx-auto prose-img:shadow-lg prose-img:shadow-slate-400 max-w-none">
        {!! (new TightenCo\Jigsaw\Parsers\MarkdownParser())->parse($page->getContent()) !!}
    </article>
</div>
@endsection
