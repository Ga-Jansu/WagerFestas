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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <a href="/admin/comida" class="text-white hover:underline bg-red-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Voltar</a>
                <form action="{{ route('comida.create') }}" method="POST" class="w-full max-w-lg mx-auto bg-white p-8 rounded-md shadow-md flex flex-col items-start">
                    @csrf()
                    <div class="mb-4 w-full">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Assunto</label>
                        <input type="text" id="name" name="name" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4 w-full">
                        <label for="body" class="block text-gray-700 text-sm font-bold mb-2">Comidas</label>
                        <textarea name="body" id="body" class="form-textarea resize-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" cols="30" rows="10" placeholder="Comidas"></textarea>
                    </div>
                    <div class="mb-4 w-full">
                        <label for="drink" class="block text-gray-700 text-sm font-bold mb-2">Bebidas</label>
                        <textarea name="drink" id="drink" class="form-textarea resize-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" cols="30" rows="10" placeholder="Bebidas"></textarea>
                    </div>
                    <div class="mb-4 w-full">
                        <label for="money" class="block text-gray-700 text-sm font-bold mb-2">Preço</label>
                        <input type="number" id="money" name="money"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="w-full">
                        <div class="text-center mt-4">
                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-full w-full max-w-sm mx-auto text-lg">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
</html>
