<h1>Agendar festa<h1>

    <form action="{{route('aniver.create')}}" method="POST">
        @csrf()
        <input type="text" placeholder="Nome" name="name_birthdayperson">
        <input type="number" placeholder="Idade" name="years_birthdayperson">
        <input type="number" placeholder="N convidados" name="qnt_invited">
        <input type="date" placeholder="Data" name="party_date">
        <input type="number" placeholder="Preço" name="price">

    
        <button type="submit">Enviar</button>
    </form>