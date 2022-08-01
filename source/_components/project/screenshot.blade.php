@props(['title', 'thumbnail'])

<div class="sm:w-[27rem] sm:h-72 shrink-0 rounded-lg relative mx-auto lg:ml-0">
    <img src="/assets/images/work/thumbnails/{{ $thumbnail }}" width="432" height="288" decoding="async" loading="lazy" class="block w-full h-full rounded-lg shadow-md shadow-slate-400" alt="{{ $title }} project screenshot">
</div>
