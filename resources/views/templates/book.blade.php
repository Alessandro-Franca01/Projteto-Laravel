@extends('templates.baseHtml')
@extends('templates.navbar')

@section('exemplo')

  @section('navbar')
  @endsection

<div col-8 m-auto>
  <!-- Funcionando a Tabela com template  -->
  <table class="table text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titulo</th>
        <th scope="col">Autor</th>
        <th scope="col">Preço</th>
        <th scope="col">Páginas</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>

      <!-- Imprimindo os dados na tabela: FUNCIONANDO -->
      @foreach($book as $books)
        @php
          $user= $books->find($books->id)->relUser;
        @endphp
        <tr>
          <th scope="row">{{$books->id}}</th>
          <td>{{$books->titulo}}</td>
          <td>{{$user->name}}</td>
          <td>{{$books->preco}}</td>
          <td>{{$books->paginas}}</td>
          <td>
          <!-- Criando o link passando o ID: FUNCIONANDO, nao esta chamando o metodo show! -->
            <a href="{{url("book/$books->id")}}">
              <button class="btn btn-dark">Visualizar</button>
            </a>
            <a href="#">
              <button class="btn btn-primary">Alterar</button>
            </a>
            <a href="#">
              <button class="btn btn-danger">Excluir</button>
            </a>
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endsection