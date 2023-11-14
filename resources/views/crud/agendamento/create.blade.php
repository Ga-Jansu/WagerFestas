<h1>Adicionar Horario<h1>

    <form action="{{route('tempo.create')}}" method="POST">
        @csrf()
        <input type="text" placeholder="Assunto" name="name">
        <textarea name="body" cols="30" rows="5" placeholder="Comidas"></textarea>
        <textarea name="drink" cols="30" rows="5" placeholder="Bebidas"></textarea>
        <input type="data" placeholder="Preço" name="money">
    
        <button type="submit">Enviar</button>
    </form>