<h1>Adicionar recomendação<h1>

    <form action="{{route('recomendacao.create')}}" method="POST">
        @csrf()
        <textarea name="body" cols="30" rows="5" placeholder="Recomendações"></textarea>
    
        <button type="submit">Enviar</button>
    </form>