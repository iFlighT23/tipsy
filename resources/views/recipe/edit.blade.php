<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editer rune Recette
        </h2>
        <a href="{{ route('recipes.index') }}" class="border border-green-600 text-green-600 rounded-md py-2 px-3">
            Retour aux recettes
        </a>
    </x-slot>

    <div>
        <form method="post" action="{{ route('recipes.update', $recipe) }}">
            @method('put')
            @csrf
            <input type='text' name='name' value="{{ $recipe->name }}">
            <textarea type="text" name="description" rows="10" cols="50">{{ $recipe->description }}"</textarea>
            @foreach ( $themes as $theme )

            <input type="checkbox" name="themes[]" value="{{ $theme->id }}"
            @if ($recipe->themes->contains($theme->id))
            checked
            @endif
            class="border-gray-600">
            <label>{{ $theme->name }}</label>

            @endforeach
            <button type="submit" class="btn">Enregistrer</button>
        </form>
    </div>
</x-app-layout>
