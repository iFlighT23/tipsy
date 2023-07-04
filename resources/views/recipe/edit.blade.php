<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editer une Recette
        </h2>
        <a href="{{ route('recipes.index') }}" class="border border-green-600 text-green-600 rounded-md py-2 px-3">
            Retour aux recettes
        </a>
    </x-slot>

    <div class="">
     <form class="flex flex-col w-6/12 mx-auto" method="post" action="{{ route('recipes.update', $recipe) }}">
            @method('put')
            @csrf
            <input class="my-4 rounded" type='text' name='name' value="{{ $recipe->name }}">
            <textarea class="rounded" type="text" name="description" rows="10" cols="50">{{ $recipe->description }}</textarea>
            @foreach ( $themes as $theme )

            <div class="">
                <input type="checkbox" name="themes[]" value="{{ $theme->id }}" @if ($recipe->themes->contains($theme->id))
                checked
                @endif
                class="border-gray-800">
                <label>{{ $theme->name }}</label>

                @endforeach
                <button type="submit" class="btn px-2 py-3 bg-blue-300 rounded hover:scale-105 hover:bg-blue-400 ease-in-out duration-200">Enregistrer</button>
            </div>

        </form>
    </div>
</x-app-layout>
