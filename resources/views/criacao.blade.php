@extends('templates.baseHtml')
@section('exemplo')

<!-- A parte de erros do usando extendendo a classe Resquest: FUNCIONANDO-->
<div> 
    @if(isset($errors) && count($errors)>0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach($errors->all() as $erro)
                {{$erro}}<br>
            @endforeach
        </div>
    @endif

    <h1 class="text-center">@if(isset($book)) Editar @else Cadastrar @endif</h1> <hr>
@if(isset($book))
    <form name="formEdit" id="formEdit" action="{{url("book/$book->id")}}" method="post">
        @method('PUT')
@else
    <form name="formCad" id="formCad" action="{{url('book')}}" method="post">
@endif
@csrf
    <div class="form-group">
        <label for="cad_pct_nome">Titulo</label>
        <input type="text" class="form-control" name="titulo" id="cad_pct_nome" value="{{$book->titulo ?? ''}}" placeholder="Nome e Sobre Nome">       
    </div>
    <div class="form-group">
    <label for="id_user">Autor</label>
    <select class="form-control" name="id_user" id="id_user"> 
        <option value="{{$book->relUser->id ?? ''}}">{{$book->relUser->name ?? 'Autor'}}</option>               
        @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
    </div>
    <div class="form-group">
          <label for="obs_agendamento">Preço</label>
          <input type="text" class="form-control" name="preco" value="{{$book->preco ?? ''}}" id="cad_diagnostico">
          <small id="cad_pct_dgn" class="form-text text-muted">*Campo não obrigatorio </small>
    </div>
    <div class="form-group">
        <label for="cad_pct_pages">Paginas</label>
        <input type="text" class="form-control" name="paginas" value="{{$book->paginas ?? ''}}" id="cad_pct_telefone" placeholder="paginas do livro">
        <small id="small_pages" class="form-text text-muted">*Campo não obrigatorio </small>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="reset" class="btn btn-secundary">Cancelar</button>
    </form>
</div>
@endsection