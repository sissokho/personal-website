@extends('_layouts.main')

@section('body')
    <div class="max-w-7xl mx-auto">
        <h1 class="text-pink-700 font-play text-3xl tracking-wide text-center md:text-left">Selected Work</h1>
        <p class="text-lg text-center md:text-left">Here are few projects I have worked on.</p>
        <ul class="mt-16 space-y-20">
            @foreach ($projects as $project)
                <li>
                    <article class="flex flex-col gap-5 md:flex-row md:gap-10">
                        <div>
                            <div class="sm:w-[27rem] sm:h-72 shrink-0 rounded-lg relative mx-auto md:ml-0">
                                <img src="/assets/images/work/thumbnails/{{ $project->thumbnail }}" width="432"
                                    height="288" decoding="async" loading="lazy"
                                    class="block w-full h-full rounded-lg shadow-lg shadow-slate-400"
                                    alt="{{ $project->title }} project screenshot">
                            </div>
                        </div>
                        <div class="flex flex-col gap-10">
                            <div class="flex-1">
                                <h2 class="text-center md:text-left">
                                    <a href="/work/{{ $project->slug }}"
                                        class="text-2xl font-bold font-play tracking-wider transition-colors hover:text-slate-800">{{ $project->title }}
                                    </a>
                                </h2>
                                <p class="text-center text-slate-600 mt-5 md:text-left">
                                    {{ $project->description }}
                                </p>

                                <!-- Technologies used -->
                                <div class="flex gap-2 justify-center flex-wrap mt-3 md:justify-start">
                                    @foreach ($project->technologies as $technology)
                                        <span
                                            class="text-sm text-pink-700/75 tracking-wider border border-pink-700/75 px-2 rounded-full">
                                            {{ $technology }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="text-center space-x-5 md:text-left">
                                @if ($project->live_url)
                                    <a href="{{ $project->live_url }}" target="_blank"
                                        class="text-pink-700 underline decoration-2 underline-offset-4 transition-all hover:text-pink-800 hover:decoration-4">
                                        See Live
                                    </a>
                                @endif
                                <a href="/work/{{ $project->slug }}"
                                    class="text-pink-700 underline decoration-2 underline-offset-4 transition-all hover:text-pink-800 hover:decoration-4">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </article>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
