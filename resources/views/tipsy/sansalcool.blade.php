<x-guest-layout>

    <h1 class="flex justify-center m-16 text-6xl font-poppins antialiased font-bold ">Cocktails Sans Alcool</h1>
    {{-- affiche les themes seulement actifs et supprimer de l'affichage les inactifs --}}
    @foreach ($recipes as $recipe)
    @include('_partial.card', $recipe)
    @endforeach
</x-guest-layout>
