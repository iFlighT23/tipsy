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


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header>
        <nav class="flex justify-between items-center bg-bleu_fonce w-auto h-40">
            <x-application-logo class="w-5 h-40" />
            <a href="">Accueil</a>
            <a href="">Cocktail</a>
            <a href="">Cocktail sans alcool</a>
            <a href="">Thème</a>
            <img src={{ ('img/user.svg') }} alt="user">
            <img src={{ ('img/UserAdd.svg')}} alt="add_user">
            <div class="flex">
                <input  placeholder="Entrer votre recherche class="shadow-lg">
                <img src= {{ asset('img/loupe.png')}} alt="loupe" class="w-3/4 h-2/4">
            </div>

        </nav>
    </header>
    <div class="font-sans text-gray-900 antialiased ">
        {{ $slot }}
    </div>
    <footer>

    </footer>
</body>

</html>
