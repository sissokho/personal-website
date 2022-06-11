@extends('_layouts.main')

@section('body')
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl text-center font-bold tracking-wide md:text-left">
            <span class="inline-block bg-pink-600 text-white px-2 py-1"
                style="border-radius: 91% 9% 90% 10% / 29% 82% 18% 71%">
                Selected Work
            </span>
        </h1>
        <p class="text-lg text-slate-700 font-bold text-center mt-2 md:text-left">Here are few projects I have worked on.</p>

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
                                        class="text-3xl text-slate-800 font-bold hover:text-cyan-900">{{ $project->title }}
                                    </a>
                                </h2>
                                <p class="text-center text-lg text-slate-600 mt-5 md:text-left">
                                    {{ $project->description }}
                                </p>

                                <!-- Technologies used -->
                                <div class="flex gap-2 justify-center flex-wrap mt-3 md:justify-start">
                                    @foreach ($project->technologies as $technology)
                                        <span class="bg-pink-200/50 font-bold text-pink-900 tracking-wider px-2 rounded-sm">
                                            {{ $technology }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="text-center space-x-5 md:text-left">
                                @if ($project->live_url)
                                    <a href="{{ $project->live_url }}" target="_blank"
                                        class="text-lg text-slate-900 underline decoration-slate-700 decoration-2 underline-offset-4 hover:text-cyan-900 hover:decoration-cyan-800">
                                        See Live
                                    </a>
                                @endif
                                <a href="/work/{{ $project->slug }}"
                                    class="text-lg text-slate-900 underline decoration-slate-700 decoration-2 underline-offset-4 hover:text-cyan-900 hover:decoration-cyan-800">
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
