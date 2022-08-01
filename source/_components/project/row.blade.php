@props(['project'])

<li>
    <article class="flex flex-col gap-5 lg:flex-row lg:gap-10">
        <div>
            <x-project.screenshot :thumbnail="$project->thumbnail" :title="$project->title" />
        </div>
        <div class="flex flex-col gap-10">
            <div class="flex-1">
                <x-project.title :slug="$project->slug" :status="$project->status">
                    {{ $project->title }}
                </x-project.title>
                <x-project.description>
                    {{ $project->description }}
                </x-project.description>
                <!-- Technologies used / Concepts learned or practiced -->
                <div class="flex gap-2 justify-center flex-wrap mt-3 lg:justify-start">
                    @foreach ($project->tags as $tag)
                        <x-project.tag>{{ $tag }}</x-project.tag>
                    @endforeach
                </div>
            </div>
            <!-- Actions -->
            <div class="text-center space-x-5 lg:text-left">
                @if ($project->live_url)
                    <x-project.cta href="{{ $project->live_url }}" target="_blank">Live</x-project.cta>
                @endif
                @if ($project->github_repo)
                    <x-project.cta href="{{ $project->github_repo }}" target="_blank">Github</x-project.cta>
                @endif
                @if ($project->slug)
                    <x-project.cta href="{{ $project->slug }}">Read more</x-project.cta>
                @endif
            </div>
        </div>
    </article>
</li>
