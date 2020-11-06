<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBooks extends Model
{
    protected $table ='book';
    protected $fillable = [
        'titulo',
        'id_user',
        'paginas',
        'preco'];

    // Relacionamento com a tabela User
    function relUser(){
        return $this->hasOne('App\User', 'id', 'id_user');
    }
}
