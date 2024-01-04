<x-guest-layout>

    <div style="background-image: url('assets/bgsable2.jpg')">

        <div class="px-10">
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

            {{-- cards --}}
            <div class="my-12 justify-around flex ">

                <div
                    class="group transition cursor-pointer duration-300 ease-in-out flex flex-col items-stretch w-64  rotate-6 bg-sable_fonce rounded hover:shadow hover:-rotate-6 hover:drop-shadow-xl relative max-w-xs overflow-hidden">
                    <div>
                        <h3 class="text-center font-pacifico m-3">Cocktail Champagne</h3>
                    </div>
                    <div class="h-56 overflow-hidden">
                        <div class="h-full bg-cover group-hover:scale-125 transition duration-300 ease-in-out"
                            style="background-image: url('https://media.istockphoto.com/id/654785536/fr/photo/rafra%C3%AEchissante-punch-cocktail-blue-hawaii.jpg?s=612x612&w=0&k=20&c=XeMtQ_JbCuWWnzZY1164KPnrwQKc-br_yzka0TMDj_I=')">
                        </div>
                    </div>
                    <div class="flex m-3 justify-between">
                        <div class="flex">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                        </div>
                        <button
                            class="shareButton h-10 w-14  bg-white bg-opacity-50 backdrop-blur-lg drop-shadow-lg  overflow-hidden z-0 relative before:[''] before:absolute before:top-16 before:left-0 before:w-full before:h-full shadow-inner before:bg-cyan-600 before:opacity-30 rounded-b-lg before:rounded-r before:transition-all before:duration-500 hover:before:top-0 hover:before:rounded-none"><span
                                class="relative z-10 hover:text-black ">Share</span>
                        </button>

                    </div>

                    <button  class="newShareButton hidden absolute w-9/12">
                        <div class="flex gap-3  left-3  mt-72 z-10 ml-3">
                            <div
                                class="h-8 w-8  bg-white bg-opacity-50 backdrop-blur-lg drop-shadow-lg  overflow-hidden z-0 relative before:[''] before:absolute before:top-16 before:left-0 before:w-full before:h-full shadow-inner before:bg-yellow-400 before:opacity-30 rounded-b-lg before:rounded-r before:transition-all before:duration-500 hover:before:top-0 hover:before:rounded-none">
                                <span class="relative z-20 hover:text-black "><a href="https://www.tiktok.com">
                                        <img src="img/Tiktok.svg" alt="Partager sur Tiktok">
                                    </a></span>
                            </div>
                            <div
                                class="h-8 w-8  bg-white bg-opacity-50 backdrop-blur-lg drop-shadow-lg  overflow-hidden z-0 relative before:[''] before:absolute before:top-16 before:left-0 before:w-full before:h-full shadow-inner before:bg-orange-500 before:opacity-30 rounded-b-lg before:rounded-r before:transition-all before:duration-500 hover:before:top-0 hover:before:rounded-none">
                                <span class="relative z-20 hover:text-black "><a href="https://www.instagram.com">
                                        <img src="img/Instagram.svg" alt="Partager sur Instagram">
                                    </a></span>
                            </div>
                            <div
                                class="h-8 w-8   bg-white bg-opacity-50 backdrop-blur-lg drop-shadow-lg  overflow-hidden z-0 relative before:[''] before:absolute before:top-16 before:left-0 before:w-full before:h-full shadow-inner before:bg-emerald-600 before:opacity-30 rounded-b-lg before:rounded-r before:transition-all before:duration-500 hover:before:top-0 hover:before:rounded-none">
                                <span class="relative z-20 hover:text-black "><a href="https://accounts.snapchat.com">
                                        <img src="img/snap.svg" alt="Partager sur Snapchat">
                                    </a></span>
                            </div>
                            <div
                                class="h-8 w-8   bg-white bg-opacity-50 backdrop-blur-lg drop-shadow-lg  overflow-hidden z-0 relative before:[''] before:absolute before:top-16 before:left-0 before:w-full before:h-full shadow-inner before:bg-rose-600 before:opacity-30 rounded-b-lg before:rounded-r before:transition-all before:duration-500 hover:before:top-0 hover:before:rounded-none">
                                <span class="relative z-20 hover:text-black "><a href="https://twitter.com">
                                        <img src="img/Twitter.svg" alt="Partager sur Twitter">
                                    </a></span>
                            </div>
                        </div>
                    </button>
                </div>


                <div
                    class="group transition cursor-pointer duration-300 ease-in-out flex flex-col items-stretch w-64  -rotate-6 bg-sable_fonce rounded hover:shadow hover:rotate-6 hover:drop-shadow-xl relative max-w-xs overflow-hidden hover:bg-gradient-to-thover: from-rose-500 hover: via-red-500 hover: to-red-100">
                    <div>
                        <h3 class="text-center font-pacifico m-3">Cocktail Sunshine</h3>
                    </div>
                    <div class="h-56 overflow-hidden">
                        <div class="h-56 bg-cover bg-no-repeat bg-center group-hover:scale-125 overflow-hidden max-w-xs transition duration-300 ease-in-out"
                            style="background-image: url('https://media.istockphoto.com/id/951694182/fr/photo/verre-de-cocktail-tropical-sur-le-bord-de-la-piscine.jpg?s=612x612&w=0&k=20&c=PyiLiwvPFj5ilHatEYCyynSyRWIzWVvgNtFOtEfuJ4s=')">
                        </div>
                    </div>
                    <div class="flex m-3 justify-between">
                        <div class="flex">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                        </div>
                        <div class="flex items-center">
                            <button
                                class="h-10 w-14  bg-white bg-opacity-50 backdrop-blur-lg drop-shadow-lg  overflow-hidden z-0 relative before:[''] before:absolute before:top-16 before:left-0 before:w-full before:h-full shadow-inner before:bg-cyan-600 before:opacity-30 rounded-b-lg before:rounded-r before:transition-all before:duration-500 hover:before:top-0 hover:before:rounded-none"><span
                                    class="relative z-10 hover:text-black ">Share</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="group transition cursor-pointer duration-300 ease-in-out flex flex-col items-stretch w-64  rotate-6 bg-sable_fonce rounded hover:shadow grpup hover:-rotate-6 hover:drop-shadow-xl relative max-w-xs overflow-hidden hover:bg-gradient-to-thover: from-rose-500 hover: via-red-500 hover: to-red-100">
                    <div>
                        <h3 class="text-center font-pacifico m-3">Cocktail Exotique</h3>
                    </div>
                    <div class="h-56 overflow-hidden">
                        <div class="h-56 bg-cover bg-no-repeat bg-center group-hover:scale-125 overflow-hidden max-w-xs transition duration-300 ease-in-out"
                            style="background-image: url('https://media.istockphoto.com/id/1296117178/fr/photo/glace-de-boisson-d%C3%A9t%C3%A9-darc-en-ciel-superpos%C3%A9e-d%C3%A9cor%C3%A9e-avec-la-tranche-de-citron.jpg?s=612x612&w=0&k=20&c=mBVbwzBfhEkDYcY-oeTgzZ9JSWEk0hFFFHyYFQBQqiE=')">
                        </div>
                    </div>
                    <div class="flex m-3 justify-between">
                        <div class="flex">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">

                        </div>
                        <div>
                            <button
                                class="h-10 w-14  bg-white bg-opacity-50 backdrop-blur-lg drop-shadow-lg  overflow-hidden z-0 relative before:[''] before:absolute before:top-16 before:left-0 before:w-full before:h-full shadow-inner before:bg-cyan-600 before:opacity-30 rounded-b-lg before:rounded-r before:transition-all before:duration-500 hover:before:top-0 hover:before:rounded-none"><span
                                    class="relative z-10 hover:text-black ">Share</span>
                            </button>
                        </div>

                    </div>



                </div>
                <div
                    class=" z-10 group transition cursor-pointer duration-300 ease-in-out flex flex-col items-stretch w-64  -rotate-6 bg-sable_fonce rounded hover:shadow hover:rotate-6 hover:drop-shadow-xl relative max-w-xs overflow-hidden hover:bg-gradient-to-thover: from-rose-500 hover: via-red-500 hover: to-red-100">
                    <div>
                        <h3 class="text-center font-pacifico m-3">Cocktail Champagne</h3>
                    </div>
                    <div class="h-56 overflow-hidden">
                        <div class="h-56 bg-cover bg-no-repeat bg-center hover:scale-125 overflow-hidden max-w-xs transition duration-300 ease-in-out"
                            style="background-image: url('https://media.istockphoto.com/id/1137312872/fr/photo/verre-%C3%A0-cocktail-avec-vue-mer-plage-%C3%A0-larri%C3%A8re-plan-pendant-lheure-du-coucher-du-soleil.jpg?s=612x612&w=0&k=20&c=fWFx_2CKP_42fGq9-yvw_W9yUjBNBMVO7Kz7HnkwrCg=')">
                        </div>
                    </div>
                    <div class="flex m-3 justify-between">
                        <div class="flex">

                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">

                        </div>
                        <div class="flex items-center">
                            <button
                                class="h-10 w-14  bg-white bg-opacity-50 backdrop-blur-lg drop-shadow-lg  overflow-hidden z-0 relative before:[''] before:absolute before:top-16 before:left-0 before:w-full before:h-full shadow-inner before:bg-cyan-600 before:opacity-30 rounded-b-lg before:rounded-r before:transition-all before:duration-500 hover:before:top-0 hover:before:rounded-none"><span
                                    class="relative z-10 hover:text-black ">Share</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="z-50">
                <h2
                    class="text-center font-pacifico text-5xl p-6 p-5b bg-gradient-to-b from-red-500 to-cyan-400 via-red-200 bg-clip-text text-transparent rotate-6">
                    Ustensiles recommandés</h2>
            </div>

            <div class="flex justify-center -mb-36 ">

                <div class="w-2/5">

                    <p class="font-poppins m-5">Munissez vous de votre plus beau shaker et c'est parti !</p>


                    <img src={{ 'img/cocktail_shaker.png' }} alt="Shaker"
                        class="animate-bounce animate-thrice animate-ease-in-out animate-alternate top-40">
                </div>

                <div>

                    {{-- carousel debut --}}

                    <div
                        class="flex items-center justify-center w-full h-full sm:py-8 px-4 rounded-md font-pacifico text-center shadow-md">
                        <div class="w-full relative flex items-center justify-center">
                            <button aria-label="slide backward"
                                class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer"
                                id="prev">
                                <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                                <div id="slider"
                                    class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                                    <div class="flex flex-shrink-0 relative w-36 h-96 sm:w-auto bg-transparent">
                                        <img src="https://cdn.goody.buzz/media/20190625125414/cuill%C3%A8re-cocktail.jpg"
                                            alt="Cuillère à Cocktail"
                                            class="object-contain h-full object-center w-full rounded" />
                                        <div class="absolute w-full h-full p-6">
                                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-gray-900">
                                                Cuillère à Cocktail</h2>

                                        </div>
                                    </div>
                                    <div class="flex flex-shrink-0 relative w-full  h-96 sm:w-auto">
                                        <img src="https://i.pinimg.com/736x/fa/24/1f/fa241fa279d1cb35ef16ca76a943f426--vin-cocktails.jpg"
                                            alt="Outil à étages pour Cocktail"
                                            class="object-cover object-center w-full rounded top-10" />
                                        <div class="absolute w-full h-full p-6">
                                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-gray-900">
                                                Outil à étages pour Cocktail</h2>

                                        </div>
                                    </div>
                                    <div class="flex flex-shrink-0 relative w-full sm:w-auto h-96">
                                        <img src="https://media.madeindesign.com/nuxeo/products/5/0/coffret-cocktail-acier_madeindesign_350443_original.jpg"
                                            alt="Coffret Cocktail" class="object-cover object-center w-full" />
                                        <div class="absolute w-full h-full p-6">
                                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-gray-900">
                                                Coffret Cocktail</h2>

                                        </div>
                                    </div>
                                    <div class="flex flex-shrink-0 relative w-full sm:w-auto h-96">
                                        <img src="https://ae01.alicdn.com/kf/HTB1W_JTOXXXXXXfXXXXq6xXFXXXI/Stainless-Steel-Measuring-Shot-Cup-Ounce-Jigger-Bar-Cocktail-Drink-Mixer-Liquor-Measuring-Cup-Measurer-Mojito.jpg"
                                            alt="Verre doseur pour Cocktail"
                                            class="object-cover object-center w-full rounded" />
                                        <div class=" absolute w-full h-full p-6">
                                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-gray-900">
                                                Verre doseur pour Cocktail</h2>

                                        </div>
                                    </div>

                                    <div class="flex flex-shrink-0 relative w-full sm:w-auto h-96">
                                        <img src="https://m.media-amazon.com/images/I/61DhiNjIxwL._AC_SX450_.jpg"
                                            alt="Pilon pour Cocktail"
                                            class="object-cover object-center w-full rounded" />
                                        <div class=" absolute w-full h-full p-6">
                                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-gray-900">
                                                Verre doseur pour Cocktail</h2>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <button aria-label="slide forward"
                                class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
                                id="next">
                                <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- carousel fin --}}
                </div>
            </div>
        </div>

        <div class="w-full">
            <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390"
                xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
                <style>
                    .path-0 {
                        animation: pathAnim-0 30s;
                        animation-timing-function: linear;
                        animation-iteration-count: infinite;
                    }

                    @keyframes pathAnim-0 {
                        0% {
                            d: path("M 0,400 C 0,400 0,200 0,200 C 96.07142857142858,181.28571428571428 192.14285714285717,162.57142857142858 297,160 C 401.85714285714283,157.42857142857142 515.4999999999999,171 660,166 C 804.5000000000001,161 979.8571428571429,137.42857142857142 1115,140 C 1250.142857142857,142.57142857142858 1345.0714285714284,171.28571428571428 1440,200 C 1440,200 1440,400 1440,400 Z");
                        }

                        25% {
                            d: path("M 0,400 C 0,400 0,200 0,200 C 125.60714285714286,177.82142857142856 251.21428571428572,155.64285714285714 370,160 C 488.7857142857143,164.35714285714286 600.7499999999999,195.24999999999997 715,220 C 829.2500000000001,244.75000000000003 945.7857142857142,263.3571428571429 1067,259 C 1188.2142857142858,254.6428571428571 1314.107142857143,227.32142857142856 1440,200 C 1440,200 1440,400 1440,400 Z");
                        }

                        50% {
                            d: path("M 0,400 C 0,400 0,200 0,200 C 113.17857142857142,222.82142857142856 226.35714285714283,245.64285714285714 362,246 C 497.64285714285717,246.35714285714286 655.7500000000001,224.25 774,225 C 892.2499999999999,225.75 970.6428571428571,249.35714285714283 1075,249 C 1179.357142857143,248.64285714285717 1309.6785714285716,224.32142857142858 1440,200 C 1440,200 1440,400 1440,400 Z");
                        }

                        75% {
                            d: path("M 0,400 C 0,400 0,200 0,200 C 124.21428571428572,199 248.42857142857144,198 371,194 C 493.57142857142856,190 614.5000000000001,183 726,182 C 837.4999999999999,181 939.5714285714287,186.00000000000003 1057,190 C 1174.4285714285713,193.99999999999997 1307.2142857142858,197 1440,200 C 1440,200 1440,400 1440,400 Z");
                        }

                        100% {
                            d: path("M 0,400 C 0,400 0,200 0,200 C 96.07142857142858,181.28571428571428 192.14285714285717,162.57142857142858 297,160 C 401.85714285714283,157.42857142857142 515.4999999999999,171 660,166 C 804.5000000000001,161 979.8571428571429,137.42857142857142 1115,140 C 1250.142857142857,142.57142857142858 1345.0714285714284,171.28571428571428 1440,200 C 1440,200 1440,400 1440,400 Z");
                        }
                    }
                </style>
                <defs>
                    <linearGradient id="gradient" x1="10%" y1="120%" x2="100%" y2="10%">

                        <stop offset="50%" stop-color="#fc4560" stop-opacity="39%"></stop>
                        <stop offset="70%" stop-color="#f78905" stop-opacity="41%"></stop>
                        <stop offset="80%" stop-color="#e2d031" stop-opacity="21%"></stop>

                    </linearGradient>
                    <feGaussianBlur in="SourceAlpha" stdDeviation="4" result="blur" />
                    <feOffset in="blur" dx="4" dy="4" result="offsetBlur" />
                </defs>

                <path
                    d="M 0,400 C 0,400 0,200 0,200 C 96.07142857142858,181.28571428571428 192.14285714285717,162.57142857142858 297,160 C 401.85714285714283,157.42857142857142 515.4999999999999,171 660,166 C 804.5000000000001,161 979.8571428571429,137.42857142857142 1115,140 C 1250.142857142857,142.57142857142858 1345.0714285714284,171.28571428571428 1440,200 C 1440,200 1440,400 1440,400 Z"
                    stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="1"
                    class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
            </svg>

        </div>
    </div>

    <div class="bg-[#fcaba6]">

        @foreach ($themes as $theme)
            @include('_partial.url', $theme)
        @endforeach
    </div>

</x-guest-layout>
