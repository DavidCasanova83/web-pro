<x-web-layout>
    <div class="bg-slate-800 p-2 rounded flex flex-col items-center gap-2">
        <h1 class="text-lg font-semibold">Modifier la page</h1>
        <form class="flex flex-col gap-2" action="{{ route('pages.update', $page->slug) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="flex flex-col">
                <label for="title">Titre :</label>
                <input class="text-slate-700" type="text" id="title" name="title"
                    value="{{ old('title', $page->title) }}">
                @error('title')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="content">Contenu :</label>
                <textarea class="text-slate-700" id="content" name="content">{{ old('content', $page->content) }}</textarea>
                @error('content')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <button class="bg-slate-400 rounded text-white hover:bg-slate-300" type="submit">Mettre à jour</button>
        </form>
    </div>
</x-web-layout>
