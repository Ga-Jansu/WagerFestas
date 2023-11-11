<h1>Recomendação</h1>


<a href="{{route('recomendacao.create')}}">Adicionar recomendacao</a>


<table>
    <thead>
        <th>Recomendações</th>
        <th></th>
    </thead>
    <tbody>
     @foreach($recommendations as $recommendation)
        <tr>
            <td>{{$recommendation->body}}</td>           
            <td>
                <a href="{{route('recomendacao.show', $recommendation->id)}}">Ver</a>
                <a href="{{route('recomendacao.edit', $recommendation->id)}}">Editar</a>
    

        </tr>
    @endforeach
    </tbody>
</table>
