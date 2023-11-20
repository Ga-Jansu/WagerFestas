<h1>Solicitações</h1>

<table>
    <thead>
        <th>Nome</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
           <tr>
               <td>{{$booking->name_birthdayperson}}</td>
               <td>
                   <a href="{{dd(route('solicitacao.show', $booking->id))}}">Detalhes</a>         
           </tr>
       @endforeach
       </tbody>

</table>
<br>
<a href="/admin_menu" class="text-black hover:underline bg-red-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Voltar</a>
		 