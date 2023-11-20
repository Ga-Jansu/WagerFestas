<h1>Horarios</h1>


<a href="{{route('tempo.create')}}">Adicionar Data</a>


<table>
    <thead>
        <th>Data</th>
        <th>Horas</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($open_schedules as $open_schedule)
           <tr>
               <td>{{$open_schedule->data}}</td>
               <td>{{$open_schedule->hours}}</td>
               <td>
                   <a href="{{route('tempo.show', $open_schedule->id)}}">Ver</a>
                   <a href="{{route('tempo.edit', $open_schedule->id)}}">Editar</a>
            
       
   
           </tr>
       @endforeach
       </tbody>

</table>
		 