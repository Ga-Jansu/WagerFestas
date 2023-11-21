<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WagerFestas - Editar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{URL::asset('images/wagerlogo.png') }}" type="image/x-icon">
</head>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/admin/horario" class="text-white hover:underline bg-red-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Voltar</a>
                <h1 class="text-4xl font-bold text-center text-black pt-6 mb-2">Agendamento {{$open_schedule->id}}</h1>
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('tempo.update', $open_schedule->id)}}" method="POST">
                        @csrf()
                        @method('PUT')
                        <br>
                        <div class="mb-4 w-full">
                            <input type="datetime-local" placeholder="Assunto" id="data" value="{{$open_schedule->data}}" name="data" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <br>
                        <div class="text-center mt-4">
                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-full w-full max-w-sm mx-auto text-lg">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>