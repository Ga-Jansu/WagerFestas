<h1>Cardápios</h1>


<a href="{{ route('admin.create')}}">Adicionar comidas</a>


<table>
    <thead>
        <th>Titulo</th>
        <th>conteudo</th>
        <th></th>
    </thead>
    <tbody>
     @foreach($foods as $food)
        <tr>
            <td>{{$food->name}}</td>
            <td>{{$food->body}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
		 