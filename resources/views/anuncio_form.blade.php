@extends('template')
@section('title', 'Form create')
@section('css-style')
    href="{{ asset('css/style_template.css') }}"
@endsection
@section('content')
<h3>Cadastro de item</h3>
<form method="POST" action="{{route('anuncio.store')}}" enctype="multipart/form-data">
    @csrf
    Nome do item:
    <input type="text" name="name"></br></br>
    Descrição:
    <input type="text" name="description"></br></br>
    Valor item:
    <input type="number" step="0.01" name="value"></br></br>
    <input type="file" name="arquivo"></br></br>
    <input class="botao" type="reset" value="Limpar">                                       
    <input class="botao" type="submit" name="submit" value="Criar">
</form>
<a href={{route('anuncio.index')}}>Link para o método index </a>
@endsection