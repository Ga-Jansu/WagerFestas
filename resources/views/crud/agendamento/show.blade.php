<h1>Detalhe da data{{$open_schedule->id}}</h1>


<ul>
    <li>Titulo: {{$open_schedule->data}}</li>
    <li>Comidas:{{$open_schedule->hours}}</li>
</ul>

<form action="{{route('tempo.destroy', $open_schedule->id)}}" method="post">
    @csrf 
    @method('DELETE')
    <button type="submit">Apagar</button>
</form>