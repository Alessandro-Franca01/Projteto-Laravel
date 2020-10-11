<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBooks extends Model
{
    protected $table ='book';

    // Relacionamento com a tabela User
    function relUser(){
        return $this->hasOne('App\User', 'id', 'id_user');
    }
}
