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

<div class="flex h-screen justify-center items-center bg-sable_clair">
    <div class="bg-white p-8 pb-16 rounded-md shadow-md ">
        <x-application-logo />
        @if (Session::has('error'))
        {!! Session::get('error') !!}
        @endif

        <div class="">
            <form method="post" action="{{ route('check.age') }}" class="">
                @csrf

                <input type="number" name="age" placeholder="Entrez votre âge..." required class="ml-36 font-poppins text- border-2 shadow-md ">
                <button class=" bg-bleu_clair ml-8 px-4 rounded-sm shadow-2xl  hover:bg-bleu_fonce text-xl " type="submit">Valider</button>
            </form>
        </div>
    <div>
        <div class="text-red-400 text-xl p-8">
            l'abus d'alcool est dangereux pour la santé à consommer avec modération !
        </div>
</div>


