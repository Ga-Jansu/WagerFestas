<h1>Convidados</h1>


<table>
    <thead>
        <th>Nome do Convidado</th>
        <th>CPF</th>
        <th>Idade</th>
        

        <th></th>
    </thead>
    <tbody>
     @foreach($invites as $invite)
        <tr>
            <td>{{$invite->name}}</td> 
            <td>{{$invite->document}}</td>
            <td>{{$invite->Age}}</td>          
            <td>
                <a href="{{route('convidados.show', $invite->id)}}">Ver</a>
        </tr>
    @endforeach
    </tbody>
</table>
