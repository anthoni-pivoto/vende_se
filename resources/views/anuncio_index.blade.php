@extends('template')
@section('title', 'lista')
@section('css-style')
    href="{{ asset('css/style_template.css') }}"
@endsection
@section('content')
<p>Anuncios:</p>
<table class="tabela">
<tr>
<th> Imagem </th>    
<th> Nome </th>
<th> Descrição </th>
<th> VALOR </th>
<th>Editar</th>
<th>Apagar</th>
<th>Vizualizar</th>

</tr>
@foreach($anuncios as $anuncio)
<tr>
<td> <img src="{{ asset("storage/{$anuncio->arquivo}") }}" alt="{{$anuncio->imagem}}
height="40%" width="40%"" class="imagem_arquivo">  </td>
<td> {{$anuncio->name}} </td>
<td> {{$anuncio->description}} </td>
<td> {{$anuncio->value}} </td>
<td><button><a href="editar/{{$anuncio['id']}}">Editar</a></button></td>
<td><button><a href="apagar/{{$anuncio['id']}}">Apagar</a></button></td>
<td><button>Vizualizar</button></td>
@endforeach
</tr>

</table>

{!! $anuncios->links() !!}
@endsection
