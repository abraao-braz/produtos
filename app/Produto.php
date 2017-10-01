<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;

class Produto extends Model
{
    //
    protected $table = 'produtos';

    protected $fillable = [
        'categoria_id',
        'nome',
        'descricao',
        'preco',
        'url_imagem',
    ];


    public function categorias()
    {
    	return $this->belongsTo('Categoria');
    }

}
