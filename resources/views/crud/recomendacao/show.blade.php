<h1>Detalhe da recomendação {{$recommendation->id}}</h1>


<ul>
    <li>Recomendações:{{$recommendation->body}}</li>
</ul>

<form action="{{route('recomendacao.destroy', $recommendation->id)}}" method="post">
    @csrf 
    @method('DELETE')
    <button type="submit">Apagar</button>
</form>