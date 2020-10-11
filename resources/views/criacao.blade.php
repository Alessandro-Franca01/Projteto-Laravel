@extends('templates.baseHtml')


@section('exemplo')
<div> 

</div>
<!-- Essa -->
<form action="#" method="post">
@csrf
    <div class="form-group">
        <label for="cad_pct_nome">Titulo</label>
        <input type="text" class="form-control" name="cad_pct_nome" id="cad_pct_nome" placeholder="Nome e Sobre Nome">
        <small id="small_pacinete" class="form-text text-muted">*Não use preposições tipo: de,da,do </small>
    </div>
    <div class="form-group">
        <label for="cad_pct_responsavel">Autor</label>
        <input type="text" class="form-control" name="cad_pct_responsavel" id="cad_pct_responsavel" placeholder="Primeiro Nome">
        <small id="help_respon" class="form-text text-muted">*Campo não obrigatorio </small>
    </div>
    <div class="form-group">
          <label for="obs_agendamento">Preço</label>
          <input type="text" class="form-control" name="cad_pct_dgn" id="cad_diagnostico">
          <small id="cad_pct_dgn" class="form-text text-muted">*Campo não obrigatorio </small>
    </div>
    <div class="form-group">
        <label for="cad_pct_telefone">Paginas</label>
        <input type="text" class="form-control" name="cad_pct_telefone" id="cad_pct_telefone" placeholder="Telefone ou Celular">
        <small id="small_telefone" class="form-text text-muted">*Campo não obrigatorio </small>
    </div>
    <div class="form-group">
        <label for="cad_pct_email">Email</label>
        <input type="email" class="form-control" name="cad_pct_email" id="cad_pct_email" aria-describedby="help_email_pc" placeholder="Email do Paciente">
        <small id="help_email_pc" class="form-text text-muted">*Campo não obrigatorio </small>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="reset" class="btn btn-secundary">Cancelar</button>
    </form>
    

@endsection