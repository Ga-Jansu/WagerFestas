<h1>Comidas{{$food->id}}<h1>

    <form action="{{route('comida.update', $food->id)}}" method="POST">
        @csrf()
        @method('PUT')
        <input type="text" placeholder="Assunto" name="name" value="{{$food->name}}">
        <textarea name="body" cols="30" rows="5" placeholder="Comidas">{{$food->body}}</textarea>
        <textarea name="drink" cols="30" rows="5" placeholder="Bebidas">{{$food->body}}</textarea>
        <input type="number" placeholder="Preço" name="money" value="{{$food->money}}">
    
        <button type="submit">Enviar</button>
    </form>