<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Recettes
        </h2>
        <a href="{{ route('recipes.create') }}" class="border border-green-600 text-green-600 rounded-md py-2 px-3">
            Ajouter une recette
        </a>
    </x-slot>

    <div class="relative overflow-x-auto mt-12 max-w-7xl mx-auto px-8">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                    <th scope="col" class="px-6 py-3">Thèmes</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recipes as $recipe)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-800">
                        <td class="px-6 py-3">{{ $recipe->name }}</td>
                        <td class="px-6 py-3">{{ $recipe->description }}</td>
                        <td class="px-6 py-3">
                            @foreach ($recipe->themes as $theme)
                                <div
                                    class="text-xs text-center text-gray-900 bg-{{ $theme->color }}-500 py-1 px-2 rounded-full">
                                    {{ $theme->name }}</div>
                            @endforeach
                        </td>
                        <td class="flex items-center gap-2 px-6 py-3">
                            <a href="{{ route('recipes.show', $recipe) }}"
                                class="rounded-md border border-gray-800 text-sm text-gray-800 py-2 px-3 hover:bg-gray-200 hover:text-gray-400 cursor-pointer transition-all duration-200">Voir</a>
                            <a href="{{ route('recipes.edit', $recipe) }}"
                                class="rounded-md border border-gray-800 text-sm text-gray-800 py-2 px-3 hover:bg-gray-200 hover:text-gray-400 cursor-pointer transition-all duration-200">Edit</a>
                            <form action="{{ route('recipes.destroy', $recipe) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="rounded-md border border-gray-800 text-sm text-gray-600 py-2 px-3 hover:bg-gray-200 hover:text-gray-400 cursor-pointer transition-all duration-200">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
