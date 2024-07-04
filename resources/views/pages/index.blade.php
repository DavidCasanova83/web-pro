<x-web-layout>
    <div class="mx-auto flex flex-col items-center bg-slate-800 rounded p-4 gap-4">
        <h1>Toutes les pages</h1>
        <ul>
            @foreach ($pages as $page)
                <li
                    class="flex flex-col rounded-lg items-center cursor-pointer border border-white p-2 m-2 transform transition-all duration-300 hover:scale-105">
                    <a href="{{ route('page.show', $page->slug) }}"
                        class="w-full h-full flex flex-col items-center no-underline">
                        <h2>{{ $page->title }}</h2>
                        <p>{{ $page->content }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-web-layout>
