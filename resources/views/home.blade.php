@extends('template')
@section('title', 'Teste')
@section('sidebar')
    @parent
    <p>Adicionando esse conteúdo extra no sidebar</p>
@endsection
@section('content')
<h1>Algo</h1>
<p>Conteúdo vem aqui</p>
<a href={{route('anuncio.index')}}>Link para o método index </a>
@endsection