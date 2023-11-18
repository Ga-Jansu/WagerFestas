<head>
    <script type="text/javascript" src="{{ URL::asset('ckeditor/ckeditor.js') }}"></script>
    <link rel="shortcut icon" href="{{ URL::asset('images/wagerlogo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>


<body>
    <header>
        <img src="{{ URL::asset('images/wagerlogo.png') }}" alt="Imagem de capa">
        <ul>
            <li><a href="/">Início</a></li>
        </ul>
    </header>

        <div class="bg">
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            </div>
            <form action="{{route('comida.create')}}" method="POST">
                @csrf()
                <textarea name="name" id="name" cols="30" rows="10" placeholder="Assunto"></textarea>
                <textarea name="body" id="body" cols="30" rows="10" placeholder="Comidas"></textarea>
                <textarea name="drink" id="drink" cols="30" rows="10" placeholder="Bebidas"></textarea>
                <textarea name="money" id="money" cols="30" rows="10" placeholder="Preço"></textarea>
                <button type="submit">Enviar</button>
            </form>
            

        </div>

    <footer>
        <p>Copyright © 2019-2023, Wager Festas Todos os direitos reservados.</p>
    </footer>

    
    
    <script>
        ClassicEditor
            .create( document.querySelector( '#name' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#drink' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#money' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

</body>