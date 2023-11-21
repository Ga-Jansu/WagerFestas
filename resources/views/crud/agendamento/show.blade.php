<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WagerFestas - Detalhes</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{URL::asset('images/wagerlogo.png') }}" type="image/x-icon">
</head>
    
<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/admin/horario" class="text-white hover:underline bg-red-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Voltar</a>
                <h1 class="text-4xl font-bold text-center text-black pt-6 mb-2">Detalhe do horario {{$open_schedule->id}}</h1>
                <h1></h1>
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('tempo.destroy', $open_schedule->id)}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <ul>
                            <br>
                            <li>Data do Agendamento: {{$open_schedule->data}}</li>
                            <br/>
                        </ul>
                        <div class="text-center mt-4">
                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-full w-full max-w-sm mx-auto text-lg">Apagar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>