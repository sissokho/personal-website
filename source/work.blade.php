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
        <p class="text-lg text-slate-700 font-bold text-center mt-2 md:text-left">Here are few projects I have worked on.</p>

        <section class="mt-28">
            <h2 class="text-3xl text-slate-900 font-bold">Main projects</h2>
            <ul class="mt-10 space-y-20">
                @foreach ($projects as $project)
                    <li>
                        <article class="flex flex-col gap-5 lg:flex-row lg:gap-10">
                            <div>
                                <div class="sm:w-[27rem] sm:h-72 shrink-0 rounded-lg relative mx-auto lg:ml-0">
                                    <img src="/assets/images/work/thumbnails/{{ $project->thumbnail }}" width="432"
                                        height="288" decoding="async" loading="lazy"
                                        class="block w-full h-full rounded-lg shadow-lg shadow-slate-400"
                                        alt="{{ $project->title }} project screenshot">
                                </div>
                            </div>
                            <div class="flex flex-col gap-10">
                                <div class="flex-1">
                                    <h2 class="text-center lg:text-left">
                                        <a href="/work/{{ $project->slug }}"
                                            class="text-3xl text-slate-700 font-bold hover:text-cyan-700">{{ $project->title }}
                                        </a>
                                    </h2>
                                    <p class="text-center text-lg text-slate-600 mt-5 lg:text-left">
                                        {{ $project->description }}
                                    </p>
                                    <!-- Technologies used -->
                                    <div class="flex gap-2 justify-center flex-wrap mt-3 lg:justify-start">
                                        @foreach ($project->technologies as $technology)
                                            <span
                                                class="bg-cyan-100/80 text-sm font-normal text-cyan-900 tracking-wider py-1 px-4 rounded-full">
                                                {{ $technology }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Actions -->
                                <div class="text-center space-x-5 lg:text-left">
                                    @if ($project->live_url)
                                        <a href="{{ $project->live_url }}" target="_blank"
                                            class="text-lg border-2 border-cyan-700 text-cyan-700 py-2 px-4 rounded-full hover:bg-cyan-700 hover:text-white">
                                            See Live
                                        </a>
                                    @endif
                                    <a href="/work/{{ $project->slug }}"
                                        class="text-lg border-2 border-cyan-700 text-cyan-700 py-2 px-4 rounded-full hover:bg-cyan-700 hover:text-white">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </article>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>
@endsection
