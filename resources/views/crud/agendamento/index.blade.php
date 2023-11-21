<head>
    <title>WagerFestas - Horarios</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/wagerlogo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/admin_menu" class="text-black hover:underline bg-red-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Voltar</a>
                <h1 class="text-4xl font-bold text-center text-black pt-6 mb-2">Datas</h1>
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <thead class="text-center font-bold">
                            <th class="border px-6 py-4">Horarios</th>
                            <th class="border px-6 py-4"></th>
                        </thead>
                        <tbody class="bg-white">
                            @foreach($open_schedules as $open_schedule)
                            <tr>
                                <td class="border px-6 py-4">{{$open_schedule->data}}</td>
                                <td class="border px-6 py-4">
                                    <div class="flex justify-center items-center space-x-3">
                                        <div class="bg-blue-500 text-white px-4 py-2 rounded-full">
                                            <a href="{{route('tempo.show', $open_schedule->id)}}">Ver</a>
                                        </div>
                                        <div class="bg-blue-500 text-white px-4 py-2 rounded-full">
                                            <a href="{{route('tempo.edit', $open_schedule->id)}}">Editar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center mt-4">
                        <a href="{{route('tempo.create')}}" class="bg-blue-500 text-white px-4 py-2 rounded-full text-lg">Adicionar Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>