<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WagerFestas - Aniversariante</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('images/wagerlogo.png') }}" type="image/x-icon">
</head>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="text-4xl font-bold text-center text-black pt-6 mb-2">Você está logado como Aniversariante!</h1>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/aniver/agendar" class="text-white hover:underline bg-blue-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Agendamentos</a>
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <thead class="text-center font-bold">
                            <th class="border px-6 py-4">Aniversario do/a</th>
                            <th class="border px-6 py-4">Status da reserva:</th>
                        </thead>
                        <tbody class="bg-white">
                            @foreach($booking as $data)
                                <tr>
                                    <td class="border px-6 py-4">{{$data->name_birthdayperson}}</td>
                                    <td class="border px-6 py-4">{{$data->status}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <br>
                    <br>
                    <br>

                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <thead class="text-center font-bold">
                            <th class="border px-6 py-4">Área da festa:</th>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($booking as $dado)
                                @if($dado->status == 'aprovado')
                                    <tr>  
                                        <td class="border px-6 py-4">{{$data->name_birthdayperson}}</td>
                                        <td class="border px-6 py-4">
                                            <div class="flex justify-center items-center space-x-3">
                                                <div class="bg-blue-500 text-white px-4 py-2 rounded-full">
                                                    <a href="{{route('area.index', ['id' => $dado->id])}}" class="text-black">Festa</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</html>