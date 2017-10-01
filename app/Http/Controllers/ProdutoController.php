<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Categoria;
use Illuminate\Http\Request;



class ProdutoController extends Controller
{
    //

    public function index()
    {
        return view('produto.home')->with(['produtos'=>Produto::all(),'categorias'=>Categoria::all()]);
    }


    public function cadastro(){

        return view('produto.cadastro')->with(['categorias'=>Categoria::all()]);
    }


    public function remove($id){

        Produto::destroy([$id]);


        return redirect()->route('produto');

    }



    public function insert(Produto $produto, Request $request)
    {



        if($request->isMethod('post')){




            if($request->hasFile('img_produto'))

            $file = $request->file('img_produto');

            $destinationPath = 'produtos_images';

            $extension = $file->getClientOriginalExtension();

            $fileName = rand(1111,9999).'.'.$extension;

            $file->move($destinationPath, $fileName);

           }


            $produto = [
                'categoria_id' => $request->input('categoria'),
                'nome' => $request->input('nome'),
                'descricao' => $request->input('descricao'),
                'preco' => $request->input('preco'),
                'url_imagem' => $destinationPath.'/'.$fileName
            ];


            if(Produto::create($produto)){
                return redirect()->route('produto');
            }





    }



    public function edit(Request $request, $id)
    {



        if($request->isMethod('post')){


            if($request->hasFile('img_produto')) {

                $file = $request->file('img_produto');

                $destinationPath = 'produtos_images';

                $extension = $file->getClientOriginalExtension();

                $fileName = rand(1111, 9999) . '.' . $extension;

                $file->move($destinationPath, $fileName);

                $image_full = $destinationPath.'/'.$fileName;

            }else{
                $image_full = $request->input('img_atual');
            }

            //dd($request);

            $produto_up = Produto::find($request->input('id_prod'));

            $produto_up->categoria_id = $request->input('categoria');
            $produto_up->nome = $request->input('nome');
            $produto_up->descricao = $request->input('descricao');
            $produto_up->preco = $request->input('preco');
            $produto_up->url_imagem = $image_full;




            if($produto_up->save()){
                return redirect()->route('produto');
            }

        }else{

            return view('produto.edit')->with(['produto'=>Produto::find($id),'id'=>$id,'categorias'=>Categoria::all()]);
        }





    }


}
