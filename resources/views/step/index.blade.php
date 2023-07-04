<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Etape
        </h2>
        <a href="{{ route('steps.create') }}" class="border border-green-600 text-green-600 rounded-md py-2 px-2">Ajouter
            un nouvelle étape</a>
    </x-slot>

    <div class="relative overflow-x-auto mt-12 max-w-7xl mx-auto px-8">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Step Numéro</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                    <th scope="col" class="px-6 py-3">Dose</th>
                    <th scope="col" class="px-6 py-3">Ingrédient</th>
                    <th scope="col" class="px-6 py-3">Recette</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($steps as $step)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $step->step_number }}
                        </th>
                        <td class="px-6 py-4">{{ $step->step_desc }}</td>
                        <td class="px-6 py-4">{{ $step->dose }}</td>
                        <td class="px-6 py-4">{{ $step->ingredient->name }}</td>
                        <td class="px-6 py-4">{{ $step->recipe != null ? $step->recipe->name : 'rien' }}</td>
                        <td class="px-6 py-4">
                            @if ($step->status == 1)
                                <span class="text-xs rounded-full py-1 px-2 bg-green-600 text-green-200">actif</span>
                            @else
                                <span class="text-xs rounded-full py-1 px-2 bg-red-600 text-red-200">inactif</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 flex items-center gap-2">
                            <a href="{{ route('steps.edit', $step) }}"
                                class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-3 hover:bg-gray-200 hover:text-gray-400 cursor-pointer transition-all duration-200">edit</a>
                                <form action="{{ route('steps.destroy', $step) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-3 hover:bg-gray-200 hover:text-gray-400 cursor-pointer transition-all duration-200">delete</button>
                                </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
