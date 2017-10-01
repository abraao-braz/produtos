<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //
    public function index()
    {
        return view('categoria.home')->with(['categorias'=>Categoria::all()]);
    }

    public function cadastro()
    {
        return view('categoria.cadastro');
    }

    public function insert(Request $request)
    {

        if($request->isMethod('post')){


            $categoria = [
                'descricao' => $request->input('nomeCategoria')
               
            ];


            if(Categoria::create($categoria)){
                return redirect()->route('categoria');
            }





    }
}

}
