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
            <button><a href="{{ asset('anuncio/create') }}" class="botao-header">Novo Anuncio</a></button>
            <button><a href="{{ asset('anuncio') }}" class="botao-header">Meus Anuncios</a></button>
            <button><a href="{{ asset('profile') }}" class="botao-header">Perfil</a></button>
        </div>
        </header>
        <main class="main-content">
            @yield('content')
        </main>
        <footer class="rodape" id="contato">
        <div class="rodape-div">
            <div class="rodape-div-1">
                <div class="rodape-div-1-coluna">
                    <span><b>Anthoni Pivoto</b></span>
                    <p>Vende-se o que você procura, anuncie aqui também</p>
                </div>
            </div>
            <div class="rodape-div-2">
                <div class="rodape-div-2-coluna">
                    <span><b>Contatos</b></span>
                    <p>anthonipivoto@gmail.com</p>
                    <p>+55 51 98505-9805</p>
                </div>
            </div>
            <div class="rodape-div-3">
                <div class="rodape-div-3-coluna">
                    <span><b>Links</b></span>
                    <p><a href="#servicos"></a></p>
                    <p><a href="#empresa">Empresa</a></p>
                    <p><a href="#sobre">Sobre</a></p>
                </div>
            </div>
            <div class="rodape-div-4">
                <div class="rodape-div-4-coluna">
                    <span><b>Outros</b></span>
                    <p>Políticas de Privacidade</p>
                </div>
            </div>
            </div>
        </footer>
        <div class="rodape-direitos">Copyright © 2023 – Todos os Direitos Reservados.</div>
    </body>
</html>