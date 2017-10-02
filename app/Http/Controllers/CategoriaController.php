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

	public function remove($id){


	$categorias = Categoria::where('categoria_id',$id)->with('produtos')->get();		

	foreach($categorias as $categoria):



		if(count($categoria->produtos) > 0):

			session(['msg'=>'Nao e possivel remover categoria com produtos, remova os produtos antes de remover a categoria']);

			
			return redirect()->back();

		else:
		

			Categoria::destroy([$id]);

			session(['msg'=>'Categoria removida com sucesso!!!']);
			

    	    return redirect()->route('categoria');



		endif;



	endforeach;	

	

	//Categoria::destroy([$id]);


      //  return redirect()->route('categoria');

    }


}
