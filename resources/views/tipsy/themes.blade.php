<x-guest-layout>

    <h1 class="flex justify-center m-16 text-7xl font-poppins antialiased font-bold ">Thèmes</h1>
    {{-- affiche les themes seulement actifs et supprimer de l'affichage les inactifs --}}
    @foreach ($themes as $theme)
    @include('_partial.url', $theme)
    @endforeach
</x-guest-layout>
z
