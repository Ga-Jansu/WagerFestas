<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WagerFestas - Recomendação</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/wagerlogo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/admin_menu" class="text-white hover:underline bg-red-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Voltar</a>
                <h1 class="text-4xl font-bold text-center text-black pt-6 mb-2">Recomendações</h1>
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full whitespace-no-wrap">
                        <thead class="text-center font-bold">
                            <th class="border px-6 py-4">Comentários</th>
                            <th class="border px-2 py-2 text-right">Ações</th>
                        </thead>
                        <tbody class="bg-white">
                            @foreach($recommendations as $recommendation)
                            <tr>
                                <td class="border px-10 py-4">{{$recommendation->body}}</td>
                                <td class="border px-2 py-2 text-right">
                                    <div class="flex justify-end items-center space-x-3">
                                        <div class="bg-blue-500 text-white px-2 py-1 rounded-full">
                                            <a href="{{route('recomendacao.show', $recommendation->id)}}">Ver</a>
                                        </div>
                                        <div class="bg-blue-500 text-white px-2 py-1 rounded-full">
                                            <a href="{{route('recomendacao.edit', $recommendation->id)}}">Editar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{route('recomendacao.create')}}">Adicionar recomendação</a>
                    <div class="text-center mt-4">
                        <a href="{{route('recomendacao.create')}}" class="bg-blue-500 text-white px-4 py-2 rounded-full text-lg">Adicionar recomendações</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</html>
