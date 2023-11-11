<h1>Recomendações{{$recommendation->id}}<h1>

    <form action="{{route('recomendacao.update', $recommendation->id)}}" method="POST">
        @csrf()
        @method('PUT')
        <textarea name="body" cols="30" rows="5" placeholder="Recomendação">{{$recommendation->body}}</textarea>
        <button type="submit">Enviar</button>
    </form>