<x-guest-layout>

    <div class="h-[80px] bg-mblue">

        <nav class=" flex bg-mblue">
            <div class="ml-8">
                <x-application-logo />
            </div>

            <ul class="flex flex-row space-x-24 mr-auto pl-20 my-auto  font-bold ">
                <li><a href="menu/concept">Accueil</a></li>
                <li><a href="menu/actualités">Cocktails</a></li>
                <li><a href="menu/prestations">Sans alcool</a></li>
                <li><a href="menu/Marques">Thèmes</a></li>
            </ul>

        </nav>
    </div>
    <h1 class="flex justify-center m-16 text-7xl  font-poppins antialiased font-bold ">Thèmes</h1>
    {{-- affiche les themes seulement actifs et supprimer de l'affichage les inactifs --}}
    @include('_partial.url', $themes)

</x-guest-layout>
