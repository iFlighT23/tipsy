<div>
    <div class="flex justify-evenly my-4">
        <button wire:click='create' class="border border-green-600 text-green-600 rounded-md py-2 px-2">Ajouter un nouvel
            ingrédient</button>

        <input class="border border-green-600 text-green-600 rounded-md py-2 px-2" type="text" placeholder="recherche"
            wire:model.debounce.500ms="search">
    </div>
    <div class="relative overflow-x-auto mt-12 max-w-7xl mx-auto px-8">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <x-table-header :direction="$orderDirection" name="name" :currentName="$orderField" scope="col" class="px-6 py-3">
                        Nom</x-table-header>
                    <x-table-header :direction="$orderDirection" name="type" :currentName="$orderField" scope="col" class="px-6 py-3">
                        Type</x-table-header>
                    <x-table-header :direction="$orderDirection" name="degree" :currentName="$orderField" scope="col" class="px-6 py-3">
                        Degrés</x-table-header>
                    <th scope="col" class="px-6 py-3">status</th>
                    <th scope="col" class="px-6 py-3">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ingredients as $ingredient)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $ingredient->name }}
                        </th>
                        <td class="px-6 py-4">{{ $ingredient->type }}</td>
                        <td class="px-6 py-4">{{ $ingredient->degree }}</td>
                        <td class="px-6 py-4">
                            @if ($ingredient->status == 1)
                                <span class="text-xs rounded-full py-1 px-2 bg-green-600 text-green-200">actif</span>
                            @else
                                <span class="text-xs rounded-full py-1 px-2 bg-red-600 text-red-200">inactif</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 flex items-center gap-2">
                            <button wire:click='update({{ $ingredient }})'
                                class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-3 hover:bg-gray-200 hover:text-gray-400 cursor-pointer transition-all duration-200">Edit</button>
                            <button wire:click='deleteId({{ $ingredient->id }})'
                                class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-3 hover:bg-sunset hover:text-black cursor-pointer transition-all duration-200">delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    @if ($isOpen)
        <div class="fixed inset-0 flex items-center justify-center drop-shadow-3xl">
            <div class="relative overflow-x-auto mt-8 max-w-xl mx-auto px-8">
                <div
                    class="flex flex-col text-sm text-gray-500 uppercase bg-gray-50 rounded shadow-lg p-12 mt-12 dark:bg-gray-700 dark:text-gray-400">

                    <div class="py-4">
                        <label class="font-semibold text-gray-500" for="name">Nom:</label>
                        <input type="text" wire:model='name'
                            class="flex items-center h-8 px-4 w-48 bg-gray-50 opacity-75mt-2 rounded focus:outline-none focus:ring-2"
                            id="name" placeholder="Nom ingrédient" name="name">
                    </div>

                    <div class="py-4">
                        <label class="font-semibold text-gray-500" for="name">Type:</label>
                        <input type="text" wire:model='type'
                            class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2"
                            id="type" placeholder="type d'ingredient" name="type">
                    </div>

                    <div class="py-4">
                        <label class="font-semibold text-gray-500" for="name">Degré:</label>
                        <input type="number" wire:model='degree'
                            class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2"
                            id="type" placeholder="degré d'alcool" name="degree">
                    </div>

                    <div class="flex mt-4 gap-2 items-center">
                        <label for="status">Actif :</label>
                        <input wire:model='status' class="text-sunset outline-none" type="checkbox" name="status">
                    </div>

                    <div class="flex justify-between mt-8">
                        <button wire:click='store'
                            class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-3 hover:bg-sea hover:text-black cursor-pointer transition-all duration-200">Enregister
                        </button>
                        <button wire:click="closeModal"
                            class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-3 hover:bg-sea hover:text-black cursor-pointer transition-all duration-200">
                            Annuler
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($isDeleteOpen)
        <div class="fixed inset-0 flex items-center justify-center drop-shadow-3xl">
            <div class="relative overflow-x-auto mt-12 max-w-xl mx-auto px-8">
                <div
                    class="flex flex-col text-sm text-gray-500 uppercase bg-gray-50 rounded shadow-lg p-12 mt-12 dark:bg-gray-700 dark:text-gray-400">
                    Confirm delete Ingredient
                 <div class="flex justify-between mt-8">
                        <button wire:click='delete'
                            class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-3 hover:bg-sea hover:text-black cursor-pointer transition-all duration-200">
                            Confirm
                        </button>
                        <button wire:click="closeModalDelete"
                            class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-3 hover:bg-sea hover:text-black cursor-pointer transition-all duration-200">
                            Annuler
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
