@extends('template')
@section('title', 'Form create')
@section('css-style')
    href="{{ asset('css/style_template.css') }}"
@endsection
@section('content')
<h3>Atualizar item</h3>
<form method="POST" action="../atualizar/{{$anuncio['id']}}"
enctype="multipart/form-data">
    @csrf
    Nome do item:
    <input type="text" name="name" value="{{$anuncio->name}}"></br></br>
    Descrição:
    <input type="text" name="description" value="{{$anuncio->description}}"></br></br>
    Valor item:
    <input type="number" step="0.01" name="value" value="{{$anuncio->value}}"></br></br>
    <img src="{{ asset("storage/{$anuncio->imagem}") }}" alt="{{$anuncio->imagem}}
    height="40%" width="40%"">
    <br><br>
    <input type="file" name="imagem"></br></br>
    <input class="botao" type="submit" name="submit" value="Atualizar">
</form>

@endsection