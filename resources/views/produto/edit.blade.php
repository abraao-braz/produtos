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

             
               <div class="row"> 
               <div class="col-sm-4">
                <img width="200" src="/img/icones/logo_safety_degrade.png" class="img-responsive">   
               </div>
               <div class="col-sm-8">
                <h2></h2>   
               </div>
               </div>
                
            

            <div class="col-sm-12">
                 <div class="col-sm-6">
                <a class="iconDash" style="font-size: 25px" href="{{ route('home') }}"><i class="fa fa-cogs" aria-hidden="true">&nbsp;Dashboard</i></a>&nbsp;&nbsp;&nbsp;<a class="iconDash" style="font-size: 25px;" href="{{ route('site') }}"><i class="fa fa-home" aria-hidden="true">&nbsp;Home do site</i></a>
                 </div>
                 <div class="col-sm-6"></div>
             </div>

             <div class="col-sm-12">
                 <h1>Editar Produto</h1>
             </div>


            <form action="/produtos/edit/{{$id}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id_prod" value="{{$id}}">
               <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="nomeProduto">Nome do produto</label>
                        <input type="text" class="form-control" name="nome" value="{{$produto->nome}}" id="nomeProduto" aria-describedby="Inserir nome do produtos" placeholder="Digite o nome do produto">

                    </div>
               </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="nomeProduto">Categoria do produto</label>

                       <select class="form-control" name="categoria" id="categoriaProduto">
                           @foreach($categorias as $categoria) 
                            <option value="{{$categoria->categoria_id}}" @if($categoria->categoria_id == $produto->categoria_id) selected @endif>{{$categoria->descricao}}</option>
                            
                           @endforeach; 
                        </select>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="PrecoProduto">Preço do produto</label>
                        <input type="text" class="form-control" value="{{$produto->preco}}" name="preco" id="PrecoProduto" aria-describedby="Inserir preço do produto" placeholder="Ex: R$ 58,70">
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="form-group">
                        <label for="nomeProduto">Alterar imagem do produto</label>

                        <input type="hidden" name="img_atual" value="{{$produto->url_imagem}}">
                        <input type="file" name="img_produto" class="form-control" id="ImagemProduto">


                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12">

                    <img class="img-responsive" src="/{{$produto->url_imagem}}" alt="" />

                </div>


                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="nomeProduto">Descrição do produto</label>
                        <textarea name="descricao" class="form-control" id="descricaoProduto">{{$valor = trim(nl2br($produto->descricao))}}</textarea>
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
