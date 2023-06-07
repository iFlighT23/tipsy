<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Thèmes
        </h2>
        <a href="{{ route('themes.index') }}" class="border border-green-600 text-green-600 rounded-md py-2 px-3">Retour aux thèmes</a>
    </x-slot>

    <form action='{{ route('themes.store') }}' method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required size="8">
        <label for="status">actif</label>
        <input type="checkbox" id="status" name="status">
        <button type="submit" class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-3 hover:bg-gray-200 hover:text-gray-400 cursor-pointer transition-all duration-200">create</button>
    </form>
</x-app-layout>

