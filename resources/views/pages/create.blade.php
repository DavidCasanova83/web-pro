<x-web-layout>
    <div class="bg-slate-800 p-2 rounded flex flex-col items-center gap-2">
        <h1 class="text-lg font-semibold">Créer une nouvelle page</h1>
        <form class="flex flex-col gap-2" action="{{ route('formulaire.store') }}" method="POST">
            @csrf
            <div class="flex flex-col">
                <label for="title">Titre</label>
                <input class="text-slate-700" type="text" name="title" id="title" required>
            </div>
            <div class="flex flex-col">
                <label for="content">Contenu</label>
                <textarea class="text-slate-700" name="content" id="content" required></textarea>
            </div>
            <button class="bg-slate-400 rounded text-white hover:bg-slate-300" type="submit">Créer</button>
        </form>
    </div>
</x-web-layout>
