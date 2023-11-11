<h1>Comidas{{$recommendation->id}}<h1>

    <form action="{{route('recomendacao.update', $recommendation->edit)}}" method="POST">
        @csrf()
        @method('PUT')
        <textarea name="body" cols="30" rows="5" placeholder="Recomendação">{{$recommendations->body}}</textarea>
        <button type="submit">Enviar</button>
    </form>