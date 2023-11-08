<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WagerFestas - Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('images/wagerlogo.png') }}" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <header>
        <img src="{{ URL::asset('images/wagerlogo.png') }}" alt="Imagem de capa">
        <ul>
            <li><a href="/">Início</a></li>
            <li><a href="/registrar">Registre-se</a></li>
            <li><a href="/logar">Entrar</a></li>
        </ul>
    </header>
    <main>
        <div id="imgprincipal">
            <img src="{{ URL::asset('images/wagerlogo.png') }}" alt="IMG">
        </div>
    </main>

    <footer>
        <p>Copyright © 2019-2023, Wager Festas Todos os direitos reservados.</p>
    </footer>
</body>
</html>