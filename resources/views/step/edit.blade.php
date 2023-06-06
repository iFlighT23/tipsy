<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Etapes
        </h2>
        <a href="{{ route('steps.index') }}" class="border border-green-600 text-green-600 rounded-md py-2 px-2">Retour aux
            Etapes</a>
    </x-slot>

    <div class="relative overflow-x-auto mt-12 max-w-xl mx-auto px-8">
        <form
            class="flex flex-col text-sm text-gray-500 uppercase bg-gray-50 rounded shadow-lg p-12 mt-12 dark:bg-gray-700 dark:text-gray-400"
            action="{{ route('steps.update', $step) }}" method="POST">
            @csrf
            @method('PATCH')

            <label class="font-semibold text-gray-500" for="name">Numéro :</label>
            <input class="flex items-center h-8 px-4 w-48 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
                type="number" name="number" value="{{ $step->step_number }}">

            <label class="font-semibold mt-3 text-gray-500" for="type">Description :</label>
            <input class="flex items-center h-8 px-4 w-48 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
                type="text" name="step_desc" value="{{ $step->step_desc }}">

            <label class="font-semibold mt-3 text-gray-500" for="type">Dose :</label>
            <input class="flex items-center h-8 px-4 w-48 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
                type="number" name="dose" value="{{ $step->dose }}">

            <label class="font-semibold mt-3 text-gray-500 " for="type">Ingrédient :</label>
            <select class="bg-gray-200 w-48" name="ingredient_id">
                @foreach ($ingredients as $ingredient)
                    <option value="{{ $ingredient->id }}"
                        {{ $step->ingredient_id == $ingredient->id ? 'selected' : '' }}>{{ $ingredient->name }}
                    </option>
                @endforeach
            </select>

            <div class="flex mt-5 gap-2 items-center">
                <label for="status">Actif :</label>
                <input type="checkbox" id="status" name="status" @if ($step->status == 1) checked @endif>
                </div>

            <div class="flex justify-center">
                <button
                class="flex items-center justify-center h-8 px-2 w-36 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Modifier
                </button>
            </div>
        </form>
    </div>

</x-app-layout>
