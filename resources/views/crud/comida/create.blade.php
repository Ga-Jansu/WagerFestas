<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WagerFestas - Criar Cardápio</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/wagerlogo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Include CKEditor 5 library -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
</head>

<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <a href="/admin/comida" class="text-white hover:underline bg-red-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Voltar</a>
            <form action="{{ route('comida.create') }}" method="POST" class="flex flex-col justify-center items-center py-3">
                @csrf()
                <input type="text" placeholder="Assunto" name="name" class="mb-4">
                <textarea name="body" id="body" cols="30" rows="10" placeholder="Comidas" class="mb-4"></textarea>
                <textarea name="drink" id="drink" cols="30" rows="10" placeholder="Bebidas" class="mb-4"></textarea>
                <input type="number" placeholder="Preço" name="money" class="mb-4">
                <button type="submit" class="bg-green-500 text-white px-6 py-3 rounded-full">Enviar</button>
            </form>
        </div>
    </div>
</x-app-layout>
</html>
