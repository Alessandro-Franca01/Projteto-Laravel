<nav class="navbar navbar-ligth bg-ligth">
    <!-- Tenho que ajeitar esse navbar para usar em outras paginas -->
    <a class="navbar-brand" href="#">
        <img src="./img/icone_tb2.png" width="30" height="30">
        Tabela de Livros
    </a>
    <a href="{{url("book/create")}}">
        <button class="btn btn-success">Cadastrar Livro</button>
    </a>
</nav>
@yield('navbar')