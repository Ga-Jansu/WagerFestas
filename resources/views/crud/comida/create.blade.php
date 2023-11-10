<h1>Adicionar comidas<h1>

<form action="{{route('comida.create')}}" method="POST">
    @csrf()
    <input type="text" placeholder="Assunto" name="name">
    <textarea name="body" cols="30" rows="5" placeholder="Comidas"></textarea>
    <textarea name="drink" cols="30" rows="5" placeholder="Bebidas"></textarea>
    <input type="number" placeholder="Preço" name="money">

    <button type="submit">Enviar</button>
</form>