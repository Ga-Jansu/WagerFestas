<h1>Confirmar Preseça<h1>

    <form action="{{route('convidados.create')}}" method="POST">
        @csrf()
        <input type="text" placeholder="Nome do Convidado" name="name">
        <textarea name="document" cols="30" rows="5" placeholder="CPF do convidado"></textarea>
        <textarea name="age" cols="30" rows="5" placeholder="Idade do convidado"></textarea>
    
        <button type="submit">Enviar</button>
    </form>