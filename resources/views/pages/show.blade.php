<x-web-layout>
    <div class="mx-auto flex flex-col items-center bg-slate-800 rounded p-4 gap-4 w-full relative">
        <h1 class="text-4xl flex-1 text-center">{{ $page->title }}</h1>
        <div class="absolute right-0 top-0 mt-4 mr-4">
            @auth
                <a href="{{ route('pages.edit', $page->slug) }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Modifier
                </a>
            @endauth
        </div>
        <p>{{ $page->content }}</p>
    </div>
</x-web-layout>
