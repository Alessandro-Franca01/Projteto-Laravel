<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
# Não estou entendendo bem esses "importes"
use App\Http\Requests\BookRequest;
use App\Models\ModelBooks;
use App\User;

class BookController extends Controller{

    private $objUser;
    private $objBook;

    // Com esse construtor vou acessar os dados de books e users: Funcionando
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
        #  Testando consulta com relacionamento entre tabelas: FUNCIONANDO!
        //dd($this->objUser->find(1)->relModelBook);

        $book = $this->objBook->all(); // Passando todos os livros para a variavel book
        //dd($book);
        return view('./templates/book', compact('book')); // Redirecionando e Passando para dentro da pagina tabela $book
    }

    /**
     * Metodo create está funcionado normalmente:
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->objUser->all();
        //dd($users);
        return view('./criacao', \compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     // Metodo para receber os dados do Post e salvar no banco de dados
    public function store(BookRequest $request)
    {
        // Esse metodo create do objBook não é da classe controller, e sim do modelo!
        // Falta fazer a implementação da validação!!1
        $this->objBook->create([
            'titulo' => $request->titulo,
            'id_user' => $request->id_user,
            'paginas' => $request->paginas,
            'preco' => $request->preco
        ]);
        
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
     *  Esse EDIT para ser o metodo que vai ser mandado a principio
     *  Depois vai ser usado o metodo UPDATE "PUT" para fazer a alteração no banco de dados
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=$this->objBook->find($id);
        $users=$this->objUser->all();
        return view('criacao', compact('book','users'));
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
        $this->objBook->where(['id'=>$id])->update([
            'titulo' => $request->titulo,
            'id_user' => $request->id_user,
            'paginas' => $request->paginas,
            'preco' => $request->preco
        ]);
        return \redirect('book');
    }

    /**
     * Não fazer ainda por causa do conhecimento em js:
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
