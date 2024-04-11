@extends('template')
@section('title', 'Form create')
@section('sidebar')
    @parent
    <p>ainda nao sei oq é essa side bar</p>
@endsection
@section('content')
<h3>Login</h3>
<form method="POST" action="{{route('anuncio.store')}}">
    @csrf
    Usuário:
    <input type="text" name="usuario"></br></br>
    Senha:
    <input type="password" name="senha"></br></br>
    <input class="botao" type="reset" value="Limpar">
    <input class="botao" type="submit" name="submit" value="Logar">
</form>
<a href={{route('anuncio.index')}}>Link para o método index </a>
<<<<<<< HEAD

=======
>>>>>>> 225a56dfdc26eab88f556ab296ab68833ca2f258
@endsection