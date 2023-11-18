<h1>Data{{$open_schedule->id}}<h1>

    <form action="{{route('tempo.update', $open_schedule->id)}}" method="POST">
        @csrf()
        @method('PUT')
        <input type="integer" placeholder="Horas" name="hours" value="{{$open_schedule->hours}}">
        <input type="data" placeholder="data" name="data" value="{{$open_schedule->data}}">
    
        <button type="submit">Enviar</button>
    </form>