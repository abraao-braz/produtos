<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;

class Categoria extends Model
{
    //
    protected $categoria;
    protected $fillable = [
        'descricao'
    ];

    public function produtos()
    {
    	 return $this->hasMany('App\Produto','categoria_id','categoria_id');
    }
}
