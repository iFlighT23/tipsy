<div>
        <input class="border border-green-600 text-green-600 rounded-md py-2 px-2" type="text" placeholder="recherche" wire:model="search">

        <div class="relative overflow-x-auto mt-12 max-w-7xl mx-auto px-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nom</th>
                        <th scope="col" class="px-6 py-3">Type</th>
                        <th scope="col" class="px-6 py-3">Degré</th>
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
                                <a href="{{ route('ingredients.edit', $ingredient) }}"
                                    class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-3 hover:bg-gray-200 hover:text-gray-400 cursor-pointer transition-all duration-200">edit</a>
                                <form action="{{ route('ingredients.destroy', $ingredient) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-3 hover:bg-gray-200 hover:text-gray-400 cursor-pointer transition-all duration-200">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
