<h1>Solicitações</h1>

<table>
    <thead>
        <th>Nome</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($booking as $bookings)
           <tr>
               <td>{{$bookings->name_birthdayperson}}</td>
               <td>
                   <a href="{{route('solicitacao.show', $bookings->id)}}">Detalhes</a>         
           </tr>
       @endforeach
       </tbody>

</table>
<br>
<a href="/admin_menu" class="text-black hover:underline bg-red-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Voltar</a>
		 