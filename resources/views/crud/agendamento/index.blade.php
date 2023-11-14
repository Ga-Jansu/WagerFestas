<h1>Cardápios</h1>


<a href="{{ route('comida.create')}}">Adicionar comidas</a>


<table>
    <thead>
        <th>Titulo</th>
        <th>Comidas</th>
        <th>Bebidas</th>
        <th>Preço</th>
        <th></th>
    </thead>
    <tbody>
     @foreach($foods as $food)
        <tr>
            <td>{{$food->name}}</td>
            <td>{{$food->body}}</td>
            <td>{{$food->drink}}</td>
            <td>{{$food->money}}</td>
            <td>
                <a href="{{route('comida.show', $food->id)}}">Ver</a>
                <a href="{{route('comida.edit', $food->id)}}">Editar</a>
    

        </tr>
    @endforeach
    </tbody>
</table>
		 