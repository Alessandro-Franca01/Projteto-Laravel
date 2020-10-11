<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

# FAZER O TESTE DESSA CLASSE DBO...
class ModelBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Testando Funcionalidade: FUNCIONANDO
        Schema::create('book', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('paginas');
            $table->double('preco', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    # TESTAR AINDA: FUNCIONANDO
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
