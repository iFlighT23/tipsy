<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ingrédients
        </h2>
        <a href="{{ route('ingredients.index') }}" class="border border-green-600 text-green-600 rounded-md py-2 px-2">Retour aux ingrédients</a>
    </x-slot>

<div class="relative overflow-x-auto mt-12 max-w-xl mx-auto px-8">
    <form class="flex flex-col text-sm text-gray-500 uppercase bg-gray-50 rounded shadow-lg p-12 mt-12 dark:bg-gray-700 dark:text-gray-400"
        action="{{ route('ingredients.update', $ingredient) }}" method="POST">
        @csrf
        @method('PATCH')

        <label class="font-semibold text-gray-500" for="name">Ingrédient :</label>
        <input
            class="flex items-center h-8 px-4 w-48 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
            type="text" name="name" value="{{ $ingredient->name }}">
        <label class="font-semibold mt-3 text-gray-500" for="type">Type :</label>
        <input
            class="flex items-center h-8 px-4 w-48 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
            type="text" name="type" value="{{ $ingredient->type }}">
        <label class="font-semibold mt-3 text-gray-500" for="type">Degré :</label>
        <input
            class="flex items-center h-8 px-4 w-48 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
            type="text" name="degree" value="{{ $ingredient->degree }}">

        <div class="flex mt-4 gap-2 items-center">
        <label for="status">Actif :</label>
        <input type="checkbox" id="status" name="status" @if ($ingredient->status == 1) checked @endif>
        </div>

        <div class="flex justify-center">
            <button
                class="flex items-center justify-center h-8 px-2 w-36 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Modifier
            </button>
        </div>
    </form>
</div>

</x-app-layout>
