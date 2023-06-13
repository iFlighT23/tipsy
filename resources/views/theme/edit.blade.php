<x-app-layout>
    {{-- {{ dd($theme) }} --}}

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editer un Thème
        </h2>
        <a href="{{ route('themes.index') }}" class="border border-green-600 text-green-600 rounded-md py-2 px-3">Retour aux thèmes</a>
    </x-slot>

    <div class="flex justify-center relative overflow-x-auto mt-12 max-w-xl mx-auto px-8">
        <form class="flex flex-col text-sm text-gray-500 uppercase bg-gray-50 rounded shadow-lg p-12 mt-12 dark:bg-gray-700 dark:text-gray-400" action='{{ route('themes.update', $theme)}}' method="post">
            @csrf

            @method('PUT')

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="name">Name</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="text" id="name" name="name" value="{{ $theme->name }}">
            </div>

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="status">actif</label>
                <input type="checkbox" id="status" name="status" @if ($theme->status == 1) checked @endif>
            </div>

            <button type="submit" class="flex items-center justify-center h-8 px-2 w-36 bg-blue-600 mt-8 rounded font-semibold text-sm mx-auto text-blue-100 hover:bg-blue-700 hover:scale-105">update</button>
        </form>
    </div>
</x-app-layout>
