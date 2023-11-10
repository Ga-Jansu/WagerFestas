<h1>Detalhe do Cardapio {{$food->id}}</h1>


<ul>
    <li>Titulo: {{$food->name}}</li>
    <li>Comidas:{{$food->body}}</li>
    <li>Bebidas:{{$food->drink}}</li>
    <li>Preço: {{$food->money}}</li>
</ul>

<form action="{{route('comida.destroy', $food->id)}}" method="post">
    @csrf 
    @method('DELETE')
    <button type="submit">Apagar</button>
</form>