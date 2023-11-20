<h1>Horarios</h1>


<a href="{{route('tempo.create')}}">Adicionar Data</a>


<table>
    <thead>
        <th>Data</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($open_schedules as $open_schedule)
           <tr>
               <td>{{$open_schedule->data}}</td>
               <td>
                   <a href="{{route('tempo.show', $open_schedule->id)}}">Ver</a>
                   <a href="{{route('tempo.edit', $open_schedule->id)}}">Editar</a>
            
       
   
           </tr>
       @endforeach
       </tbody>

</table>
<br>
<a href="/admin_menu" class="text-black hover:underline bg-red-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Voltar</a>
		 