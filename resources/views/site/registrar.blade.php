<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wager Festas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/wagerlogo.png') }}" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <header>
        <img src="{{ URL::asset('images/wagerlogo.png') }}" alt="Imagem de capa">
        <ul>
            <li><a href="/">Início</a></li>
        </ul>
    </header>
    <main>
        <div id="imgprincipal">
            <div class="page">
                <form method="POST" class="formLogin">
                    <h1>Login</h1>
                    <p>Digite os seus dados de acesso no campo abaixo.</p>
                    <label for="email">E-mail</label>
                    <input type="email" placeholder="Digite seu e-mail" autofocus="true" />
                    <label for="password">Senha</label>
                    <input type="password" placeholder="Digite seu e-mail" />
                    <a href="/">Esqueci minha senha</a>
                    <input type="submit" value="Acessar" class="btn" />
                </form>
            </div>
        </div>
    </main>

    <footer>
        <p>Copyright © 2019-2023, Wager Festas Todos os direitos reservados.</p>
    </footer>
</body>
</html>