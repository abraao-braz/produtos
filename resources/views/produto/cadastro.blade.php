@extends('layouts/app')

@section('content')

    @guest

        <div class="container">

            <h2>Você não tem permissão para visualizar esta pagina!</h2>
            <p class="small">Realize o login.</p>

        </div>

    @else
    <div class="row">
        <div class="container">

             <div class="jumbotron"><h2>Cadastro de produtos</h2></div>

            <form action="{{ route('produto.salvar') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="nomeProduto">Nome do produto</label>
                        <input type="text" class="form-control" name="nome" id="nomeProduto" aria-describedby="Inserir nome do produtos" placeholder="Digite o nome do produto">

                    </div>
               </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="nomeProduto">Categoria do produto</label>
                        <select class="form-control" name="categoria" id="categoriaProduto">
                           @foreach($categorias as $categoria) 
                            <option value="{{$categoria->categoria_id}}">{{$categoria->descricao}}</option>
                            
                           @endforeach; 
                        </select>

                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="PrecoProduto">Preço do produto</label>
                        <input type="text" class="form-control" name="preco" id="PrecoProduto" aria-describedby="Inserir preço do produto" placeholder="Ex: R$ 58,70">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="nomeProduto">Imagem para o produto</label>
                        <input type="file" name="img_produto" class="form-control" id="ImagemProduto">


                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="nomeProduto">Descrição do produto</label>
                        <textarea name="descricao" class="form-control" id="descricaoProduto"></textarea>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">

                        <input type="submit" class="form-control btn btn-default btn-success" value="Salvar cadastro" />

                    </div>

                </div>



            </form>


        </div>
    </div>

    @endguest

@stop
