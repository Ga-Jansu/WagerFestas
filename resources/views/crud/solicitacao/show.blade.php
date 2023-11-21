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
                <a href="/admin/solicitacao" class="text-white hover:underline bg-red-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Voltar</a>
                <h1 class="text-4xl font-bold text-center text-black pt-6 mb-2">Detalhe do pedido do/a {{$bookings->name_birthdayperson}}</h1>
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('solicitacao.destroy', $bookings->id)}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <ul>
                            <li>Nome aniversariante: {{$bookings->name_birthdayperson}}</li>
                            <li>Idade comemorada: {{$bookings->years_birthdayperson}}</li>
                            <li>Quantidade de Convidados: {{$bookings->qnt_invited}}</li>
                            <li>Data do Agendamento: {{$bookings->date}}</li>
                            <li>Pacote de comida: {{$bookings->food->name}}</li>
                            <br/>
                        </ul>
                        <div class="text-center mt-4">
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-full w-full max-w-sm mx-auto text-lg">Negar</button>
                        </div>
                    </form>
                    <form action="{{route('solicitacao.approve', $bookings->id)}}" method="get">
                        <div class="text-center mt-4">
                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-full w-full max-w-sm mx-auto text-lg">Aprovar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>