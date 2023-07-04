<x-guest-layout>

    <div class=" bg-sable_clair">

        {{-- <svg
            class=" absolute h-screen w-screen bg-repeat z-0"style="background-image: url('http://www.w3.org/2000/svg') opacity-25">
            <filter id='noiseFilter'>
                <feTurbulence type='fractalNoise' baseFrequency='0.90
                    ' numOctaves='5'
                    stitchTiles='stitch' />
            </filter>
            <rect width='100%' height='100%' filter='url(#noiseFilter)' />
        </svg> --}}

        <div class="relative py-12 px-24">
            <h1
                class="text-center font-pacifico text-5xl p-5b bg-gradient-to-b from-red-500 to-cyan-400 via-red-200 bg-clip-text text-transparent -rotate-6 py-5">
                Surfez sur les cocktails </h1>

            <p class="text-center font-poppins text-gray-700 py-5">Vous êtes à la recherche de coctails sympas,
                originaux
                ou simplement basiques ? Vous
                êtes au bon endroit pour vivre une expérience des plus plaisantes. Nous avons recensé rien que pour
                vous
                plus d'une centaine de cocktails. Nul doute que vous trouverez votre bonheur. Nous vous souhaitons
                par
                avance une bonne dégustation.</p>
        </div>

        <div class="py-12 flex justify-around">
            <div class="group transition cursor-pointer duration-300 ease-in-out flex flex-col items-stretch w-64  rotate-6 bg-sable_fonce rounded hover:shadow hover:-rotate-6 hover:drop-shadow-xl relative max-w-xs overflow-hidden hover:bg-gradient-to-thover: from-rose-500 hover: via-red-500 hover: to-red-100">
                <div>
                    <h3 class="text-center font-pacifico m-3">Cocktail Champagne</h3>
                </div>
                <div class="h-56 bg-cover bg-no-repeat hover:bg-center hover:scale-110 overflow-hidden max-w-xs transition duration-300 ease-in-out" style="background-image: url('{{ 'img/Fanpop.jpg' }}')">
                </div>
                <div class="flex m-3">
                    <div class="flex">
                        <img src="img/lemon1.svg" alt="Lemon">
                        <img src="img/lemon1.svg" alt="Lemon">
                        <img src="img/lemon1.svg" alt="Lemon">
                        <img src="img/lemon1.svg" alt="Lemon">
                        <img src="img/lemon1.svg" alt="Lemon">
                    </div>
                </div>
            </div>

            <div class="group transition cursor-pointer duration-300 ease-in-out flex flex-col items-stretch w-64  -rotate-6 bg-sable_fonce rounded hover:shadow hover:rotate-6 hover:drop-shadow-xl relative max-w-xs overflow-hidden hover:bg-gradient-to-thover: from-rose-500 hover: via-red-500 hover: to-red-100">
                <div>
                    <h3 class="text-center font-pacifico m-3">Cocktail Champagne</h3>
                </div>
                <div class="h-56 bg-cover bg-no-repeat bg-center group-hover:scale-110 overflow-hidden max-w-xs transition duration-300 ease-in-out" style="background-image: url('{{ 'img/OIP.jpg' }}')">
                </div>
            </div>

            <div class="group transition cursor-pointer duration-300 ease-in-out flex flex-col items-stretch w-64  rotate-6 bg-sable_fonce rounded hover:shadow hover:-rotate-6 hover:drop-shadow-xl relative max-w-xs overflow-hidden hover:bg-gradient-to-thover: from-rose-500 hover: via-red-500 hover: to-red-100">
                <div>
                    <h3 class="text-center font-pacifico m-3">Cocktail Champagne</h3>
                </div>
                <div class="h-56 bg-cover bg-no-repeat bg-center hover:scale-110 overflow-hidden max-w-xs transition duration-300 ease-in-out"
                    style="background-image: url('{{ 'img/cocktail_champagne.jpeg' }}')"></div>
            </div>

            <div class="group transition cursor-pointer duration-300 ease-in-out flex flex-col items-stretch w-64  -rotate-6 bg-sable_fonce rounded hover:shadow hover:rotate-6 hover:drop-shadow-xl relative max-w-xs overflow-hidden hover:bg-gradient-to-thover: from-rose-500 hover: via-red-500 hover: to-red-100">
                <div>
                    <h3 class="text-center font-pacifico m-3">Cocktail Champagne</h3>
                </div>
                <div class="h-56 bg-cover bg-no-repeat bg-center hover:scale-110 overflow-hidden max-w-xs transition duration-300 ease-in-out" style="background-image: url('{{ 'img/R.jpg' }}')">
                </div>
                <div class="py-4 px-6">
                    {{-- <svg width="97" height="22" viewBox="0 0 97 22" fill="none"
                    xmlns="http://www.w3.org/2000/svg"> --}}

                </div>
            </div>
        </div>

        <div class="z-50">
            <h2
                class="text-center font-pacifico text-5xl p-6 p-5b bg-gradient-to-b from-red-500 to-cyan-400 via-red-200 bg-clip-text text-transparent -rotate-6">
                Ustensiles recommandés</h2>

            <div class="flex">
                <div class="">
                    <img src={{ 'img/cocktail_shaker.png' }} alt="Shaker" class="animate-bounce animate-thrice animate-ease-in-out animate-alternate top-40">
                </div>
                <div class="">
                    <p class="font-poppins m-5">Munissez vous de votre plus beau shaker</p>
                </div>
            </div>

        </div>

    </div>



</x-guest-layout>
