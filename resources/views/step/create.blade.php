<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Etapes
        </h2>
        <a href="{{ route('step.index') }}" class="border border-green-600 text-green-600 rounded-md py-2 px-2">Retour aux
            Etapes</a>
    </x-slot>

    <div class="relative overflow-x-auto mt-12 max-w-xl mx-auto px-8">
        <form
            class="flex flex-col text-sm text-gray-500 uppercase bg-gray-50 rounded shadow-lg p-12 mt-12 dark:bg-gray-700 dark:text-gray-400"
            action="{{ route('step.store') }}" method="POST">
            @csrf

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="name">Numéro:</label>
                <input type="text"
                    class="flex items-center h-8 px-4 w-48 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
                    id="name" placeholder="Nom ingrédient" name="step_number">
            </div>

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="name">Description:</label>
                <input type="text"
                    class="flex items-center h-8 px-4 w-48 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
                    id="type" placeholder="Type d'ingredient" name="step_desc">
            </div>

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="name">Dose:</label>
                <input type="text"
                    class="flex items-center h-8 px-4 w-48 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
                    id="type" placeholder="Nombre de dose(s)" name="dose">
            </div>

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="name">Ingrédient:</label>
                <select class="bg-gray-200 " name="id_ingredient">
                    @foreach ($ingredients as $ingredient)
                        <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="name">Status:</label>
                <input type="text"
                    class="flex items-center h-8 px-4 w-48 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
                    id="status" placeholder="" name="status">
            </div>

            <button type="submit"
                class="flex items-center justify-center h-8 px-2 w-36 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Enregister</button>

        </form>
    </div>

</x-app-layout>
