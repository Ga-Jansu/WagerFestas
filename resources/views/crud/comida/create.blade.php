<h1>Adicionar comidas<h1>

<form action="{{route('comida.create')}}" method="POST">
    @csrf()
    <input type="text" placeholder="Assunto" name="name">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
    <textarea name="drink" cols="30" rows="5" placeholder="Descrição"></textarea>
    <input type="number" placeholder="preço" name="money">

    <button type="submit">Enviar</button>
</form>