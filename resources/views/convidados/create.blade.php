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
                <a href="/areafesta" class="text-white hover:underline bg-red-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Voltar</a>
                <h1 class="text-4xl font-bold text-center text-black pt-6 mb-2">Confirmar Presença</h1>
                <form action="{{route('convidados.create')}}" method="POST">
                    @csrf()
                    <div class="mb-4 w-full">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nome do Convidado</label>
                        <input type="text" id="name" placeholder="Nome do Convidado" name="name" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-4 w-full">
                        <label for="body" class="block text-gray-700 text-sm font-bold mb-2">CPF do convidado</label>
                        <textarea name="document" id="document" class="form-textarea resize-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" cols="30" rows="1" placeholder="CPF do convidado"></textarea>
                    </div>

                    <div class="mb-4 w-full">
                        <label for="body" class="block text-gray-700 text-sm font-bold mb-2">Idade do convidado</label>
                        <textarea name="age" id="age" class="form-textarea resize-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" cols="30" rows="1" placeholder="Idade do convidado"></textarea>
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
