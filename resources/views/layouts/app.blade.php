<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ URL::asset('images/wagerlogo.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            
            <div class="font-sans text-white">
                <header>
                    <img src="{{ URL::asset('images/wagerlogo.png') }}" alt="Imagem de capa">
                    <ul>
                        <li><a href="/">Início</a></li>
                    </ul>
                </header>
            </div>

            
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <footer>
            <p>Copyright © 2019-2023, Wager Festas Todos os direitos reservados.</p>
        </footer>

    </body>
</html>
