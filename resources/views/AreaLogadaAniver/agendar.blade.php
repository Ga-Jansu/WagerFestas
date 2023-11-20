<h1>Agendar festa<h1>

    <form action="{{route('aniver.create')}}" method="POST">
        @csrf()
        <input type="text" placeholder="Nome" name="name_birthdayperson">
        <input type="number" placeholder="Idade" name="years_birthdayperson">
        <input type="number" placeholder="Numero de convidados" name="qnt_invited">
        <select name="open_schedule_id" id="open_schedule_id">
            @foreach($openSchedules as $schedule)
                <option value="{{$schedule->id}}" data-date="{{ $schedule->data }}">{{ $schedule->data }}</option>
            @endforeach
        </select>
        <br>
        <br>
        <label>Escolha um Pacote:</label><br>
        @foreach($foods as $food)
            <li>
                <label for="food_{{ $food->id }}">
                    <input type="radio" id="food_{{ $food->id }}" name="food_id" value="{{ $food->id }}">
                    <strong>{{$food->name}}</strong>
                    {{$food->body}}
                    {{$food->drink}}
                    R${{$food->money}} por pessoa
                </label>
            </li>
        @endforeach
            
        <button type="submit">Enviar</button>
    </form>