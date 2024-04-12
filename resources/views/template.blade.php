<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link @yield('css-style') rel="stylesheet">
        <title>@yield('title') – Exemplo View</title>
    </head>
    <body>
        <header>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo da Empresa">
        </div>
        <div class="botoes">
            <button><a href="{{ asset('login') }}">login</a></button>
            <button><a href="{{ asset('register') }}">register</a></button>
            <button>Botão 3</button>
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