@extends('templates.baseHtml')

@section('exemplo')
    @php
        $user = $book->find($book->id)->relUser;
    @endphp

<h3> Exibndo os dados do Livro </h3>
<p> <strong> ID: </strong> {{$book->id}}</p>
<p> <strong> Titulo: </strong> {{$book->titulo}}</p>
<p> <strong> Autor: </strong> {{$user->name}}</p>
<p> <strong> Preço: </strong> {{$book->preco}}</p>
<p> <strong> Páginas: </strong> {{$book->paginas}}</p>
<p> <strong> Email do Autor: </strong> {{$user->email}}</p>
@endsection