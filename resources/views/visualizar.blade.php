@extends('templates.baseHtml')

@section('exemplo')

<h1> Exibndo os dados do Livro </h1><br>
<h3> ID: {{$book->id}}</h3>
<h3> Titulo: {{$book->titulo}}</h3>
<h3> Preço: {{$book->preco}}</h3>
<h3> Páginas: {{$book->paginas}}</h3>


@endsection