<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crée une recette
        </h2>
        <a href="{{ route('recipes.index') }}" class="border border-green-600 text-green-600 rounded-md py-2 px-3">
            Retour aux recettes
        </a>
    </x-slot>

    <div class="relative overflow-x-auto mt-12 max-w-2xl mx-auto px-8">
        <form
            class="flex flex-col text-sm text-gray-500 uppercase bg-gray-50 rounded shadow-lg p-12 mt-12 dark:bg-gray-700 dark:text-gray-400"
            action="{{ route('recipes.store') }}" method="Post">
            @csrf

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="name">Recette:</label>
                <input class="flex items-center h-8 px-4 w-96 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2"
                    type='text' name='name' placeholder="Entrer le nom de la recette"
                    class="border border-gray-600 @error('name') border-red-600 @enderror">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>


            <div class="py-4">
                <label class="font-semibold text-gray-500" for="name">Description:</label>
                <textarea class="flex items-center px-4  bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2"
                          type="text" name="description" rows="10" cols="50" placeholder="Entrer votre recette"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="py-4">
                <label class="flex px-4 mt-2 font-semibold text-gray-500" for="name">Theme:</label>
                @foreach ($themes as $theme)
                    <input class="flex-col" type="checkbox" name="themes[]" value="{{ $theme->id }}" class="border-gray-600">
                    <label>{{ $theme->name }}</label>
                @endforeach
            </div>
            <div class="flex justify-center">
            <button type="submit" class="flex items-center justify-center h-8 px-2 w-36 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Enregistrer</button>
            </div>
        </form>
    </div>
</x-app-layout>
