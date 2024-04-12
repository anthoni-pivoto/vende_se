@extends('template')
@section('title', 'lista')
@section('css-style')
    href="{{ asset('css/style_template.css') }}"
@endsection
@section('sidebar')
    @parent
    <p>ainda nao sei oq é essa side bar</p>
@endsection
@section('content')
<h3>aNUNCIOS:</h3>
@foreach($anuncios as $anuncio)
<p>{{$anuncio->value}}</p>
<p>{{$anuncio->description}}</p>
<p>{{$anuncio->name}}</p>
@endforeach
@endsection
