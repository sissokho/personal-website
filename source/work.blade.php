@extends('_layouts.main')

@section('title', 'My work')

@section('body')
<div class="max-w-7xl mx-auto">
    <h1 class="text-3xl text-center font-bold tracking-wide md:text-left">
        <span class="inline-block bg-pink-600 text-white px-2 py-1"
            style="border-radius: 91% 9% 90% 10% / 29% 82% 18% 71%">
            Selected Work
        </span>
    </h1>
    <p class="text-lg text-slate-700 font-bold text-center mt-2 md:text-left">Here are few projects I have worked on.
    </p>

    <section class="mt-28">
        <ul class="mt-10 space-y-20">
            @foreach ($projects->filter->ofType('main') as $project)
            <x-project.row :project="$project" />
            @endforeach
        </ul>
    </section>
</div>
@endsection
