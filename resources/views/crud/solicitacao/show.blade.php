<h1>Detalhe do pedido do {{$bookings->name_birthdayperson}}</h1>


<ul>
    <li>Nome aniversariante: {{$bookings->name_birthdayperson}}</li>
    <li>Idade comemorada: {{$bookings->years_birthdayperson}}</li>
    <li>Quantidade de Convidados: {{$bookings->qnt_invited}}</li>
    <li>Data do Agendamento: {{$bookings->date}}</li>
    <li>Pacote de comida: {{$bookings->food->name}}</li>
    <br/>
</ul>

<form action="{{route('solicitacao/destroy', $bookings->id)}}" method="post">
    @csrf 
    @method('DELETE')
    <button type="submit">Negar</button>
</form>
<form action="{{route('solicitacao/aprovar', $bookings->id)}}" method="get">
    <button type="submit">Aprovar</button>
</form>

<form action="{{route('solicitacao/index')}}" method="get">
    <button type="submit">Inicio</button>
</form>