<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBooks;
use App\User;

class BookController extends Controller{

    private $objUser;
    private $objBook;

    // Esse construtor vai receber os objetos do banco de dados diretamente: Como ?
    function __construct(){
        $this->objUser = new User();
        $this->objBook = new ModelBooks();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     # Usando o controler e testando umas propriedades
    public function index()
    {
        // Passar o caminho desda do diretorio "view" como "./"
        //return view('./templates/tabela');
        
        #  Testando consulta com relacionamento entre tabelas: FUNCIONANDO!
        //dd($this->objUser->find(1)->relModelBook);

        $book = $this->objBook->all(); // Passando todos os livros para a variavel book
        //dd($book);
        return view('./templates/book', compact('book')); // Redirecionando e Passando para dentro da pagina tabela $book
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Redirecionar para o formulario
        return view('criacao');
        //echo '<h1> HELLO WORLD</h1>'; // FUNCIONANDO!
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    # TESTANDO: FUNCIONANDO NORMALMENTE
    public function show($id){   
        // Vou passar o id do parametro para encontrar o livro certo dentro lista de livros e retorna-lo
        $book = $this->objBook->find($id);
        #dd($book);
        return view('visualizar', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
