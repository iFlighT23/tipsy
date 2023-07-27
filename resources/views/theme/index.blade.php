<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Thèmes
        </h2>

        <a href="{{ route('themes.create') }}" class="border border-green-600 text-green-600 rounded-md py-2 px-3">Ajouter un nouveau thème</a>
    </x-slot>

    <div class="relative overflow-x-auto mt-12 max-w-7xl mx-auto px-8">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-topaz dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">id</th>
                    <th scope="col" class="px-6 py-3">name</th>
                    <th scope="col" class="px-6 py-3">url</th>
                    <th scope="col" class="px-6 py-3">status</th>
                    <th scope="col" class="px-6 py-3">actions</th>

                </tr>
            </thead>
            <tbody>
                {{-- le foreach permet de traiter chaque thème un à un --}}
                @foreach ($themes as $theme)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $theme->id }}
                    </th>
                    <td class="px-6 py-4">{{ $theme->name }}</td>
                    <td class="px-6 py-4">
                        <img class="h-10 " src="{{ $theme->url }}" />
                    </td>
                    <td class="px-6 py-4">
                        {{-- le traitement du statut permet d'améliorer l'expérience utilisateur UX --}}
                        @if ($theme->status == 1)
                        <span class="text-xs rounded-full py-1 px-2 bg-green-600 text-green-200">actif</span>
                        @else
                        <span class="text-xs rounded-full py-1 px-2 bg-red-600 text-red-200">inactif</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 flex items-center gap-2">

                        <a href="{{ route('themes.edit', $theme) }}" class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-3 hover:bg-gray-200 hover:text-gray-400 cursor-pointer transition-all duration-200">edit</a>
                        <form action="{{ route('themes.destroy', $theme) }}" method="post">
                            @csrf
                            @method('delete')
                             {{-- ce formulaire est utilisé pour envoyer une requête de suppression
                                 à une route spécifique dans Laravel en utilisant la méthode DELETE.
                        Le paramètre $theme est utilisé pour identifier l'élément à supprimer --}}
                            <button type="submit" onclick="return confirm ('tu es sure coco?')" class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-3 hover:bg-gray-200 hover:text-gray-400 cursor-pointer transition-all duration-200">delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
