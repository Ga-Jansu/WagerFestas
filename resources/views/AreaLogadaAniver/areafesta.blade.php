<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WagerFestas - Menu</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('images/wagerlogo.png') }}" type="image/x-icon">
</head>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/aniver_menu" class="text-white hover:underline bg-red-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Voltar</a>
                <h1 class="text-4xl font-bold text-center text-black pt-6 mb-2">Detalhes da Festa</h1>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/convidados/c" class="text-white hover:underline bg-blue-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Criar Convidados</a>
                    <a href="/convidados" class="text-white hover:underline bg-blue-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Convidados confirmados</a>
                    <a href="/recomendacao" class="text-white hover:underline bg-blue-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Recomendações da festa</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</html>