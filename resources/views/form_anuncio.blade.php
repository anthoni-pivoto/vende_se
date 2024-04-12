@extends('template')
@section('title', 'Form create')
@section('css-style')
    href="{{ asset('css/style_template.css') }}"
@endsection
@section('sidebar')
    @parent
    <p>ainda nao sei oq é essa side bar</p>
@endsection
@section('content')
<h3>Criacao de Anuncio</h3>
    <form action="{{ route('anuncio.store') }}" method="GET" class='form-create'>
    @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <input type="text" id="description" name="description" required>
        </div>
        <div class="form-group">
            <label for="values">Valores:</label>
            <input type="text" id="values" name="values" required>
        </div>
        <div class="form-group">
            <button type="submit">Enviar</button>
        </div>
    </form>

@endsection