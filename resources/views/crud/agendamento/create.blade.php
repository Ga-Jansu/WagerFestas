<h1>Definir Horario<h1>

    <form action="{{route('tempo.create')}}" method="POST">
        @csrf()
        <input type="datetime-local" placeholder="Data" name="data">
    
        <button type="submit">Enviar</button>
    </form>