<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="bower_components/aos/dist/aos.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="bower_components/aos/dist/aos.css" />
    @livewireStyles
</head>

<body>

    <header>

        {{-- Début de ma nav --}}
        <nav class="flex justify-between items-center bg-bleu_clair h-20 font-poppins px-4 gap-36">

            {{-- menu left --}}
            <div class="flex items-center gap-8">
                <x-application-logo />
                <a href="{{ route('accueil') }}">
                    <button type="button" class="inline-flex flex-col items-center justify-center px-5  ">
                        <svg class="w-6 h-6 mb-1 text-gray-800 dark:text-gray-400 hover-bg-rounded " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        <div></div>
                    </button>
                </a>
                <div class="group">
                    <a href="{{ route('cocktails') }}" class="text-sm">Cocktails</a>
                    <img src="/img/planche.svg" alt="planche" class="hidden group-hover:block w-20 transition duration-500 transform group-hover:translate-x-10 -rotate-3 shadow-lg shadow-bleu animate-bounce">
                </div>

                <div class="group">
                    <a href="{{ route('sansalcool') }}" class="text-sm">Cocktails sans alcool</a>
                    <img src="/img/planche.svg" alt="planche" class="hidden group-hover:block ml-4 w-24 shadow-lg shadow-bleu group-hover:animate-fade-right hover:animate-duration-500">
                </div>
            </div>

            {{-- searchbar --}}

            <div class="grow relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>

                {{-- Barre de recherche debut --}}
                <form action="{{ route('filter.ingredient') }}" method="POST">
                    @csrf
                    <div class="flex">
                        {{-- {{ $_GET['search'] }} $_GET sert à récupérer : ['la valeur que j'ai dans mon search situé dans mon url'--La fonction isset() en PHP permet de vérifier si une variable est définie et n’est pas NULL --}}
                        <input type="text" name="search" value="{{ isset($_GET['search']) ? $_GET['search'] : '' }}" class="bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Rechercher un cocktail ou un ingrédient">
                        <button type="submit" class="p-2.5 ml-2 font-mediumtext-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800  font-medium rounded-lg text-sm text-center mr-2 ">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>
                </form>
                {{-- barre de recherche fin --}}
            </div>

            {{-- menu right --}}
            <div class="flex items-center">
                <div class="px-5 py-2.5 w-20">
                    <a href="{{ route('login') }}" class="text-xs font-poppins">
                        Log in
                    </a>
                </div>
                <div>
                    <form action="{{ route('register') }}">
                        <button type="submit" class="text-gray-800 w-24 bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-poppins rounded-lg text-sm px-5 py-2 mr-2">
                            Sign up
                        </button>
                    </form>
                </div>
            </div>

        </nav>
    </header>
    <div class="font-sans text-gray-800 antialiased ">
        {{ $slot }}
    </div>
    {{-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> --}}
    <script src="bower_components/aos/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>
    <footer>

    </footer>
    @livewireScripts
</body>

</html>
