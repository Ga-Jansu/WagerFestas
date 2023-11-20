<h1>Recomendação</h1>


<table>
    <thead>
        <th>Recomendações</th>
        <th></th>
    </thead>
    <tbody>
     @foreach($recommendations as $recommendation)
        <tr>
            <td>{{$recommendation->body}}</td>           
    

        </tr>
    @endforeach
    </tbody>
</table>