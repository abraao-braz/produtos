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


                <div class="col-lg-12">
                <a class="btn btn-danger" href="{{ route('produto.cadastro') }}">Cadastrar Novo Produto</a>

                </div>

                <div class="col-lg-12">
                    <h1>Lista de Produtos</h1>
                    <table class="table table-stripped table-bordered" style="margin-top: 20px;">

                        <thead>

                            <tr>

                                <th>ID</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Preço</th>
                                <th>Imagem</th>
                                <th>Ações</th>
                                
                                
                            </tr>

                        </thead>

                        <tbody>

                        @foreach($produtos as $prod)
                         <tr>

                             <td>{{$prod->id}}</td>
                             <td>{{$prod->nome}}</td>
                             <td>{{$prod->descricao}}</td>
                             <td>{{$prod->preco}}</td>
                             <td><img width="150" src="/{{$prod->url_imagem}}" /></td>
                             <td><a href="/produtos/remove/{{$prod->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a> | <a href="/produtos/edit/{{$prod->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                         </tr>
                        @endforeach



                        </tbody>

                    </table>

                </div>





        </div>
    </div>

    @endguest

@stop
