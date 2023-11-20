<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WagerFestas - Admin</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{URL::asset('images/wagerlogo.png') }}" type="image/x-icon">
</head>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="text-4xl font-bold text-center text-black pt-6 mb-2">Você está logado como admin!</h1>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/admin/comida" class="text-white hover:underline bg-blue-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Cardápios</a>
                    <a href="/admin/recomendacao" class="text-white hover:underline bg-blue-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Recomendações</a>
                    <a href="/admin/horario" class="text-white hover:underline bg-blue-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Agendamentos</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

</html>
