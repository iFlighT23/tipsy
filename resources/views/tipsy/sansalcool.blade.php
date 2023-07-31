<x-guest-layout>

    <h1 class="flex justify-center m-16 text-6xl font-pacifico antialiased font-bold  ">Cocktails Sans Alcool</h1>
    {{-- affiche les themes seulement actifs et supprimer de l'affichage les inactifs --}}

    <div class="py-12 flex flex-row justify-around">
    @foreach ($recipes as $recipe)
    @include('_partial.card', $recipe)
    @endforeach
    </div>

</x-guest-layout>
