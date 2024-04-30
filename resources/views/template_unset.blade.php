<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link @yield('css-style') rel="stylesheet">
        <title>@yield('title') – Exemplo View</title>
    </head>
    <body>
        <header>
        <div class="logo">
        <a href="{{ asset('/') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo da Empresa"></a>
        </div>
        <div class="botoes">
            <button><a href="{{ asset('/') }}" class="botao-header">Anuncios</a></button>
            <button><a href="{{ asset('register') }}" class="botao-header">Registrar-se</a></button>
            <button><a href="{{ asset('login') }}" class="botao-header">Logar</a></button>
        </div>
        </header>
        <main class="main-content">
            @yield('content')
        </main>
        <footer class="rodape" id="contato">
        <div class="rodape-div">
            <div class="rodape-div-1">
                <div class="rodape-div-1-coluna">
                    <!-- elemento -->
                    <span><b>LOGO</b></span>
                    <p>SIA Trecho 5 lote 000 bloco z sala 900 - Guará, Brasília - DF, 70000-010</p>
                </div>
            </div>
            <div class="rodape-div-2">
                <div class="rodape-div-2-coluna">
                    <!-- elemento -->
                    <span><b>Contatos</b></span>
                    <p>contato@na.na</p>
                    <p>+55 63 99200-0000</p>
                </div>
            </div>
            <div class="rodape-div-3">
                <div class="rodape-div-3-coluna">
                    <!-- elemento -->
                    <span><b>Links</b></span>
                    <p><a href="#servicos">Serviços</a></p>
                    <p><a href="#empresa">Empresa</a></p>
                    <p><a href="#sobre">Sobre</a></p>
                </div>
            </div>
            <div class="rodape-div-4">
                <div class="rodape-div-4-coluna">
                    <!-- elemento -->
                    <span><b>Outros</b></span>
                    <p>Políticas de Privacidade</p>
                </div>
            </div>
            </div>
            <p class="rodape-direitos">Copyright © 2023 – Todos os Direitos Reservados.</p>
        </footer>
        
    </body>
</html>