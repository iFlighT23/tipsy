<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajouter une Etape
        </h2>
        <a href="{{ route('steps.index') }}" class="border border-green-600 text-green-600 rounded-md py-2 px-2">Retour aux
            Etapes</a>
    </x-slot>

    <div class="relative overflow-x-auto mt-12 max-w-xl mx-auto px-8">
        <form
            class="flex flex-col text-sm text-gray-500 uppercase bg-gray-50 rounded shadow-lg p-12 mt-12 dark:bg-gray-700 dark:text-gray-400"
            action="{{ route('steps.store') }}" method="POST">
            @csrf

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="name">Numéro étape:</label>
                <input type="text"
                    class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2"
                    id="name" placeholder="Numéro étape" name="step_number">
            </div>

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="name">Description:</label>
                <input type="text"
                    class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2"
                    id="type" placeholder="Type d'ingredient" name="step_desc">
            </div>

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="name">Nombre de dose:</label>
                <input type="text"
                    class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2"
                    id="type" placeholder="Nombre de dose(s)" name="dose">
            </div>


            <label class="font-semibold text-gray-500 py-4" for="name">Ingrédient:</label>
            <select class="bg-gray-50 w-48" name="ingredient_id">
                @foreach ($ingredients as $ingredient)
                    <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                @endforeach
            </select>

            <label class="font-semibold text-gray-500 py-4" for="name">Recette:</label>
            <select class="bg-gray-50 w-48" name="recipe_id">
                @foreach ($recipes as $recipe)
                    <option value="{{ $recipe->id }}">{{ $recipe->name }}</option>
                @endforeach
            </select>

            <div class="flex mt-4 gap-2 items-center">
                <label for="status">Actif :</label>
                <input type="checkbox" id="status" name="status">
            </div>

            <div class="flex justify-center">
                <button type="submit"
                    class="flex items-center justify-center h-8 px-2 w-36 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Enregister
                </button>
            </div>

        </form>
    </div>

</x-app-layout>
