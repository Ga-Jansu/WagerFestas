<h1>Detalhe do horario {{$open_schedule->id}}</h1>


<ul>
    <li>Data do Agendamento: {{$open_schedule->data}}</li>
    <br/>
</ul>

<form action="{{route('tempo.destroy', $open_schedule->id)}}" method="post">
    @csrf 
    @method('DELETE')
    <button type="submit">Apagar</button>
</form>
<form action="{{route('tempo.index')}}" method="get">
    <button type="submit">Inicio</button>
</form>