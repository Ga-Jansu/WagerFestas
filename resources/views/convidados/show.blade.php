<h1>Detalhe do Convidado {{$invite->id}}</h1>


<ul>
    <li>Titulo: {{$invite->name}}</li>
    <li>CPF:{{$invite->document}}</li>
    <li>Idade:{{$invite->Age}}</li>
</ul>

<form action="{{route('convidados.destroy', $invite->id)}}" method="post">
    @csrf 
    @method('DELETE')
    <button type="submit">Apagar</button>
</form>