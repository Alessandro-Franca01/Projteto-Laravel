<!doctype html>
<html lang="pt-br">
  <head>

    <title> Usando o Template </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=no, shrink-to-fit=no">

    <!-- Bootstrap está Funcionando! # OBS: url a parti da pasta public -->
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
  </head>

  <body>
    @yield('exemplo')
  </body>
</html>