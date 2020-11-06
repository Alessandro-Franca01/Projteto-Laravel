<?php

use Illuminate\Database\Seeder;
use App\Models\ModelBooks;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBooks $book)
    {
        // Mesmo metodo usado para salvar os registros no controller: Funcionou
        $book->create([
            'titulo'=>'O senhor dos anéis',
            'paginas'=>'100',
            'preco'=>'10.22',
            'id_user'=>'1'
        ]);

    }
}
