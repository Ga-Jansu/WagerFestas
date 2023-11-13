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
    <body>

        <div class="bg">
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
                <div>
                    <a href="/">
                        <div class="w-25 h-25 fill-current">
                                <img src="{{ URL::asset('images/wagerlogo.png') }}" alt="Imagem de capa">
                        </div>
                    </a>
                </div>

                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        </div>
        

        <footer>
            <p>Copyright © 2019-2023, Wager Festas Todos os direitos reservados.</p>
        </footer>

    </body>
</html>
