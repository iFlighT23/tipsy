<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ingrédients
        </h2>
        <a href="{{ route('ingredients.create') }}"
            class="border border-green-600 text-green-600 rounded-md py-2 px-2">Ajouter un nouvel ingrédient</a>
    </x-slot>

    <livewire:all-ingredient />



</x-app-layout>
