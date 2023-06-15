<x-app-layout>
    <body class="">
        <header class="h-[80px] bg-mblue">

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
        </header>
    </body>
    <h1 class="flex justify-center m-16 text-2xl font-bold ">Thèmes</h1>


    <div class=" flex w-[274px] h-[350px]  bg-white border border-gray-200 rounded-lg m-20 shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Nom du cocktail</h5>
            </a>
            <img classe="my-auto" src="{{ url('assets/theme_ann.jpg')}}" alt="image de cocktail EVJF " />
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
            {{-- <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg> --}}
            </a>
        </div>
    </div>

    <div class=" flex w-[274px] h-[350px] bg-white border border-gray-200 rounded-lg m-20 shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Nom du cocktail</h5>
            </a>
            <img class="my-14" src="{{ url('assets/theme_mariage.jpg')}}" alt="image de cocktail thème mariage" />
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
            </a>
        </div>
    </div>

    <div class="flex w-[274px] h-[350px] bg-white border border-gray-200 rounded-lg m-20 shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Nom du cocktail</h5>
            </a>
            <img classe="" src="{{ url('assets/theme_ssalcool.jpeg')}}" alt="image de cocktail thème sans alcool" />
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-sunset rounded-lg hover:opacity-80 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Voir les recettes
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>

</x-app-layout>
